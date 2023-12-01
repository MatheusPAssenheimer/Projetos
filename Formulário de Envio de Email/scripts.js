$(document).ready(function() {
    $("#contactForm").submit(function(e) {
        e.preventDefault();

        // Validação usando Validate
        const constraints = {
            nome: {
                presence: true,
            },
            telefone: {
                presence: true,
            },
            email: {
                presence: true,
                email: true,
            },
            mensagem: {
                presence: true,
            },
        };

        const formData = {
            nome: $("#nome").val(),
            telefone: $("#telefone").val(),
            email: $("#email").val(),
            mensagem: $("#mensagem").val(),
        };


        const validationResult = validate(formData, constraints);

        if (validationResult) {
            // Exibe erros de validação
            console.log(validationResult);
        } else {
            // Envia o formulário usando AJAX
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: formData,
                success: function(response) {
                    alert(response);
                },
                error: function(error) {
                    alert('N foi possivel');
                },
            });
        }
    });
});

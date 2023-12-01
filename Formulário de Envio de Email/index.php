<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="header"> <!-- Classe para definir a faixa azul -->
    <figure>
        <img src="img/logoazul-construsite.jpg"> <!-- Logo do Site --> 
    </figure> 
</div>

<div class="form-container">

         <div class = "nomeE">  <!-- Classe para definir o nome que aparece na esquerda -->
            <label for="name">Nome:</label>
            <br>
            <h4>Matheus Perdigão</h4>
        </div>

    <div class="message-box">  <!-- Classe para definir o Container com as informações -->

        <h2>Mensagem</h2>

        <form id="contactForm" action="enviar.php" method="post"> <!--Ação que vai passar para o outro arquivo-->

            <input type="text" id="nome" name="nome" placeholder="Nome*" required>

            <input type="text" id="telefone" name="telefone" placeholder ="Telefone*" required>

            <input type="email" id="email" placeholder="E-mail*" required >

            <textarea id="mensagem" name="mensagem" placeholder="Mensagem*" required ></textarea >

            <input type="submit" value="Enviar Mensagem">

        </form >
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/validate.js"></script>
    <script src="scripts.js"></script>

</body>
</html>

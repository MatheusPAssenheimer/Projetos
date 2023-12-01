<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'vendor/autoload.php';

$mail = new PHPMailer(true);
// Configurações do servidor SMTP (informações do site mailtrap.io)
try {
$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = '8095d21e570df6';
$mail->Password = 'cfd40d48bcd388';
$mail->Port = 2525;

// Configurações do email
$mail->setFrom('teste@gmail.com', 'Tester');
$mail->addAddress('Recebe@gmail.com', 'Receba');
$mail->Subject = 'Testando';

// Conteúdo do email
$mail->isHTML(true);
$mail->Body = "Nome: {$_POST['nome']}<br>
               Telefone: {$_POST['telefone']}<br>
               E-mail: {$_POST['email']}<br>
               Mensagem: {$_POST['mensagem']}";


    // Envia o email e exibe uma mensagem
    $mail->send();
    echo 'Email enviado com sucesso!';
} catch (Exception $e) {
    echo "Erro ao enviar o email: {$mail->ErrorInfo}";
}
?>

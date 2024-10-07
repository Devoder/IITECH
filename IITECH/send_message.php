<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $servico = $_POST['servico'];
    
    // Configurações do email
    $to = "domingosangelo02@gmail.com"; // Altere para seu email
    $subject = "Contato de $nome";
    $body = "Nome: $nome\nEmail: $email\nServiço: $servico";
    $headers = "From: $email";
    
    // Enviar email
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha no envio da mensagem.";
    }
}
?>

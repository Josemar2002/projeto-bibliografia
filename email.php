<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];

    // Defina o endereço de e-mail para onde deseja enviar os dados do formulário
    $destinatario = "rjosemar008@gmail.com";

    $assunto = "Formulário de Contato";

    $corpo = "Nome: " . $nome . "\n";
    $corpo .= "E-mail: " . $email . "\n";
    $corpo .= "Telefone: " . $telefone . "\n";
    $corpo .= "Mensagem: " . $mensagem;

    // Envie o e-mail
    mail($destinatario, $assunto, $corpo);

    echo "Obrigado por entrar em contato! Seu formulário foi enviado com sucesso.";
}
?>
<?php
    $to      = 'luanataurino@gmail.com';
    $subject = $_POST['assunto'];
    $message = $_POST['mensagem'];
    $headers = 'Nome: '.$_POST['nome'].''.'Email: '.$_POST['email'];

    if (mail($to, $subject, $message, $headers)) header("Location: index.php");
    else echo("<p>Email delivery failed</p>");
    
?>
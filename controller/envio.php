<?php

$to = Config::EMAIL_HOST;
$dest = $_GET['email'];
$subject = $_GET['tipo'];
$message =  'E-mail de: ' . $_GET['email'] . '\r\n' . 
            'Tipo: ' . $_GET['tipo'] . '\r\n' . 
            'Mensagem: ' . $_GET['texto'] ;

$headers = "From: " . $dest;

mail($to, $subject, $message, $headers);

?>
<div class="alert alert-success" role="alert">
    Mensagem enviada com sucesso!
</div>

<meta http-equiv="refresh" content="3; url=contato">
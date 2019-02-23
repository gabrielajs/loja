<?php 
/*PARA QUEM VAI O EMAIL*/
$to = Config::EMAIL_USER;
/*ASSUNTO*/
$subject = $_GET['setor'];
/*MENSAGEM*/
$message = $_GET['mensagem'];
/*DE ONDE VEM*/
$emailDest = $_GET['email'];
$headers = "From: " .$emailDest;
mail($to,$subject,$message,$headers);

?>

<script>alert("E-mail enviado com sucesso")</script>
<meta http-equiv="refresh" content="0; url=contato">
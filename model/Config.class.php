<?php 

Class Config{
	/* INFORMAÇÕES BASICAS DO SITE*/
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "loja";
	const SITE_NOME = "Nome da loja";
	const SITE_EMAIL_ADM = "gabrielajustinodesouza@gmail.com";

	/* INFORMAÇÕES DO BANCO DE DADOS*/
	const BD_HOST = "localhost";
	const BD_USER = "root";
	const BD_SENHA = "";
	const BD_BANCO = "loja";
	const BD_PREFIX = "";

	/* INFORMAÇÕES PARA PHP MAILER*/
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "gabrielajustinodesouza@gmail.com";
	const EMAIL_NOME = "Contato loja";
	const EMAIL_SENHA = "";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "gaby8141@hotmail.com";
}
?>
<?php

/** Classe de configuracao do projeto */

class Config
{
    //Informacoes basicas da loja
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "loja_design";
    const SITE_NOME = "G2B";
    const SITE_EMAIL_ADM = "gabrielajustinodesouza@gmail.com";
    const LIMIT_PAGE = 1;

    //Informacoes do banco de dados
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_SENHA = "";
    const DB_BANCO = "loja_design";
    const DB_PREFIX = "mc_";

    //Informacoes para PHPMAILER
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "gabrielajustinodesouza@gmail.com";
    const EMAIL_NOME = "gabrielajustinodesouza@gmail.com";
    const EMAIL_SENHA = "";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPIA = "gaby8141@hotmail.com";
}

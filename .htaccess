<IfModule mod_rewrite.c> 
RewriteEngine on 
RewriteCond %{REQUEST_FILENAME} !-f 
RewriteCond %{REQUEST_FILENAME} !-d 

RewriteRule ^(.*)$ index.php?pag=$1 [L,QSA] 
</IfModule> 

<Files *.tpl> 
    Order deny,allow 
    Deny from All 
</Files>
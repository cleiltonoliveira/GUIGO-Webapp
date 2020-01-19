<?php
/*Basta alterar este arquivo que ele vai mudar todo o site 
apenas pela padronização das contantes.

Constantes de caminhos absolutos:

Quando o website (sistema) não está na raiz, 
a variável é alterada com o caminho do diretório que contém o site*/
$pastaInterna="";

// Caminho da URL: localhost/...
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

/* Se o servidor vier com a barra no fim do caminho como padrão, 
ele não coloca a barra, se não vier, ele a põe
A função substr retorna parte de uma string, o segundo parâmetro indica a parte (no caso, -1 indica o último 
caractere da string que veio do primeiro parâmetro) */
(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?$barra="":$barra="/";

// Caminho físico
// DIRREQ é a constante que guarda a url padrão com barra, mesmo que não tenha sido digitada 
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#Atalhos
define('DIRIMG',DIRPAGE.'img/');
define('DIRCSS',DIRPAGE.'lib/css/');
define('DIRJS',DIRPAGE.'lib/js/');

#Acesso ao db
define('HOST',"localhost");
#Nome do banco de dados
define('DB',"guigo_web");
define('USER',"root");
define('PASS',"");

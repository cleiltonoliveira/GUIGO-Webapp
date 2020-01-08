<?php
/*Basta alterar este arquivo que ele vai mudar todo o site 
apenas pela padronização das contantes.

Constantes de caminhos absolutos:

Quando o website (sistema) não está na raiz, 
a variável é alterada com o caminho do diretório que contém o site*/
$pastaInterna="";

// Caminho da URL
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

/* Se o servidor vier com a barra no fim do caminho como padrão, 
ele não coloca a barra, se não vier, ele a põe */
(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?$barra="":$barra="/";

// Caminho físico
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#Atalhos
define('DIRIMG',DIRPAGE.'img/');
define('DIRCSS',DIRPAGE.'lib/css/');
define('DIRJS',DIRPAGE.'lib/js/');

#Acesso ao db
define('HOST',"localhost");
#Nome do banco de dados
define('DB',"sistema");
define('USER',"root");
define('PASS',"");

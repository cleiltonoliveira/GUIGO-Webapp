<?php
header("Content-Type: text/html; charset=utf-8");
include("config/config.php");
include(DIRREQ."helpers/variables.php");
include(DIRREQ."lib/vendor/autoload.php");

#include(DIRREQ."lib/vendor/autoload.php");
$dispatch=new Classes\ClassDispatch();
include($dispatch->getInclusao());
#echo $_GET["url"];

#use Traits\TraitParseUrl;

#echo Traits\TraitParseUrl::parseUrl(1);

/*use Models\ClassCrud;
$crud=new ClassCrud();
$crud->insertDB(
    "users",
    "?,?,?,?,?,?",
    array(
        11,
        'Gustavo',
        'gustavorodrigues.pr@outlook.com',
        'banana123',
        '40028922',
        ''
    )
)*/
?>
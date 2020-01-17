<?php
include("lib/vendor/autoload.php");
include("config/config.php");
header("Content-Type: text/html; charset=utf-8");
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
        $id=11,
        $nome='Gustavo',
        $email='gustavorodrigues.pr@outlook.com',
        $senha='banana123',
        $guigoID='40028922',
        $dataCriacao=''
    )
)*/  
?>
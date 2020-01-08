<?php
include("lib/vendor/autoload.php");
include("config/config.php");
header("Content-Type: text/html; charset=utf-8");
$dispatch=new Classes\ClassDispatch();
include($dispatch->getInclusao());

#include(DIRREQ."lib/vendor/autoload.php");
#$dispatch=new Classes\ClassDispatch();
#include($dispatch->getInclusao());

#use Traits\TraitParseUrl;

#echo Traits\TraitParseUrl::parseUrl(1);
?>
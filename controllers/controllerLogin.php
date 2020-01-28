<?php
$validate=new Classes\ClassValidate();
$validate->validateFields($_POST);
$validate->validateEmail($email);
$validate->validateIssetEmail($email,"login");
$validate->validateSenha($email,$senha);
echo $validate->validateFinalLogin($email);
//var_dump($_SESSION);
//echo "<script>window.location.href='".DIRPAGE."areaRestrita';</script>";
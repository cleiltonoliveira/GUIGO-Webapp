<?php
$validate=new Classes\ClassValidate();
$validate->validateFields($_POST);
$validate->validateEmail($email);
$validate->validateIssetEmail($email,"login");
$validate->validateSenha($email,$senha);
echo $validate->validateFinalLogin($email);
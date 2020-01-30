<?php
$validate=new Classes\ClassValidate();
$validate->validateFields($_POST);
$validate->validateEmail($novoEmail);
$validate->validateIssetEmail($novoEmail);
echo $validate->validateFinalAltPerfil($email,$novoEmail,$nome);
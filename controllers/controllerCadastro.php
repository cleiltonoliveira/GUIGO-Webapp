<?php
$validate=new Classes\ClassValidate();
$validate->validateFields($_POST);
$validate->validateEmail($email);
$validate->validateFinalCad($arrVar);
var_dump($validate->getErro());
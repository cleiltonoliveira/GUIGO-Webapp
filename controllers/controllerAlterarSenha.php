<?php
$validate=new Classes\ClassValidate();
$validate->validateFields($_POST);
$validate->validateSenha($email,$senha,"alterar senha");
$validate->validateStrongSenha($novaSenha);
$validate->validateConfSenha($novaSenha, $novaSenhaConf);
echo $validate->validateFinalAltSenha($hashNovaSenha,$email);
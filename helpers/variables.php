<?php
$objPass=new \Classes\ClassPassword();
if(isset($_POST['nome'])){$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}else{$nome=null;}
if(isset($_POST['email'])){$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);}else{$email=null;}
if(isset($_POST['novoEmail'])){$novoEmail=filter_input(INPUT_POST,'novoEmail',FILTER_VALIDATE_EMAIL);}else{$novoEmail=null;}
if(isset($_POST['senha'])){$senha=$_POST['senha']; $hashSenha=$objPass->passwordHash($senha);}else{$senha=null; $hashSenha=null;}
if(isset($_POST['novaSenha'])){$novaSenha=$_POST['novaSenha']; $hashNovaSenha=$objPass->passwordHash($novaSenha);}else{$novaSenha=null; $hashNovaSenha=null;}
if(isset($_POST['senhaConf'])){$senhaConf=$_POST['senhaConf'];}else{$senhaConf=null;}
if(isset($_POST['novaSenhaConf'])){$novaSenhaConf=$_POST['novaSenhaConf'];}else{$novaSenhaConf=null;}
$dataCreate=date("Y-m-d H:i:s");
$arrVar=[
    "nome"=>$nome,
    "email"=>$email,
    "novoEmail"=>$novoEmail,
    "senha"=>$senha,
    "novaSenha"=>$novaSenha,
    "hashNovaSenha"=>$hashNovaSenha,
    "hashSenha"=>$hashSenha,
    "dataCreate"=>$dataCreate,
];
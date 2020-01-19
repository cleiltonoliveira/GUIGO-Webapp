<?php
if(isset($_POST['nome'])){$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}else{$nome=null;}
if(isset($_POST['email'])){$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);}else{$email=null;}
if(isset($_POST['senha'])){$senha=$_POST['senha']; $hashSenha='';}else{$senha=null; $hashSenha=null;}
if(isset($_POST['senhaConf'])){$senhaConf=$_POST['senhaConf'];}else{$senhaConf=null;}
if(isset($_POST['guigoID'])){$guigoID=$_POST['guigoID']; $hashGuigoID='';}else{$guigoID=null; $hashGuigoID=null;}
$dataCreate=date("Y-m-d H:i:s");
$token=bin2hex(random_bytes(64));
$arrVar=[
    "nome"=>$nome,
    "email"=>$email,
    "senha"=>$senha,
    "hashSenha"=>$hashSenha,
    "guigoID"=>$guigoID,
    "dataCreate"=>$dataCreate,
    "token"=>$token,
];
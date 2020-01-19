<?php
namespace Classes;

use Models\ClassCadastro;

class ClassValidate{

    private $erro=[];
    private $cadastro;

    public function __construct(){
        $this->cadastro=new ClassCadastro();
    }

    public function getErro()
    {
        return $this->erro;
    }

    public function setErro($erro)
    {
        array_push($this->erro,$erro);
    }

    #Validar se os campos desejados foram preenchidos
    public function validateFields($par)
    {
        $i=0;
        foreach ($par as $key => $value){
            if(empty($value)){
                $i++;
            }
        }
        if($i==0){
            return true;
        }else{
            $this->setErro("Preencha todos os dados!");
            return false;
        }
    }

    #Validação se o dado é um email
    public function validateEmail($par) {
        if(filter_var($par, FILTER_VALIDATE_EMAIL)) {
            return true;
        }else{
            $this->setErro("Email inválido!");
            return false;
        }
    }

    #Validação final do cadastro
    public function validateFinalCad($arrVar) {
        $this->cadastro->insertCad($arrVar);
    }
}

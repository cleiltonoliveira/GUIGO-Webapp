<?php
namespace Models;

class ClassCadastro extends ClassCrud{

    #Realizará a inserção no banco de dados
    public function insertCad($arrVar)
    {
        $this->insertDB(
          "users",
          "?,?,?,?,?",
                array(
                    0,
                    $arrVar['nome'],
                    $arrVar['email'],
                    $arrVar['hashSenha'],
                    $arrVar['dataCreate'],
                )
        );
    }

    public function updateEmailNome($email,$novoEmail,$nome){
        $this->updateDB(
            "users",
            "email = ?, nome = ?",
            "email = ?",
            array(
                $novoEmail,
                $nome,
                $email
            )
        );
    }

    public function updateSenha($hashNovaSenha,$email){
        $this->updateDB(
            "users",
            "senha = ?",
            "email = ?",
            array(
                $hashNovaSenha,
                $email
            )
        );
    }

    #Veriricar se já existe o mesmo email cadastro no db
    public function getIssetEmail($email) {
        $b=$this->selectDB(
            "*",
            "users",
            "where email=?",
            array(
                $email
            )
        );
        return $r=$b->rowCount();
    }
}
<?php
namespace Models;

class ClassCadastro extends ClassCrud{

    #Realizará a inserção no banco de dados
    public function insertCad($arrVar)
    {
        $this->insertDB(
          "users",
          "?,?,?,?,?,?,?",
                array(
                    0,
                    $arrVar['nome'],
                    $arrVar['email'],
                    $arrVar['hashSenha'],
                    $arrVar['guigoID'],
                    $arrVar['dataCreate'],
                    'confirmation'
                )
        );

        $this->insertDB(
            "confirmation",
                "?,?,?",
                array(
                    0,
                    $arrVar['email'],
                    $arrVar['token']
                )
        );
    }
}
<?php
namespace Models;

class ClassConexao{

    public function conectaDB()
    {
        try{
            $con=new \PDO("mysql:host=localhost;dbname=guigo_web","root","26218803");
            return $con;
        }catch (\PDOException $erro){
            return $erro->getMessage();
        }
    }
}
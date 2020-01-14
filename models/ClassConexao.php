<?php
namespace Models;

class ClassConexao{

    public function conectaDB()
    {
        try{
            $con=new \PDO("mysql:host=localhost;dbname=guigo_web","root","");
            return $con;
        }catch (\PDOException $erro){
            return $erro->getMessage();
        }
    }
}
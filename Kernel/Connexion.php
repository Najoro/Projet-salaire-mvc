<?php

namespace Kernel;

use Config\Db;
use PDO;

class Connexion {
    private static $pdo;

    private function __construct()
    {
        return ;
    }
    
    public static function get(){
        $dns = "mysql:host=". Db::HOST .";dbname=".DB::NAME;
        $username = DB::USERNAME;
        $password = DB::PASSWORD;

        if(!isset(self::$pdo)){
            try {
                self::$pdo = new \PDO($dns,$username,$password);
                self::$pdo->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_EXCEPTION);
                // echo "connextion reussie";
            } catch (\PDOException $exception) {
                echo "erreur de connextion :".$exception->getMessage();
            }
        }
        return self::$pdo;
    }

    public static function query($query){
        $stmt = self::get()->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function execute($query , $param= []) {
        $stmt = self::get()->prepare($query);
        $stmt->execute($param);
    }
}
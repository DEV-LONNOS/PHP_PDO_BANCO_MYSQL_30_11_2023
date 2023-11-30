<?php

namespace App\persistence;

use PDO;
use PDOException;
use App\SystemServices\MonologFactory;

class ConnectionFactory {

    private static $host = "127.0.0.1";
    private static $dbname = "exercbd03";
    private static $user = "root";
    private static $password = "";



public static function getConnectionFactory() {

    try{
        $pdo = new PDO("mysql:host=" . self::$host . "dbname=" . self::$dbname, self::$user, self::$password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        MonologFactory::getInstance()->info("Conexao com banco sucedida!!!");
        return new ConnectionFactory();
    }
    catch(PDOException $e){

        MonologFactory::getInstance()->info("Erro na conexao" . $e->getMessage());
        MonologFactory::getInstance()->info("Erro nao relacionado ao banco" . $e->getMessage());


    }

}
}    

?>

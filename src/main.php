<?php 


    include_once __DIR__ . "/../vendor/autoload.php";

    use App\SystemServices\MonologFactory;
    use App\persistence\ConnectionFactory;
    
    MonologFactory::getInstance()->info("Testando monolog!!!");
    
    $conn = ConnectionFactory::getConnectionFactory();

    var_dump($conn);
    echo"Meu main.php";


  
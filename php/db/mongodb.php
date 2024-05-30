<?php 

    require_once __DIR__ . '/../../vendor/autoload.php';

    $host = 'mongodb://localhost:27017';
    $dbname = 'nextstyle';

    try{

        $mongoClient = new MongoDB\Client($host);
        $database = $mongoClient->$dbname;

    } catch (MongoDB\Driver\Exception\Exception $e) {
        echo "Failed to connect to MongoDB: " . $e->getMessage();
    }
?>

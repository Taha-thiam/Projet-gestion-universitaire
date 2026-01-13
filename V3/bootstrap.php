<?php
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
require_once "vendor/autoload.php";
// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration( // use createAttributeMetadataConfiguration() for compatibility
    paths: [__DIR__ . '/src/model'],
    isDevMode: true,
);
// or if you prefer XML
// $config = ORMSetup::createXMLMetadataConfig( // on PHP < 8.4, use ORMSetup::createXMLMetadataConfiguration()
//    paths: [__DIR__ . '/config/xml'],
//    isDevMode: true,
//);
// configuring the database connection
$connectionParams = [
    'driver' => 'pdo_pgsql',
    'user' => 'postgres',
    'password' => 'passer',
    'dbname' => 'Bd_Etudiant',
    'host' => '127.0.0.1',
    'port' => 5432,
];

// create DBAL connection and obtain the entity manager
$connection = DriverManager::getConnection($connectionParams,$config);
$entityManager = new EntityManager($connection, $config);
 
?>
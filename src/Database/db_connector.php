<?php

require_once "../vendor/autoload.php";
require_once "db_conn_parameters.php";


use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\Mapping\Driver\MappingDriverChain;
use Doctrine\ORM\Mapping\Driver\YamlDriver;
use Doctrine\ORM\Tools\SchemaTool;

// Create a simple Doctrine ORM configuration
$isDevMode = true;
$config = Setup::createConfiguration($isDevMode);

// Configure the metadata driver
$driverChain = new MappingDriverChain();
$yamlDriver = new YamlDriver(__DIR__.'\..\Entity');
$driverChain->addDriver($yamlDriver, 'Entity');

// var_dump($driverChain); // dump the mapping driver chain for debugging

$config->setMetadataDriverImpl($driverChain);
$conn['dbname'] = 'maga_teste';
try {
    $pdo = new PDO("mysql:host={$conn['host']}", $conn['user'], $conn['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("CREATE DATABASE IF NOT EXISTS {$conn['dbname']}");
    // Get entity metadata
    
} catch(PDOException $e) {
    echo("Database error: " . $e->getMessage());
}
$entityManager = EntityManager::create($conn, $config);
$classes = array(
    $entityManager->getClassMetadata('Entity\Pessoa'),
    $entityManager->getClassMetadata('Entity\Contato')
);

// Create schema tool
$schemaTool = new SchemaTool($entityManager);

// Check if schema is up to date and update if necessary
$currentSchema = $schemaTool->getSchemaFromMetadata($classes);
$updatedSchema = $schemaTool->updateSchema($classes, true, $currentSchema);


function getEntityManager() {
    global $entityManager;
    return $entityManager;
}
// Create the entity manager


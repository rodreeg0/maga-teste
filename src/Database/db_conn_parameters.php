<?php

// Database configuration parameters
$conn = array(
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'user' => 'root',
    'password' => ''
);
$isDevMode = true;
$config = \Doctrine\ORM\Tools\Setup::createYAMLMetadataConfiguration(
    [__DIR__.'\..\Entity'],
    $isDevMode
);

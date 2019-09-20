<?php

require_once 'config.php';

function openDBConnection()
{
	global $config;
	
    $connection = new PDO("mysql:host=" . $config[ 'DB_SERVER' ] . ";dbname=". $config[ 'DB_NAME' ], $config[ 'DB_USER' ], $config[ 'DB_PASS' ]);

    return $connection;
}

function closeDBConnection(& $connection)
{
    $connection = null;
}

function getAllClients()
{
    $connection = openDBConnection();

    $result = $connection->query('SELECT * FROM client');

    $clients = array();
	
    while ($row = $result->fetch()) 
	{
        $clients[] = $row;
    }
	
    closeDBConnection($connection);

    return $clients;
}

function getNewClients( $lastClientID )
{
    $connection = openDBConnection();

    $result = $connection->query( 'SELECT * FROM client WHERE id > ' . $lastClientID );

    $clients = array();
    
    while ($row = $result->fetch()) 
    {
        $clients[] = $row;
    }
    
    closeDBConnection($connection);

    return $clients;
}

function addClient( $firstName, $lastName, $phone, $email )
{
    $connection = openDBConnection();

    $connection->exec("INSERT INTO client (nom, prenom, tel, email) VALUES ( '". $lastName . "', '" . $firstName . "', '" . $phone . "', '" . $email . "' )");
	
    closeDBConnection($connection);
}

function deleteClient( $idClient )
{
    $connection = openDBConnection();

    $connection->exec("DELETE FROM client WHERE id = " . $idClient);
	
    closeDBConnection($connection);
}

?>
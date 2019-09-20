<?php

require_once( 'model.php' );

if ( ! isset( $_GET[ 'page' ] ) || $_GET[ 'page' ] == 'list' ) 
{
	$clients = getAllClients();
	
	require_once( 'list.php' );
}

if ( isset( $_GET[ 'page' ] ) && $_GET[ 'page' ] == 'add' ) 
{
	if ( isset( $_POST[ 'add' ] ) )
	{
		$firstName = htmlspecialchars ( stripslashes( $_POST[ 'firstName' ] ) );
		$lastName = htmlspecialchars ( stripslashes( $_POST[ 'lastName' ] ) );
		$phone = htmlspecialchars ( stripslashes( $_POST[ 'phone' ] ) );
		$email = htmlspecialchars ( stripslashes( $_POST[ 'email' ] ) );
		
		addClient( $firstName, $lastName, $phone, $email );
		
		header( 'Location: controller.php' );
	}
	
	require_once( 'add.php' );
}

if ( isset( $_GET[ 'page' ] ) && $_GET[ 'page' ] == 'delete' ) 
{
	deleteClient( $_GET[ 'clientID' ] );
	
	header( 'Location: controller.php' );
}

?>
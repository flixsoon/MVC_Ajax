<?php
	require_once( 'model.php' );

	if ( $_GET[ 'action' ] == 'update' ) 
	{
		header('Content-type: application/json');
		echo json_encode( getNewClients( $_GET[ 'lastClientID' ] ) );
	} else {
		deleteClient( $_GET[ 'idClient' ] );
	}

?>
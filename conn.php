<?php
session_start();

function sql_connect() {
 
	//10.2.1.81
	$connection_string = 'DRIVER={SQL Server};SERVER=WEBERP;DATABASE=test'; 
	$user = 'sa'; 
	$pass = ''; 
  
	  return odbc_connect( $connection_string, $user, $pass ); 
	  
  }

?>
<?php
	define('db_host','localhost:3306');
	define('db_user','root');
	define('db_password','');
	define('db_database','user_auth');

	$conn = new mysqli(db_host, db_user, db_password, db_database);
	if(!$conn){
		die('could not connect: '.mysqli_error());
	}
	mysqli_select_db($conn,db_database); 
?>



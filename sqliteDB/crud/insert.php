<?php

	/*
		insert data into table in sqliteDB
		post needed :
			• table
	*/
	
	
	include("../open_connection.php");
	

	
	// set sql request
	$sql = "
		INSERT INTO crawler (ID,META,URL)
		VALUES (1, 'Paul', 32);
		
		INSERT INTO crawler (ID,META,URL)
		VALUES (2, 'Allen', 25);
		
		INSERT INTO crawler (ID,META,URL)
		VALUES (3, 'Teddy', 23);
		
		INSERT INTO crawler (ID,META,URL)
		VALUES (4, 'Mark', 25);
	";
	
	
	// exec sql request
	$ret = $sqliteDB->exec($sql);
	if(!$ret){
		?>
		<?=$sqliteDB->lastErrorMsg()?>
		<?
	} else {
		?>
		data inserted
		<?
	}
		
?>

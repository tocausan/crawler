<?php

	/*
		select data from table in sqliteDB
		post needed :
			• table
			• id
	*/
	
	
	include("../open_connection.php");


	// set sql request
	$sql = "
		UPDATE crawler set SALARY = 25000.00 where ID=1;
	";
	
	
	// exec sql request
	$ret = $sqliteDB->exec($sql);
	if(!$ret){
		?>
		<?=$sqliteDB->lastErrorMsg()?>
		<?
	} else {
		?>
		datas updated
		<?
	}
		
?>

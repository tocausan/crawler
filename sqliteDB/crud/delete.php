<?php

	/*
		delete data from table in sqliteDB
		post needed :
			• table
			• id
	*/
	
	
	include("../open_connection.php");
		
	
	// set sql request
	$sql = "
		DELETE from crawler where ID=1;
	";
	
	
	// exec sql request
	$ret = $sqliteDB->exec($sql);
	if(!$ret){
		?>
		<?=$sqliteDB->lastErrorMsg()?>
		<?
	} else {
		?>
		<?=$sqliteDB->vhanges()?>
		<?
	}
		
?>

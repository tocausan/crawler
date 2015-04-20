<?php

	/*
		create table into sqliteDB
		post needed :
			• table
	*/
	
	include("../open_connection.php");
	
	// set sql request
	$sql = "
		CREATE TABLE crawler
		(
		ID INTEGER PRIMARY KEY   AUTOINCREMENT,
		SOURCE		CHAR(255) 	NOT NULL,
		URL			CHAR(255) 	NOT NULL
		);
	";


	
	// exec sql request
	$ret = $sqliteDB->exec($sql);
	if(!$ret){
		?>
		<?=$sqliteDB->lastErrorMsg()?>
		<?
	} else {
		?>
		table <?=$table?> created
		<?
	}
		
?>

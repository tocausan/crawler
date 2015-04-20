<?php 
	
	/*
		open connection to sqliteDB
	*/
	
	
	// open sqlite database
	class sqliteDB extends SQLite3
	{
		function __construct()
		{
			$this->open('../crawler.sqlite');
		}
	}
	
	
	$sqliteDB = new sqliteDB();
	if(!$sqliteDB){
		?>
		!
		<?
	} else {
		?>
		<br>
		<?
	}
	
?>
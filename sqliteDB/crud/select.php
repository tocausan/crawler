<?php

	/*
		select data from table in sqliteDB
		post needed :
			• table
	*/
	
	
	include("../open_connection.php");

	
	// set sql request
	$sql = "
		SELECT * from crawler;
	";
	
	
	// exec sql request
	$ret = $sqliteDB->query($sql);
	while($row = $ret->fetchArray(SQLITE3_ASSOC) ){	
		echo "ID = ". $row['ID'] . "<br>";
		echo "SOURCE = ". $row['SOURCE'] ."<br>";
		echo "URL = ". $row['URL'] ."<br>";
	}
?>
	

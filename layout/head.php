<?php
	session_start();
	
	
	#####
	# BASIC INFOS
	# • get basic infos from "info.json"
	# • set them into session
	#####
	
	// read "info.json"=
	$string = file_get_contents("info.json");
	$json_a=json_decode($string,true);
	
	// set session datas
	foreach ($json_a as $key => $value){
		$_SESSION[$key] = $value;
	}

?>


<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="fr-FR" ng-app="crawler">
	
	<head data-template-set="perso-theme">
	
			<title><?=$_SESSION['title'] ?></title>
			
	        <meta charset="UTF-8">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <meta name="title" content="<?=$_SESSION['title'] ?>">
	        <meta name="description" content="<?=$_SESSION['description'] ?>">
	        <meta name="author" content="<?=$_SESSION['author'] ?>">
	        <meta name="Copyright" content="<?=$_SESSION['copyright'] ?>">
	        
	        <meta property="og:image"content="" />
	        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	        <meta name='robots' content='noindex,nofollow' />
	                
	
			<link rel="icon" href="img/favicon.ico" type="image/x-icon">
			
			<link href="assets/css/foundation.min.css" rel="stylesheet">
			<link href="assets/css/style.css" rel="stylesheet">
			
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
			<script src="assets/js/script.js"></script>
	
	</head>
	<body>



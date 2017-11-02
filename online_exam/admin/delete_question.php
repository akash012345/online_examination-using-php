<?php

session_start();

	$dbhost="localhost";
	$dbuser="id3024750_albert";
	$dbpass="password";
	$dbname="id3024750_tests";

	$q_id=$_GET["id"];

	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Cannot connect to db");

	mysql_select_db("test") or die("Cannot select db ");
	

	mysql_query("delete from questions where id='$q_id'");

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
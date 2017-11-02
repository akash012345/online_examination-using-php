<?php
session_start();
	$dbhost="localhost";
	$dbuser="id3024750_albert";
	$dbpass="password";
	$dbname="id3024750_tests";

	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Cannot connect to db");

	mysql_select_db("test") or die("Cannot select db ");


			$question = mysql_real_escape_string($_POST["question"]);
			$topic = mysql_real_escape_string($_POST["topic"]);
			$opA = mysql_real_escape_string($_POST["opA"]);
			$opB = mysql_real_escape_string($_POST["opB"]);
			$opC = mysql_real_escape_string($_POST["opC"]);
			$opD = mysql_real_escape_string($_POST["opD"]);
			$ans = mysql_real_escape_string($_POST["ans"]);


			$reply=mysql_query("INSERT INTO questions (questions,topic,A,B,C,D,ans) values ('$question','$topic','$opA','$opB','$opC','$opD','$ans')");


			header('Location: ' . $_SERVER['HTTP_REFERER']);



?>
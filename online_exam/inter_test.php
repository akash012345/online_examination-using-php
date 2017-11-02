<?php
	session_start();

	
	$_SESSION["topic"]=$_GET['topic'];

	$_SESSION["ans"]="Z";

	$user_id=$_SESSION['user_id'];

	$dbhost="localhost";
	$dbuser="id3024750_albert";
	$dbpass="password";
	$dbname="id3024750_tests";

	mysql_connect($dbhost,$dbuser,$dbpass);
	mysql_select_db('test');

	mysql_query("delete from student_ques");

	mysql_query("update user_data set attempting=1 where id='$user_id'");

	header("location:test.php");
?>
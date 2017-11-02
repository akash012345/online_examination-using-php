<?php
	session_start();

	$dbhost="localhost";
	$dbuser="id3024750_albert";
	$dbpass="password";
	$dbname="id3024750_tests";

	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);

	mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
	mysql_select_db($dbname) or die("cannot connect to database");
	$query=mysql_query("Select * from user_data WHERE username='$username'");
	$exists=mysql_num_rows($query);
	$table_password="";


	if($exists>0)
	{

		$row=mysql_fetch_assoc($query);
		$table_password=$row['password'];
		$id=$row['id'];

		echo "$table_password";


		if($table_password==$password)
		{
			$_SESSION['user']=$username;
			$_SESSION['user_id']=$id;

			if($username=='admin')
			{
				header("location: admin/admin_home.php");
			}
			else
			{
			header("location: home_page.php");
			}
		}
		else
		{
			Print '<script>alert("Incorrect password");</script>';
		Print '<script>window.location.assign("index.php");</script>';
		}


	}
	else
	{
		Print '<script>alert("Incorrect username");</script>';
		Print '<script>window.location.assign("index.php");</script>';
	}


?>




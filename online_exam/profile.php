<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
</head>
<body>

<?php

session_start();

	$dbhost="localhost";
	$dbuser="id3024750_albert";
	$dbpass="password";
	$dbname="id3024750_tests";

	$user_id=$_SESSION["user_id"];

	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Cannot connect to db");

	mysql_select_db("test") or die("Cannot select db ");


	$query=mysql_query("select * from user_data where id='$user_id'");


	$row=mysql_fetch_assoc($query);

	$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$phone=$row['phone'];
	$address=$row['address'];
	$username=$row['username'];
	
	echo "<h2>Profile</h2> </br></br>";


	echo "<a href=home_page.php>click here to go to home</a></br></br>";


	echo "firstname    : $fname </br></br>";
	echo "lastname     : $lname </br></br>";
	echo "email        : $email </br></br>";
	echo "phone   	   : $phone </br></br>";
	echo "address      : $address </br></br>";
	echo "username     : $username</br></br>";


	echo "<a href=edit_profile.php>click here to edit</a>";

?>


</body>
</html>



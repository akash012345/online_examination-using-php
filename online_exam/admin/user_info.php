<!DOCTYPE html>
<html>
<head>
	<title>user_info</title>
</head>
<body>

<h2>users</h2>

</br></br>
<?php

session_start();

	$dbhost="localhost";
	$dbuser="id3024750_albert";
	$dbpass="password";
	$dbname="id3024750_tests";

	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Cannot connect to db");

	mysql_select_db("test") or die("Cannot select db ");

	$query=mysql_query("select * from user_data");

	while($row=mysql_fetch_assoc($query))
	{
		$user_id=$row['id'];
		$fname=$row['fname'];
		$lname=$row['lname'];
		if($fname!='admin')
		echo "<a href='profile.php?user_id=".$user_id."'>".$fname." ".$lname."</a></br></br>";
	}





?>

</body>
</html>
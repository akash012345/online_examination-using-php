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
	$user_id=$_GET["user_id"];

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


	echo "<a href=admin_home.php>click here to go to home</a></br></br>";


	echo "firstname    : $fname </br></br>";
	echo "lastname     : $lname </br></br>";
	echo "email        : $email </br></br>";
	echo "phone   	   : $phone </br></br>";
	echo "address      : $address </br></br>";
	echo "username     : $username</br></br>";


	
?>

<h2 align="center">Test Info</h2>

<table border="1px" width="100%">
	<tr>
		<th>id</th>
		<th>topic</th>
		<th>score</th>
		<th>time</th>
	</tr>
	<?php
		$query = mysql_query("SELECT * FROM tests where stud_id='$user_id'");
		while($row=mysql_fetch_array($query))
		{
			Print "<tr>";
				Print '<td align="center">'. $row['id']."</td>";
				Print '<td align="center">'. $row['topic']."</td>";
				Print '<td align="center">'. $row['score']."</td>";
				Print '<td align="center">'. $row['time']." - ".$row['date']. "</td>";
			Print "</tr>";
		}
?>


</body>
</html>



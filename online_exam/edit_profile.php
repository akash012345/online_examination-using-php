<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>

<h2>Registration</h2>


<a href="profile.php">click here to go back</a></br></br>


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
	$password=$row['password'];
	

?>


<form action="edit_profile.php" method="POST">

	first name &emsp;<input type="text" name="fname" value=<?php echo "$fname" ?> required="required"/></br></br>
	last name &emsp;<input type="text" name="lname" value=<?php echo "$lname" ?> required="required"/></br></br>
	email&emsp;<input type="text" name="email" value=<?php echo "$email" ?> required="required"/></br></br>
	phone number&emsp;<input type="text" name="phone" value=<?php echo "$phone" ?> required="required"/></br></br>
	address&emsp;<input type="text" name="address" value=<?php echo "$address" ?> required="required"/></br></br>
	password&emsp;<input type="text" name="password" value=<?php echo "$password" ?> required="required"/></br></br>
&emsp;&emsp;	<input type="submit" value="update" label="update"/>
</form>

</body>
</html>




<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
			$fname = mysql_real_escape_string($_POST["fname"]);
			$lname = mysql_real_escape_string($_POST["lname"]);
			$email = mysql_real_escape_string($_POST["email"]);
			$phone = mysql_real_escape_string($_POST["phone"]);
			$address = mysql_real_escape_string($_POST["address"]);
			$password = mysql_real_escape_string($_POST["password"]);

		mysql_query("UPDATE user_data SET fname='$fname', lname='$lname', email='$email',phone='$phone',address='$address',password='$password' WHERE id='$user_id'");

		Print '<script>alert("Update successfull!");</script>';

		header("location:profile.php");
	}



?>
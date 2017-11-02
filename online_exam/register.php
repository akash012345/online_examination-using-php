<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>

<h2>Registration</h2>


<a href="index.php">click here to go back</a></br></br>


<form action="register.php" method="POST">

	first name &emsp;<input type="text" name="fname" required="required"/></br></br>
	last name &emsp;<input type="text" name="lname" required="required"/></br></br>
	email&emsp;<input type="text" name="email" required="required"/></br></br>
	phone number&emsp;<input type="text" name="phone" required="required"/></br></br>
	address&emsp;<input type="text" name="address" require="required"/></br></br>
	username&emsp;<input type="text" name="username" required="required"/></br></br>
	password&emsp;<input type="password" name="password" required="required"/></br></br>
&emsp;&emsp;	<input type="submit" label="submit"/>
</form>

</body>
</html>

<?php

	$dbhost="localhost";
	$dbuser="id3024750_albert";
	$dbpass="password";
	$dbname="id3024750_tests";

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$bool=true;
		$username = mysql_real_escape_string($_POST["username"]);

		mysql_connect($dbhost,$dbuser,$dbpass) or die ("Cannot connect to db");

		mysql_select_db("test") or die("Cannot select db ");

		$query=mysql_query("SELECT * FROM user_data");

		while($row=mysql_fetch_row($query))
			{
				$table_user=$row["username"];

				if($username==$table_user)
				{
					$bool=false;

					Print '<script>alert("Username has been taken");</script>';
					Print '<script>window.location.assign("register.php");</script>';

				}

			}

		if($bool)
		{
			$fname = mysql_real_escape_string($_POST["fname"]);
			$lname = mysql_real_escape_string($_POST["lname"]);
			$email = mysql_real_escape_string($_POST["email"]);
			$phone = mysql_real_escape_string($_POST["phone"]);
			$address = mysql_real_escape_string($_POST["address"]);
			$password = mysql_real_escape_string($_POST["password"]);


			mysql_query("INSERT INTO user_data (fname,lname,email,phone,address,username,password) values ('$fname','$lname','$email','$phone','$address','$username','$password')");


	Print '<script>alert("Successfully Registered!");</script>';
        Print '<script>window.location.assign("index.php");</script>'; 

		}

	}




?>
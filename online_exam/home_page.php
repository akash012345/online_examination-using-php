<html>
	<head>
		<title>welcome</title>
	</head>
	<?php
	session_start();

	
	$_SESSION["q_no"] =1;
	$_SESSION["score"] =0;



	if($_SESSION['user']){
	}

	else{
		header("location:index.php");
	}

	$user=$_SESSION['user'];
	$user_id=$_SESSION['user_id'];

	?>

	<body>
	<h2>Home Page</h2>
	<p> hello <?php Print "$user"?>!!!</p>



	<a href=logout.php>click here to logout</a>
	</br>
	</br>
	<a href=test_info.php>click here to view test results</a>

	</br>
	</br>

	<a href=profile.php>click here to view profile</a>

	</br>
	</br>
	<h3>Select the test you want to write</h3>

	<h4>


	<?php

	$dbhost="localhost";
	$dbuser="id3024750_albert";
	$dbpass="password";
	$dbname="id3024750_tests";

	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Cannot connect to db");

	mysql_select_db("test") or die("Cannot select db ");

	$query=mysql_query("select distinct topic from questions");

	mysql_query("update user_data set attempting=0 where id='$user_id'");


	while($row=mysql_fetch_assoc($query))
	{
		$topic=$row['topic'];
		echo "<a href='inter_test.php?topic=".$topic."'>".$topic."</a></br></br>";
	}


	?>



	</h4>
	</body>
</html>


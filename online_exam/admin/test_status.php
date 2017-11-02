<!DOCTYPE html>
<html>
<head>
	<title>test status</title>
</head>
<body>




<h2>Test status</h2>

<a href=admin_home.php>home</a>
</br></br>

<?php

session_start();

	$dbhost="localhost";
	$dbuser="id3024750_albert";
	$dbpass="password";
	$dbname="id3024750_tests";

	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Cannot connect to db");

	mysql_select_db("test") or die("Cannot select db ");

	$query=mysql_query("select id from user_data");
	$no_user=mysql_num_rows($query)-1;
	echo "total number of users : $no_user</br></br>";

	$query=mysql_query("select * from tests");
	$num=mysql_num_rows($query);
	echo "total number tests conducted : $num</br></br>";

	$query=mysql_query("select distinct stud_id from tests where score>7");
	$pass=mysql_num_rows($query);
	echo "total number of users that have successfully passed one or more tests : $pass</br></br>";

	$not_passed=$no_user-$pass;

	echo "total number of users that have not passed any tests : $not_passed</br></br>";

	$query=mysql_query("select avg(score) from tests");

	$row=mysql_fetch_assoc($query);

	$avg=$row['avg(score)'];

	echo "total average score of all tests : $avg</br></br>";


	//yet to be completed
	$query=mysql_query("select * from user_data where attempting=1");
	$att=mysql_num_rows($query);
	echo "number of users currently writing the test: $att"


	
?>

</body>
</html>
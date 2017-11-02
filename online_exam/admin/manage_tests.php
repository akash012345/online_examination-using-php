</!DOCTYPE html>
<html>
<head>
	<title>manage tests</title>
</head>
<body>

<h2>Manage tests</h2>

<h3>

<?php
	session_start();
	$dbhost="localhost";
	$dbuser="id3024750_albert";
	$dbpass="password";
	$dbname="id3024750_tests";

	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Cannot connect to db");

	mysql_select_db("test") or die("Cannot select db ");

	$query=mysql_query("select distinct topic from questions");

	while($row=mysql_fetch_assoc($query))
	{
		$topic=$row['topic'];
		echo "<a href='edit_test.php?topic=".$topic."'>".$topic."</a></br></br>";
	}


	?>



<h4>create new test</h4>
<form action="edit_test.php" method="get">
topic <input type="text" name="topic"><br>
<input type="submit" value="create">
</form>




</body>
</html>
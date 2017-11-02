</!DOCTYPE html>
<html>
<head>
	<title>test results
	</title>
</head>
<body>

<h1>Test info</h1>

<a href=home_page.php>click here to go to home</a>

<h2 align="center">Test Info</h2>

<table border="1px" width="100%">
	<tr>
		<th>id</th>
		<th>student_id</th>
		<th>topic</th>
		<th>score</th>
		<th>time</th>
	</tr>
	<?php
		session_start();

		$dbhost="localhost";
	$dbuser="id3024750_albert";
	$dbpass="password";
	$dbname="id3024750_tests";


		mysql_connect($dbhost,$dbuser,$dbpass);
		mysql_select_db('test');
		$user_id=$_SESSION["user_id"];
		$query = mysql_query("SELECT * FROM tests where stud_id='$user_id'");
		while($row=mysql_fetch_array($query))
		{
			Print "<tr>";
				Print '<td align="center">'. $row['id']."</td>";
				Print '<td align="center">'. $row['stud_id']."</td>";
				Print '<td align="center">'. $row['topic']."</td>";
				Print '<td align="center">'. $row['score']."</td>";
				Print '<td align="center">'. $row['time']." - ".$row['date']. "</td>";
			Print "</tr>";
		}
?>
</body>
</html>
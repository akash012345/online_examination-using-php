<!DOCTYPE html>
<html>
<head>
	<title>edit test</title>
</head>
<body>


<h1>edit test</h1>

<a href=admin_home.php>admin home</a>

<?php

session_start();

	$dbhost="localhost";
	$dbuser="id3024750_albert";
	$dbpass="password";
	$dbname="id3024750_tests";

	$topic=$_GET["topic"];

	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Cannot connect to db");

	mysql_select_db("test") or die("Cannot select db ");
	
?>


</br>

<h2> topic: <?php echo"$topic"?> </h2>

</br>

<h3>Enter new question</h3>

<form action="add_question.php" id='ques' method="POST">

	question &emsp;<textarea name="question" form="ques"></textarea></br></br>
	topic &emsp;<input type="text" name="topic" value="<?php echo"$topic"?>" required="required"/></br></br>
	option A &emsp;<textarea name="opA" form="ques"></textarea></br></br>
	option B&emsp;<textarea name="opB" form="ques"></textarea></br></br>
	option C&emsp;<textarea name="opC" form="ques"></textarea></br></br>
	option D&emsp;<textarea name="opD" form="ques"></textarea></br></br>
	ans&emsp;<input type="text" name="ans" required="required"/></br></br>

&emsp;&emsp;	<input type="submit" value="add" label="submit"/>
</form>






<h2 align="center">Questions</h2>

<table border="1px" width="100%">
	<tr>
		<th>id</th>
		<th>question</th>
		<th>A</th>
		<th>B</th>
		<th>C</th>
		<th>D</th>
		<th>ans</th>
		<th>delete</th>
	</tr>
	<?php
		$query = mysql_query("SELECT * FROM questions where topic='$topic'");
		while($row=mysql_fetch_array($query))
		{
			Print "<tr>";
				Print '<td align="center">'. $row['id']."</td>";
				Print '<td align="center">'. $row['questions']."</td>";
				Print '<td align="center">'. $row['A']."</td>";
				Print '<td align="center">'. $row['B']."</td>";
				Print '<td align="center">'. $row['C']."</td>";
				Print '<td align="center">'. $row['D']."</td>";
				Print '<td align="center">'. $row['ans']."</td>";
				Print '<td align="center"><a href=delete_question.php?id='.$row['id'].'>delete</a></td>';
			Print "</tr>";
		}
?>


</body>
</html>
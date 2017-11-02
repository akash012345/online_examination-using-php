<?php

session_start();
$score=$_SESSION["score"];

echo "<a href=home_page.php>click here to go home</a> </br></br>";

echo "your score is $score / 10</br></br>";

if($score>7)
{
echo "You have successfully passed the test. You are now certified in android";
}
else
{
echo "Unfortunately you did not pass the test. Please try again later! ";
}



	$dbhost="localhost";
	$dbuser="id3024750_albert";
	$dbpass="password";
	$dbname="id3024750_tests";


	mysql_connect($dbhost,$dbuser,$dbpass);
	mysql_select_db('test');

	$user_id=$_SESSION["user_id"];
	$topic=$_SESSION["topic"];

	$time=strftime("%X");
	$date=strftime("%B %d, %Y");

	mysql_query("INSERT INTO tests (stud_id,topic,score,time,date) VALUES ('$user_id','$topic','$score','$time','$date')");

	mysql_query("update user_data set attempting=0 where id='$user_id'");


?>





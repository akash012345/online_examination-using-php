<!DOCTYPE html>
<html>
<head>
	<title>admin_panal</title>
</head>
<body>


<?php

session_start();
$user=$_SESSION['user'];


if($user=='admin'){
	}

	else{
		header("location:../index.php");
	}

?>
<h1>Hello Admin</h1>
</br></br>

<a href=../logout.php>click here to logout</a>
</br></br>

<a href=test_status.php>click here to see status of tests</a>
</br></br>

<a href=user_info.php>click here to see user info</a>
</br></br>

<a href=manage_tests.php>click here to manage tests</a>
</br></br>






</body>
</html>
</!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<?php
session_start();
$q_no=$_SESSION["q_no"];


$topic=$_SESSION["topic"];

?>

<h2><?php echo "$topic "?>test</h2>


<a href='home_page.php'>click here to go to home</a>

</br></br>


<?php
	

	
	$user_id=$_SESSION["user_id"];


	
	echo "question no: $q_no";

	$dbhost="localhost";
	$dbuser="id3024750_albert";
	$dbpass="password";
	$dbname="id3024750_tests";


	mysql_connect($dbhost,$dbuser,$dbpass);
	mysql_select_db('test');


	$questions=mysql_query("SELECT * FROM questions WHERE topic='$topic' ORDER BY rand()");
	$ques;
	while($questions && $ques=mysql_fetch_assoc($questions))
	{
		$q_id=$ques["id"];

		$done=true;
		$done=mysql_query("SELECT * FROM student_ques where ques_no='$q_id' and stud_id='$user_id' and subject='$topic'");
		$exists=mysql_num_rows($done);

		if($exists==0)
			break;
	}

	mysql_query("INSERT INTO student_ques (stud_id,subject,ques_no) values ('$user_id','$topic','$q_id')");

	$question=$ques['questions'];

	$a=$ques['A'];
	$b=$ques['B'];
	$c=$ques['C'];
	$d=$ques['D'];
	$ans=$ques['ans'];

	$_SESSION['ans1']=$_SESSION['ans'];

	$_SESSION['ans']=$ans;

	$_SESSION["q_no"] = $q_no+1;
	
?>

		<form action="test.php" method="post" id="quiz">
			
	 <li>
                
                 <h3><?php echo "$question" ?></h3>
                    
                    <div>
                        <input type="radio" name="option"  value="A" />
                        <label for="q">A) <?php echo "$a" ?></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="option"  value="B" />
                        <label for="q">B) <?php echo "$b" ?></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="option"  value="C" />
                        <label for="q">C) <?php echo "$c"?></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="option"  value="D" />
                        <label for="q">D) <?php echo "$d" ?></label>
                    </div>
                   

                </li>
                <input type="submit" value="Next" />
		</form>


</body>
</html>


<?php


	if($_SERVER["REQUEST_METHOD"] == "POST")
	{

		if(isset($_POST['option'])){
                     $user_ans=$_POST['option'];
                } 
        else

		$user_ans="Z";

		$real_ans=$_SESSION['ans1'];

		if($real_ans==$user_ans)
		{
			$score=$_SESSION["score"];
			$_SESSION["score"] = $score+1;
		}

		if($q_no==11)
		{
			header("location: finish.php");
		}
	}
?>
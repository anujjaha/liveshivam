<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$obj = new master;
?>


<?php

	$data = $_REQUEST;
	
	$class = $_POST['student_class'];
	$division = $_POST['student_division'];
	$school_id = $_POST['school_id'];
	$term =  $_POST['student_term'];
	$createdby = $_SESSION['username'];
	$nums_studetns = $_POST['nums_students'];
	$query = "";
	$sr=1;
	$student_name = $data['student_name'];
	$student_gender = $data['student_gender'];
	$student_size = $data['student_size'];
	
	
	for($i=1;$i<= $nums_studetns;$i++)
	{
		$name = $student_name[$i];
		if(empty($name))
		{
			break;
		}
		$gender = $student_gender[$i];
		$size = $student_size[$i];
		$query .= "(".
						'""'.",".
					"'". $school_id ."'".",".
					"'".	$i ."'" .",".
					"'".	$name ."'" .",".
					"'".	$class ."'" .",".
					"'".	$division. "'".",".
					"'".	$gender. "'".",".
					"'".	$size."'".",".
					"'".	$term. "'".",".
					"'".	'Admin' ."'".",".
						"NOW()".
				  ")";
		$query .= ",";
		echo $name." ".$gender. " ".$size."<br>";
	}
	$query = substr($query,0,-1);
	$saveStudent = "INSERT INTO student_details
				    (id,school_id,student_sr,student_name,
					 student_class,student_division,student_gender,
					 student_size,student_term,createdby,created
					 )
					 VALUES
				   ".$query;
	$result = $obj->query($saveStudent);
	if($result)
	{
		header("location:success.php?msg=200");
	}
	else
	{
		header("location:error.php?msg=400");
	}
?>
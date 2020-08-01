<?php
	$_POST=json_decode(file_get_contents("php://input"),true);
	//echo file_get_contents("php://input");
	//print_r($data);
	require_once('config.php');
	    $image=$_POST['image'];
	    $name=$_POST['name'];
		$email=$_POST['email'];
		$age=$_POST['age'];
		$state=$_POST['state'];
		$email=$_POST['email'];
	$contact=$_POST['contact'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$insert="INSERT INTO task_angular(image,name,email,age,contact,state,country) values('$image','$name','$email','$age','$state','$country','$contact')";
	mysqli_query($conn,$insert);
	echo json_encode($insert);
	?>

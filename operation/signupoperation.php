<?php
	$con=mysqli_connect("localhost","root","","myproject");
	$personname=$_POST['personname'];
	
	$password=$_POST['password'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$gen=$_POST['gen'];
	$blood=$_POST['blood'];
	$batch=$_POST['batch'];
	$id=$_POST['id'];
	
	$query="select * from user_login where id='$id'";
	$result=mysqli_query($con,$query);
	$numrows=mysqli_num_rows($result);
	if($numrows==1){
		echo 0;
	}else{
	$query="insert into user_login values('$personname','$password','$id','$contact','$address','$email','$gen','$blood','$batch','user','no','yes')";
	$result=mysqli_query($con,$query);
	if($result){
		echo 1;
	}
	}
	
?>
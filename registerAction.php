<?php 
if(isset($_POST['registerin']))
{
	include 'conn.php';
	include 'validation.php';
	// $type = $_POST['u_type'];
	$type = $_POST['type'];
	$fname = $_POST['f_name'];
	$sname = $_POST['s_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$Apassword=$_POST['confirm_password'];
	// if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	
	$insert = mysqli_query($con, "INSERT INTO `register`( type, firstname, secondname, email, password, password1) VALUES( '$type', '$fname', '$sname', '$email', '$password', '$Apassword')");
	if($insert)
	{
		$_SESSION['msg'] = 'Sign Up Successfully';
		header("location:login.html");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($con);
		header("location:register.html");
	}

}
 ?>
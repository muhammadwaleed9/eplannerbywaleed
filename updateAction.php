<?php 
if(isset($_POST['update']))
{
	include 'conn.php';
	// $type = $_POST['u_type'];
	$name = $_POST['u_name'];
	$contact = $_POST['u_contact'];
	$email = $_POST['u_email'];
	$password = $_POST['u_pass'];
	// if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	$insert = mysqli_query($con, "UPDATE `register` SET( name='$name', '$contact', '$email', '$password')");
	if($insert)
	{
		$_SESSION['msg'] = 'Sign Up Successfully';
		header("location:Dashboard.php");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($con);
		header("location:myprofile.php");
	}

}
 ?>
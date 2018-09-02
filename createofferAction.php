<?php 
if(isset($_POST['offercreate']))
{
	include 'conn.php';
	// $type = $_POST['u_type'];
	$business = $_POST['b_select'];
	$offer = $_POST['b_offer'];
	$off = $_POST['b_off'];
	$sdate = $_POST['b_start'];
	$edate = $_POST['b_end'];
	$desc = $_POST['b_desc'];
	// if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	$insert = mysqli_query($con, "INSERT INTO `createoffer`( selectbusniess, offername, peroff, startdate, enddate, descript) VALUES( '$business', '$offer', '$off', '$sdate', '$edate', '$desc')");
	if($insert)
	{
		$_SESSION['msg'] = 'Sign Up Successfully';
		header("location:dashboard.html");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($con);
		header("location:createoffer.html");
	}

}
 ?>
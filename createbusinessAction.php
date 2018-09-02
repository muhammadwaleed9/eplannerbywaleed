<?php 
if(isset($_POST['businesscreate']))
{
	include 'conn.php';
	// $type = $_POST['u_type'];
	$business = $_POST['c_name'];
	$city = $_POST['c_city'];
	$area = $_POST['c_area'];
	$location = $_POST['c_location'];
	$dayopen = $_POST['c_day'];
	$services = $_POST['c_service'];
	$businesscontact = $_POST['c_businesscontact'];
	$bookingcharges = $_POST['c_bookingcharges'];
	$imagename=$_FILES['image']['name']; //storing File Name
    $image_tempname=$_FILES['image']['tmp_name'];  //temp name store
    move_uploaded_file($image_tempname,"Upload_img/$imagename");
	// if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	$insert = mysqli_query($con, "INSERT INTO `createbusiness`( businessname, city, area, location, dayopen, services, businesscontact , bookingcharges ,image) VALUES( '$business', '$city', '$area', '$location', '$dayopen', '$services', '$businesscontact' , '$bookingcharges' , '$imagename')");
	if($insert)
	{
		$_SESSION['msg'] = 'Sign Up Successfully';
		header("location:Dashboard.php");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($con);
		header("location:AddBusiness.php");
	}

}
 ?>
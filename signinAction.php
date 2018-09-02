 <?php 
session_start();
if(isset($_POST['login']))
{
	include 'conn.php';
	
	$email = $_POST['u_email'];
	$password = $_POST['u_pass'];
	$chek = mysqli_query($con, "SELECT * FROM `register` WHERE email='$email' AND password='$password'");
	if(mysqli_num_rows($chek)>0)
	{
		$allData = mysqli_fetch_assoc($chek);
		$_SESSION['user'] = $allData;
		header("location:Dashboard.php");
	}
	else
	{
		echo $_SESSION['msg'] = 'Invalid Login Cardentials';
		header("location:login.html");
	}
}
?>
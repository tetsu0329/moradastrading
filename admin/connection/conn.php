<?php
	$conn = mysqli_connect("localhost", "root", "", "moradadb");

	//login.php
	if(isset($_POST['loginbtn']))
	{
		$username='admin';
		$password='admin';
		$uname = test_input($_POST['txtUsername']);
		$pass = test_input($_POST['txtPassword']);
		if($uname===$username && $pass===$password)
		{
			if (isset($_POST['remembermecheckbox'])) 
			{
            	setcookie('username', $_POST['txtUsername'], time()+60*60*24*365);
            	setcookie('password', $_POST['txtPassword'], time()+60*60*24*365);
        	} 
        	else 
        	{
            	setcookie("username", "", time()-3600);
            	setcookie("password", "", time()-3600);
        	}
			$_SESSION['eyeblinkadmin']='Admin';
			echo "<script>window.location.replace('dashboard.php')</script>";
		}
		else
		{
			echo "<script>alert('failed')</script>";
		}
	}
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$sqlrowcount = mysqli_query($conn, "SELECT * FROM messagetbl WHERE messagestatus='Unread'");
	$inquirycount = mysqli_num_rows($sqlrowcount);

	$sqlrowcount2 = mysqli_query($conn,"SELECT * FROM customerstbl");
	$usercount = mysqli_num_rows($sqlrowcount2);

	$sqlrowcount3 = mysqli_query($conn,"SELECT * FROM producttbl");
	$productcount = mysqli_num_rows($sqlrowcount3);

	$sqlrowcount4 = mysqli_query($conn,"SELECT * FROM ordertbl WHERE orderstatus='Pending'");
	$ordercount = mysqli_num_rows($sqlrowcount4);

	$messagerow = mysqli_query($conn,"SELECT * FROM messagetbl ORDER BY messageid DESC LIMIT 0,3");

	$productrow = mysqli_query($conn,"SELECT * FROM producttbl ORDER BY productid DESC LIMIT 0,2");

	function timeAgo($timestamp){
		date_default_timezone_set("Asia/Manila");
		$todaytime = date("M-d-Y h:i:s a");
		$timestamp = $timestamp;
		$datetime1 = new DateTime($timestamp);
		$datetime2 = new DateTime($todaytime);
		$interval = date_diff($datetime1, $datetime2);
		$computeseconds = $interval->format('%s');
		$computeminutes = $interval->format('%i');
		$computehours = $interval->format('%h');
		$computedays = $interval->format('%d');
		$computemonths = $interval->format('%m');

		if($computemonths!=0 && $computemonths==1){
			return $computemonths." month ago";
		}
		else if($computemonths!=0 && $computemonths>1){
			return $computemonths." months ago";			
		}
		else if($computedays!=0 && $computedays==1){
			return $computedays." day ago";			
		}
		else if($computedays!=0 && $computedays>1){
			return $computedays." days ago";			
		}
		else if($computehours!=0 && $computehours==1){
			return $computehours." hour ago";			
		}
		else if($computehours!=0 && $computehours>1){
			return $computehours." hours ago";			
		}
		else if($computeminutes!=0 && $computeminutes==1){
			return $computeminutes." minute ago";			
		}
		else if($computeminutes!=0 && $computeminutes>1){
			return $computeminutes." minutes ago";			
		}
		else if($computeseconds!=0 && $computeseconds==1){
			return $computeseconds." second ago";			
		}
		else if($computeseconds!=0 && $computeseconds>1){
			return $computeseconds." seconds ago";			
		}
	}
?>
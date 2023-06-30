<?php
	if(isset($_POST['login'])){
 
		session_start();
		include_once 'db_conn1.php';
	
		$_SESSION['email']=$_POST['email'];
		$_SESSION['password']=$_POST['password'];
		
		$query=mysqli_query($conn,"select * from `tbregistration` where email='".$_SESSION['email']."' && password='".$_SESSION['password']."'");
 
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']="Login Failed. User not Found!";
			header('location:login.php');
		}
		else{
			$row=mysqli_fetch_array($query);
 
			if (isset($_POST['login'])){
				setcookie("user", $row['email'], time() + (86400 * 30)); 
				setcookie("pass", $row['password'], time() + (86400 * 30)); 
			}
 
			$_SESSION['username']=$row['username'];
		
			header('location:dashboard.php?username='.$_SESSION["username"]);
		
		}
	}
	else{
		header('location:login.php');
		$_SESSION['message']="Please Login!";
	}
?>

<?php
	$err_flag = false;
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];


		if($username == "***" && $password == "***")
		{
			$_SESSION['team_user'] = $username;
			header("location:view.php");
		}
		else
		{
			$err_flag = true;
		}
	}
?>
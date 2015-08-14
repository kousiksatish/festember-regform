<?php

	session_start();

	if(!isset($_SESSION['team_user']))
		header("location:login.php");

?>
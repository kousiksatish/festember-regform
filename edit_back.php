<?php


$err_flag = false;
$suc_flag = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$err_flag = true;
	include 'dbconfig.php';
	$id = $_POST['id'];
	$fullname = $_POST['fullname'];
	$idname = $_POST['idname'];
	$teamname = $_POST['teamname'];
	$year = $_POST['year'];
	$designation = $_POST['designation'];
	$rollno= $_POST['rollno'];
	$dept = $_POST['dept'];
	$email = $_POST['email'];
	$phoneno = $_POST['phoneno'];
	//echo $fullname;
	$max_size = 1000000;//max size for upload
	$errors = array();
	if($fullname == "")
		array_push($errors, "Full Name Required");
	if($teamname == "")
		array_push($errors, "Team Name Required");
	if($year == "")
		array_push($errors, "Year Required");
	if($designation == "")
		array_push($errors, "Designation Required");
	if($rollno == "")
		array_push($errors, "Rollno Required");
	else if($rollno<100000000 || $rollno>999999999)
		array_push($errors, "9 digit rollno expected");
	if($dept == "")
		array_push($errors, "Department required");
	if($email == "")
		array_push($errors, "Email Required");
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	 	array_push($errors, "Enter valid email address");
	if($phoneno == "")
		array_push($errors, "Phone no required");
	else if($phoneno<1000000000 || $phoneno>9999999999)
		array_push($errors, "Enter valid phone number");

	//echo $fullname;
	if(sizeof($errors) == 0)
	{

		$fullname = mysqli_real_escape_string($con, $fullname);
		$idname = mysqli_real_escape_string($con, $idname);
		$teamname = mysqli_real_escape_string($con, $teamname);
		$year = mysqli_real_escape_string($con, $year);
		$designation = mysqli_real_escape_string($con, $designation);
		$rollno= mysqli_real_escape_string($con, $rollno);
		$dept = mysqli_real_escape_string($con, $dept);
		$email = mysqli_real_escape_string($con, $email);
		$phoneno = mysqli_real_escape_string($con, $phoneno);
		

		$data = array(
				"fullname"=>$fullname,
				"idname"=>$idname,
				"teamname"=>$teamname,
				"year"=>$year,
				"designation"=>$designation,
				"rollno"=>$rollno,
				"dept"=>$dept,
				"email"=>$email,
				"phoneno"=>$phoneno
			);
		
		$str = '';
		foreach($data as $key=>$value)
		{
			
			$str = $str . $key. " = '". $value . "', ";
			
		}
		$str = substr($str, 0, -2);
		

		$query = "UPDATE register SET ". $str . " WHERE id = $id";
		
		mysqli_query($con, $query) or die("not updated");


		$err_flag = false;
		$suc_flag = true;
		$success = "Successfully editted!!! <a href='view.php'>Go back</a>";
	}
	
} 

?>
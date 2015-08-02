<?php


$err_flag = false;
$suc_flag = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$err_flag = true;
	include 'dbconfig.php';

	$fullname = $_POST['fullname'];
	$idname = $_POST['idname'];
	$teamname = $_POST['teamname'];
	$year = $_POST['year'];
	$designation = $_POST['designation'];
	$rollno= $_POST['rollno'];
	$dept = $_POST['dept'];
	$email = $_POST['email'];
	$phoneno = $_POST['phoneno'];
	$file = $_FILE['img']['tmp_name'];

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

	$ext = pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);

	if($_FILES['img']['size'] === 0)
		array_push($errors, "Image not uploaded");
	else if(!($ext!='jpg' || $ext!='png'))
		array_push($errors, "File is not an image");
	else if($_FILES['img']['size'] > $max_size)
		array_push($errors, "Image too big");

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


		$target_dir = "uploads/";
		$target_file = $target_dir . $rollno . '.' .$ext;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)
			or die("Error");

		

		$data = array(
				"fullname"=>$fullname,
				"idname"=>$idname,
				"teamname"=>$teamname,
				"year"=>$year,
				"designation"=>$designation,
				"rollno"=>$rollno,
				"dept"=>$dept,
				"email"=>$email,
				"phoneno"=>$phoneno,
				"img"=>$target_file
			);

		$fields = array_keys($data);
		$values = array_values($data);

		$f=implode(',',$fields);
		$v=implode(',',$values);

		$query="INSERT INTO register ($f) VALUES ('" . implode( "','", $values ) . "');";
		mysqli_query($con, $query) or die("not inserted");
		
		$fullname = "";
		$teamname = "";
		$year = "";
		$designation = "";
		$rollno = "";
		$email = "";
		$phoneno = "":
		$img = "";

		$err_flag = false;
		$suc_flag = true;
		$success = "Successfully entered!!!";
	}
	
}

?>
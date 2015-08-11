<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Festember Registration Form">
    <meta name="author" content="Delta Force">
    <link rel="icon" href="../15/favicon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome-4.1.0/css/font-awesome.min.css">
    <style>
    body {
        padding-top: 50px;
      }
        .starter-template {
        padding: 40px 15px;
        //text-align: center;
      }

    </style>
    <title>Festember Team Registration</title>
  </head>

  <body>
  	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Festember Team</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="./">Home</a></li>
            <li class="active"><a href="#">View</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
  		<div class="starter-template">
    	<div id="details">

    	</div>
    	</div>
    </div>
    </body>

    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dataTables/jquery.dataTables.js"></script>
    <script src="js/dataTables/dataTables.bootstrap.js"></script>

    <script>
    var dataSet = [];


    <?php
    	include 'dbconfig.php';
    	$tablename = "register";

    	$query = "SELECT * FROM register";

    	$result = mysqli_query($con, $query) or die("error querying");
    	$teams = array(
          "marketing" => "Marketing",
          "media"  => "Media Relations",
          "oc" => "Organising Committee",
          "qmt"  => "Quality Management",
          "hospitality"  => "Hospitality",
          "pr" => "Public Relations",
          "webops" => "Web-Ops",
          "design" => "Design",
          "workshops"  => "Workshops",
          "informals"  => "Informals",
          "publicity" => "Publicity",
          "events" => "Events",       
          "content"  => "Content",
          "pixelbug" => "Pixelbug",
          "arts" => "Arts",
          "ambience" => "Ambience",
          "englits"  => "English Lits",
          "tamlits"  => "Tamil Lits",
          "hinlits"  => "Hindi Lits",
          "dance"  => "Dance Troupe",
          "music"  => "Music Troupe",
          "shrutilaya"  => "Shrutilaya",
          "cinematics"  => "Cinematics",
          "thespi"  => "Thespian",
          "fashion"  => "Fashion",
          "moctail"  => "MoCTail",
          "fsr"  => "Social Responsibility",
          "culturals"  => "Culturals",
          "gl"  => "Guest Lectures",
          "gaming" => "Gaming"
        );

		$years = array(
          "2" => "II",
          "3" => "III",
          "4" => "IV",
          "5" => "V"
        );
        $desigs = array(
          "manager" => "Manager",
          "deputymanager" => "Deputy Manager",
          "coordinator" => "Coordinator"
        );

        $depts = array(
            "arch" => "ARCH",
            "chem" => "CHEM",
            "civ" => "CIV",
            "cse" => "CSE",
            "ece" => "ECE",
            "eee" => "EEE",
            "ice" => "ICE",
            "mech" => "MECH",
            "meta" => "META",
            "prod" => "PROD"
        );
    	while($row = mysqli_fetch_array($result))
    	{
    ?>

    	var temp = [];
    	temp.push("<?php echo $row['fullname'] ?>");
    	temp.push("<?php echo $row['idname'] ?>");
    	temp.push("<?php echo $teams[$row['teamname']] ?>");
    	temp.push("<?php echo $years[$row['year']] ?>");
    	temp.push("<?php echo $desigs[$row['designation']] ?>");
    	temp.push("<?php echo $row['rollno'] ?>");
    	temp.push("<?php echo $depts[$row['dept']] ?>");
    	temp.push("<?php echo $row['email'] ?>");
    	temp.push("<?php echo $row['phoneno'] ?>");
    	temp.push("<?php echo $row['img'] ?>");

    	dataSet.push(temp);
    <?php

    	}
    ?>

    $(document).ready(function(){
    	$("#details").html('<table id="details_in" class="table table-striped table-bordered table-hover"></table>');
    	$("#details_in").dataTable( {
    		"data": dataSet,
    		"dom": 'T<"clear">lfrtip',
    		"columns": [
    			{ "title" : "Full Name"},
    			{ "title" : "ID Name"},
    			{ "title" : "Team Name"},
    			{ "title" : "Year"},
    			{ "title" : "Designation"},
    			{ "title" : "RollNo"},
    			{ "title" : "Dept"},
    			{ "title" : "Email"},
    			{ "title" : "Phone"},
    			{ "title" : "Img"}
    		]
    	});
    });
    </script>
</head>
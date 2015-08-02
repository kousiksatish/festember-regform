<?php
    include 'register.php';
  
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Festember Registration Form">
    <meta name="author" content="Delta Force">
    <link rel="icon" href="../15/favicon.png">

    <title>Festember Team Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        padding-top: 50px;
      }
        .starter-template {
        padding: 40px 15px;
        //text-align: center;
      }

    </style>
    
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
            <li class="active"><a href="#">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <div class="container">
  <div class="starter-template">

    <?php
      if($err_flag)
      {
        ?>
          <div class="panel panel-danger">
            <div class="panel-body">
            <?php
              foreach($errors as $err)
                echo '<li>'.$err.'</li>';
            ?>
            </div>
          </div>
        <?php
      }
      if($suc_flag)
      {
        ?>
          <div class="panel panel-success">
            <div class="panel-body">
            <?php
              echo $success;
            ?>
          </div>
          </div>
        <?php
      }
    ?>
    <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" >
    <div class="form-group">
      <label for="fullname" class="col-sm-2 control-label">Full Name</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="fullname" placeholder="Full Name" value="<?php echo $fullname; ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="idname" class="col-sm-2 control-label">ID Name</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="idname" placeholder="ID Name" value="<?php echo $idname; ?>" required>
      </div>
    </div>
    <?php
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
        );
    ?>
    <div class="form-group">
      <label for="teamname" class="col-sm-2 control-label">Team Name</label>
      <div class="col-sm-3">
        <select class="form-control" name="teamname" required>
          <?php
            foreach($teams as $key=>$value)
            {
              echo '<option value="'.$key;
              if($key == $teamname)
                echo '" selected="selected';
              echo '">'.$value.'</option>';
            }
          ?>
        </select>
      </div>
    </div>

    <?php
      $years = array(
          "2" => "II",
          "3" => "III",
          "4" => "IV"
        );
    ?>

    <div class="form-group">
      <label for="year" class="col-sm-2 control-label">Year</label>
      <div class="col-sm-3">
        <select class="form-control" name="year" required>
          <?php
            foreach($years as $key=>$value)
            {
              echo '<option value="'.$key;
              if($key == $year)
                echo '" selected="selected';
              echo '">'.$value.'</option>';
            }
          ?>
        </select>
      </div>
    </div>

    <?php
      $desigs = array(
          "manager" => "Manager",
          "deputymanager" => "Deputy Manager",
          "coordinator" => "Coordinator"
        );
    ?>
    <div class="form-group">
      <label for="designation" class="col-sm-2 control-label">Designation</label>
      <div class="col-sm-3">
        <select class="form-control" name="designation" required>
          <?php
            foreach($desigs as $key=>$value)
            {
              echo '<option value="'.$key;
              if($key == $designation)
                echo '" selected="selected';
              echo '">'.$value.'</option>';
            }
          ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="rollno" class="col-sm-2 control-label">Roll Number</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="rollno" pattern="[0-9]{9}" title="9 digit rollno" value="<?php echo $rollno; ?>" placeholder="Roll Number" required>
      </div>
    </div>
    <?php 
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
    ?>
    <div class="form-group">
      <label for="dept" class="col-sm-2 control-label">Department</label>
      <div class="col-sm-3">
        <select class="form-control" name="dept" required>
            <?php
            foreach($depts as $key=>$value)
            {
              echo '<option value="'.$key;
              if($key == $dept)
                echo '" selected="selected';
              echo '">'.$value.'</option>';
            }
            ?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="phoneno" class="col-sm-2 control-label">Phone Number</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="phoneno" placeholder="Phone Number" pattern="[0-9]{10}" title="10 digit moile no" value="<?php echo $phoneno; ?>"  required>
      </div>
    </div>

    <div class="form-group">
      <label for="email" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-3">
        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label for="photo" class="col-sm-2 control-label">Photo for ID</label>
      <div class="col-sm-3">
        <input type="file" class="form-control" name="img" placeholder="File" required>
      </div>
    </div>

    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

</form>
</div>
</div>
</body>

</html>

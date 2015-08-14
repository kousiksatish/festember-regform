<?php
    session_start();

    if(isset($_SESSION['team_user']))
        header("location:view.php");
    include 'login_back.php';

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
            <li><a href="./">Home</a></li>
            <li><a href="view.php">View</a></li>
            <li class="active"><a href="#">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
    <div class="starter-template">
    <?php
        if($err_flag)
            echo 'Invalid credentials. Please try again';
    ?>
    <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" >
    <div class="form-group">
      <label for="username" class="col-sm-2 control-label">User name</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="username" placeholder="User Name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="idname" class="col-sm-2 control-label">Password</label>
      <div class="col-sm-3">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </body>
</html>
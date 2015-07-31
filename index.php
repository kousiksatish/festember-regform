<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Festember Registration Form">
    <meta name="author" content="Delta Force">
    <link rel="icon" href="../../favicon.ico">

    <title>Festember Registration</title>

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
          <a class="navbar-brand" href="#">Festember</a>
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
    <form class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
      <label for="fullname" class="col-sm-2 control-label">Full Name</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="idname" class="col-sm-2 control-label">ID Name</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="idname" placeholder="ID Name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="teamname" class="col-sm-2 control-label">Team Name</label>
      <div class="col-sm-3">
        <select class="form-control" name="teamname" required>
          <option value="marketing">Marketing</option>
          <option value="publicity">Publicity</option>
          <option value="workshops">Workshops</option>
          <option value="events">Events</option>
          <option value="csg">CSG</option>
          <option value="fsr">FSR</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="year" class="col-sm-2 control-label">Year</label>
      <div class="col-sm-3">
        <select class="form-control" name="year" required>
          <option value="2">II</option>
          <option value="3">III</option>
          <option value="4">IV</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="designation" class="col-sm-2 control-label">Designation</label>
      <div class="col-sm-3">
        <select class="form-control" name="designation" required>
          <option value="manager">Manager</option>
          <option value="deputymanager">Deputy Manager</option>
          <option value="coordinator">Coordinator</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="rollno" class="col-sm-2 control-label">Roll Number</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="rollno" placeholder="Roll Number" required>
      </div>
    </div>

    <div class="form-group">
      <label for="dept" class="col-sm-2 control-label">Department</label>
      <div class="col-sm-3">
        <select class="form-control" name="year" required>
            <option value="arch">ARCH</option>
            <option value="chem">CHEM</option>
            <option value="civ">CIV</option>
            <option value="cse">CSE</option>
            <option value="ece">ECE</option>
            <option value="eee">EEE</option>
            <option value="ice">ICE</option>
            <option value="mech">MECH</option>
            <option value="meta">META</option>
            <option value="prod">PROD</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="email" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-3">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>
    </div>

    <div class="form-group">
      <label for="photo" class="col-sm-2 control-label">Photo for ID</label>
      <div class="col-sm-3">
        <input type="file" class="form-control" name="photo" placeholder="File" required>
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

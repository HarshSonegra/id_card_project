<?php
  session_start();
  if(!$_SESSION['enr']){
    header('Location:../login.php');
  }
?>
<!Doctype HTML>
<html>
<head>
  <title>Gpp-Admin</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .bx{
      border-radius:15px;
    }
    .bx:hover{
      background-color:rgb(3, 3, 53);
    }
  </style>
</head>
<body>
  <div id="mySidenav" class="sidenav">
    <p class="logo"><a style="color:white; font-size:30px; padding-left: 1%;" href="./admindash.php"><span>GP</span>-Porbandar</a></p>
    <a href="./admindash.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
    <a href="./cardreq.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;ID-card Request</a>
    <a href="./completed.php" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Completed Request</a>
    <a href="./profile.php" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp; Profile</a>
    <a href="../logout.php" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp; Log-out</a>
    
  </div>
  <div id="main"> 
    <div class="head">
      <div class="col-div-6">
        <a href="./admindash.php" style="color:white; font-size:30px; text-decoration:none; ">Admin</a>
      </div>

      <div class="clearfix"></div>
    </div>

    <div class="clearfix"></div>
    <br />

    <div class="col-div-3">
      <a href="./viewstudents.php">
        <div class="box bx">
          <?php
            $con = mysql_connect("localhost","root","");
            $db = mysql_select_db('student');
            $sql = "SELECT * FROM `login`;";
            $res = mysql_query($sql);
            $row = mysql_num_rows($res) - 1;
            echo "<p>$row<br /><span>Students</span></p>";
          ?>
          <i class="fa fa-users box-icon"></i>
        </div>
      </a>
    </div>
    <div class="col-div-3">
      <a href="./cardreq.php">
        <div class="box bx">
          <?php
            $con = mysql_connect("localhost","root","");
            $db = mysql_select_db('student');
            $sql = "SELECT * FROM `req` where `sts`=0;";
            $res = mysql_query($sql);
            $row = mysql_num_rows($res);
            echo "<p>$row<br /><span>Pending</span></p>";
          ?>
          <i class="fa fa-list box-icon"></i>
        </div>
      </a>
    </div>
    <div class="col-div-3">
      <a href="./completed.php">
        <div class="box bx">
        <?php
            $con = mysql_connect("localhost","root","");
            $db = mysql_select_db('student');
            $sql = "SELECT * FROM `req` where `sts`=1;";
            $res = mysql_query($sql);
            $row = mysql_num_rows($res);
            echo "<p>$row<br /><span>Completed</span></p>";
          ?>
          <i class="fa fa-shopping-bag box-icon"></i>
        </div>
      </a>
    </div>
    <div class="col-div-3">
      <a href="./addstudents.php">
        <div class="box bx">
          <p>+<br><span>Add Students</span></p>
          <i class="fa fa-tasks box-icon"></i>
        </div>
      </a>
    </div>
    <div class="clearfix"></div>
    
    <div class="container" style="margin:20px;">
      <h2 style="color:gray;">Hey admin, Government Polytechnic Porbandar.</h2>
      <p style="color:gray;">Add students , See and Approve id card requests.</p>
    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
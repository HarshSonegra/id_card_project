<?php
  session_start();
  if(!$_SESSION['enr']){
    header('Location:../login.php');
  }
?>
<!Doctype HTML>
<html>
<head>
  <title>View Students -GPP</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/profile.css">
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
    <div class="container">
      <a href="./deleteall.php" class="change">Delete All Students</a>
      <a href="./deleteone.php" class="change">Delete one student</a>
      <a href="./view.php" class="change">View and manage students</a>
      <a href="./addstudents.php" class="change">Add more students</a>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
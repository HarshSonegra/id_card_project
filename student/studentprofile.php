<?php
  session_start();
  if(!$_SESSION['enr']){
    header('Location:../login.php');
  }
?>
<!Doctype HTML>
<html>
<head>
  <title>Profile-GPP</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../admin/css/profile.css">
</head>
<body>
  <div id="mySidenav" class="sidenav">
    <p class="logo"><a style="color:white; font-size:30px; padding-left: 1%;" href="./welcome.php"><span>GP</span>-Porbandar</a></p>
    <a href="./welcome.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Home Page</a>
    <a href="./studentreq.php" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Request</a>
    <a href="./studentprofile.php" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp; Profile</a>
    <a href="../logout.php" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp; Log-out</a>
  </div>
  <div id="main">
    <div class="head">
      <div class="col-div-6">
        <a href="./welcome.php" style="color:white; font-size:30px; text-decoration:none; ">Student</a>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <br />

    <div class="clearfix"></div>
    <div class="container">
      <a href="./change.php" class="change">Change your password</a>
      <a href="./editdetails.php" class="change">Edit Your Details</a>
      <a href="./view.php" class="change">View Your Profile</a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
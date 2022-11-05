<?php
  session_start();
  if(!$_SESSION['enr']){
    header('Location:../login.php');
  }
?>
<!Doctype HTML>
<html>
<head>
  <title>Gpp-Student</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="container" style="margin:20px;">
      <?php
        $name = $_SESSION['enr'];
        echo "<h2 style='color:gray;'>Dear $name of  Government Polytechnic Porbandar.</h2>";
      ?>
      <p style="color:gray;">make sure to edit your profile first before reqesting for id card.</p>
      <p style="color:gray;">Request and track id card requests.</p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
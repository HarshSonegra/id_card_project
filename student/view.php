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
  <link rel="stylesheet" href="./css/displayprofile.css">
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
    <div class="container">
         <ul class="listdet">
            <?php
                $con = mysql_connect("localhost","root","");
                $db = mysql_select_db('student');
                $enr = $_SESSION['enr'];
                $sql = "SELECT * FROM `details` where `enr`=$enr;";
                $res = mysql_query($sql);
                $i = mysql_fetch_assoc($res);
                $enr = $i['enr'];
                $first = $i['first'];
                $middle = $i['middle'];
                $last = $i['last'];
                $birth_date = $i['birth_date'];
                $blood_group = $i['blood_group'];
                $mobile1 = $i['mobile1'];
                $mobile2 = $i['mobile2'];
                $addr = $i['addr'];
                $photo = $i['photo'];

                echo "<img src='../student_img/$photo' alt='image not found' height='200px' width='200px'>";
                echo "<li>Name : $first $middle $last</li>";
                echo "<li>Birthdate : $birth_date</li>";
                echo "<li>Bloodgroup : $blood_group</li>";
                echo "<li>Mobile number : $mobile1 / $mobile2 </li>";
                echo "<li>Address : $addr </li>";
            ?>
         </ul>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
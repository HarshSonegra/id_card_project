<?php
  session_start();
  if(!$_SESSION['enr']){
    header('Location:../login.php');
  }
?>
<!Doctype HTML>
<html>
<head>
  <title>Request-GPP</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../admin/css/profile.css">
  <script src="../admin/js/js.js"></script>
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
    <?php
      $con = mysql_connect("localhost","root","");
      $db = mysql_select_db('student');
      $enr = $_SESSION['enr'];
      $sql = "SELECT * FROM `req` where `enr`=$enr;";
      $res = mysql_query($sql);
      $row = mysql_num_rows($res);
      if($row==0){
        echo "<a href='./request.php' class='change'>Create request for your id card</a><br>";
      }else{
        $i = mysql_fetch_assoc($res);
        if($i['sts']==0){
          echo "<h3 style='color:white;'>your request is still under process</h3>";
        }else if($i['sts']==-1){
          echo "<h3 style='color:white;'>your request is denied you might have some data issue</h3>";
          echo "<h3 style='color:white;'>Please edit your profile and try again from below link</h3>";
          echo "<a  style='color:white;' href='./requestagain.php'>request again</a>";
        }
        else{
          echo "<h3 style='color:white;'>your request is proceded you can view the card from below it now</h3>";
          echo "<div class='forms'>
          <form action='../admin/idcardview.php' method='post'>
              <input type='hidden' name='enr' value=$enr>
              <input type='submit' class='btn btn-primary' value='View>'>
          </form>
      </div>";
        }
      }
    ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>


</html>
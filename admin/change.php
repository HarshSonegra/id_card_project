<?php
  session_start();
  if(!$_SESSION['enr']){
    header('Location:../login.php');
  }
?>
<!Doctype HTML>
<html>
<head>
  <title>Change Pass -GPP</title>
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/profile.css">
  <style>
    .form{
        margin:10px;
    }
    .fix{
        border:1px solid rgb(180, 170, 170);
        border-radius: 5px;
        padding-left: 10px;
        color:rgb(71, 65, 65);
    }
  </style>
</head>
<body>
    <div class="container">
    <p class="logo" style="margin:10px;"><a style="color:blue; font-size:30px; padding-left: 1%;" href="./admindash.php"><span>GP-</span>Porbandar</a></p>
        <form class="form" method="POST" action="./updatepass.php">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">User</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext fix" id="staticEmail" value="gppadmin">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Old Password</label>
                <div class="col-sm-10">
                <input type="password" name="old" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">New Password</label>
                <div class="col-sm-10">
                <input type="password" name="new" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Change password">
          </form>
      </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
<?php
  session_start();
  if(!$_SESSION['enr']){
    header('Location:../login.php');
  }
?>
<!Doctype HTML>
<html>
<head>
  <title>Ad students-gpp</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">
      <p class="logo" style="margin:10px;"><a style="color:blue; font-size:30px; padding-left: 1%;" href="./admindash.php"><span>GP-</span>Porbandar</a></p>
      <form action="./add.php" method="GET">
        <div class="form-group row" style="margin:10px;">
            <label class="col-sm-2 col-form-label">Enter the year</label>
            <div class="col-sm-10">
            <input type="text" name="year" class="form-control" autocomplete="off" placeholder="year:2020">
        </div>
        </div>
        <div class="form-group row" style="margin:10px;">
            <label class="col-sm-2 col-form-label">Enter no. of students</label>
            <div class="col-sm-10">
            <input type="number" name="n" class="form-control" id="inputPassword" autocomplete="off" placeholder="n number of students">
            </div>
        </div>
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="add students">
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
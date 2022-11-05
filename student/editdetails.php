<?php
  session_start();
  if(!$_SESSION['enr']){
    header('Location:../login.php');
  }
?>
<!Doctype HTML>
<html>
<head>
  <title>Change details -GPP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/profile.css">
  <link rel="stylesheet" href="./css/edit.css">
</head>
<body>
    <div class="container">
    <p class="logo" style="margin:15px;"><a style="color:blue; font-weight:bolder; font-size:30px; padding-left: 1%;" href="./welcome.php"><span style="color:red;">GP-</span>Porbandar</a></p>
        <form class="form" method="POST" action="./edit.php" enctype="multipart/form-data">

            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">User</label>
                <div class="col-sm-10">
                  <?php
                      $enr = $_SESSION['enr'];
                      echo "<input type='text' name='enr' readonly class='form-control-plaintext fix enr' id='staticEmail' value='$enr'>";
                  ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="first" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="first" class="form-control name" placeholder="Firstname" required autocomplete="off">
                  <input type="text" name="middle" class="form-control name" placeholder="Middlename" required autocomplete="off">
                  <input type="text" name="last" class="form-control name" placeholder="Lastname" required autocomplete="off">
                </div>
            </div>    

            <div class="form-group row">
                <label for="birth_date" class="col-sm-2 col-form-label">Birthdate</label>
                <div class="col-sm-10">
                  <input type="date" name="birth_date" class="form-control name" requried autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
              <label for="blood_group" class="col-sm-2 col-form-label">Blood Group</label>
              <div class="col-sm-10">
                <select name="bg" class="form-select name select" aria-label="Default select example" required>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                </select>
                <select class="form-select name select"  name="pn" aria-label="Default select example" required>
                  <option selected value="+">Positive</option>
                  <option value="-">Negative</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
                <label for="mob" class="col-sm-2 col-form-label">Enter Mobile Number</label>
                <div class="col-sm-10">
                  <input type="tel" name="mobile1" class="form-control name" placeholder="First no." required autocomplete="off">
                  <input type="tel" name="mobile2" class="form-control name" placeholder="Second no." required autocomplete="off">
                </div>
            </div> 
            <div class="form-group row">
                <label for="mob" class="col-sm-2 col-form-label">Photo:</label>
                <div class="col-sm-10">
                  <input type="file" name="image" id="fileToUpload">
                </div>
            </div> 
            <div class="form-group row">
                <label for="addr" class="col-sm-2 col-form-label">Enter Address</label>
                <div class="col-sm-10">
                  <div class="form-floating">
                    <textarea class="form-control" name="addr" placeholder="Address here" id="floatingTextarea" autocomplete="off"></textarea>
                  </div>
                </div>
            </div> 
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Change Detail">
          </form>
      </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
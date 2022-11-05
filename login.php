<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login-Gpp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
      .cen::placeholder{
        padding:5px;
      }
    </style>
</head>
<body>
  <div>
    <form action="./check.php" method="post" class="vh-100 gradient-custom" style="height:90vh;">
      <div class="container py-5 h-90">
        <div class="row d-flex justify-content-center align-items-center h-90">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem; height:90vh;">
              <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">
                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-5">Please enter your enrollment and password !</p>
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeEmailX">Enrollment</label>
                    <!-- getting enr -->
                    <input type="text" name="enr" id="typeEmailX"  class="form-control form-control-lg cen" placeholder="XX6270307XXX" required>
                  </div>
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typePasswordX" >Password</label>
                    <!-- getting pass -->
                    <input type="password" id="typePasswordX" name="pass" placeholder="********" class="form-control form-control-lg cen" required>
                  </div>
                  <p class="small mb-5 pb-lg-2">Please Contact Respective faculty if you forget your password</a></p>
                  <input class="btn btn-outline-light btn-lg px-5" type="submit" value="Login">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
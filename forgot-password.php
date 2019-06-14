<!DOCTYPE html>


<!DOCTYPE html>
  <?php include('server1.php') ?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body class="bg-gradient-primary">
    <?php
        include'connection.php';
        $sql='SELECT * FROM produse;';
        $query= mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql1='SELECT * FROM conturi;';
        $query1= mysqli_query($con, $sql1) or die(mysqli_error($con));
        ?>

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                    <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                  </div>
                <form method="post" class="user" action="forgot-password.php"  >
                  
                  
                <div class="form-group input-group">
                  
                    <input type="text" name="username" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                  
                  
                </div>
                <div class="form-group input-group">
                  <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0 input-group">
                    <input type="password" name="password_1"   class="form-control form-control-user" id="exampleInputPassword" placeholder="New Password">
                  </div>
                  <div class="col-sm-6 input-group">
                    <input type="password"  name="password_2"  class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat New Password">
                  </div>
                </div>
                    <div class="input-group">
                  <input type="submit" name="reg_user" class="btn btn-primary btn-user btn-block"value="Reset Password">
                  
                  </div>
                
                
                
                 
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php

if(isset($_POST["submit"])){
    $sql1="INSERT INTO conturi(nume, prenume, adresa, parola) VALUES('{$_POST["nume"]}','{$_POST["prenume"]}','{$_POST["adresa"]}','{$_POST["parola"]}')";
    $query1= mysqli_query($con, $sql1) or die(mysqli_error($con));
    echo "Inregistrarea a fost adaugata cu succes!";
}
?>
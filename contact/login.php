<?php
include('connection.php');
session_start();

if(!isset($_SESSION['is_adminlogin'])){

  if(isset($_REQUEST['login'])){
      $email = mysqli_real_escape_string($con,trim($_POST['email']));
      $password = mysqli_real_escape_string($con,trim($_POST['password']));

      $sql = "select * from signup where email='$email' && password='$password'";

      $result = mysqli_query($con,$sql);

      $num=mysqli_num_rows($result);

      if($num == 1){

        $_SESSION['is_adminlogin'] = true;
        $_SESSION['email'] = $email;
        // Redirecting to RequesterProfile page on Correct Email and Pass
        echo "<script> location.href='dashboard.php'; </script>";
      } 

      else {

        $msg = '<div class="alert alert-warning mt-2" role="alert"> Enter Valid Email and Password </div>';
      }
  }

} 
else {
     echo "<script> location.href='dashboard.php'; </script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>

  <style>
    .custom-margin {
         margin-top: 8vh;
      }
   </style>
  <title>Login</title>
</head>

<body>

  <p class="text-center mt-5" style="font-size: 40px;"> <i class="fas fa-user-secret text-info mr-2"></i> <span>Admin</span>
  </p>

  <div class="container-fluid mb-5">
    <div class="row justify-content-center custom-margin">
      <div class="col-sm-6 col-md-4">

        <form action="" class="shadow-lg p-4" method="POST">

          <div class="form-group">
              <i class="fas fa-user"></i><label for="email" class="pl-2 font-weight-bold">Email</label>
              <input type="email"
                class="form-control" placeholder="Email" name="email">
          </div>

          <div class="form-group">
              <i class="fas fa-key"></i><label for="pass" class="pl-2 font-weight-bold">Password</label>
              <input type="password"
                class="form-control" placeholder="Password" name="password">
          </div>

          <button type="submit" name="login" class="btn btn-outline-info mt-3 btn-block shadow-sm font-weight-bold">Login</button>

          <?php if(isset($msg)) {echo $msg; } ?>
        </form>
        <div class="text-center"><a class="btn btn-info mt-5 shadow-sm font-weight-bold" href="../index.html">Back to Home</a></div>
      </div>
    </div>
  </div>



  <script src="https://kit.fontawesome.com/f723055c76.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="js/carofresdhel.js" type="text/javascript"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="../js/Plugin/aos-master/dist/aos.js"></script>
    

   <!-- ******   Javascript File *******   -->
   <script src="../js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  <?php echo TITLE ?>
 </title>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

<style>

  .nav-link{
    color: rgba(0, 0, 0, .77);
  }
  .active{
    background-color: #17a2b8;
    color: white;
  }
  .nav-link:hover{
    color: rgba(0, 0, 0, .80);
    background-color: #17a2b8;
  }

  .fa-trash{
    color:#ff5d52 ;
  }


  .content{
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .q{
    width: 100%;
    display: flex;
    justify-content: center;
    position: relative;
  }

  .quote{
    margin-top: 100px;
    font-size: 30px;
    text-align: center;
   font-family: 'Courgette', cursive;

  }

  span{
    font-size: 70px;
    height: 50px;
     font-family: 'Courgette', cursive;
  }

  span:first-child{
    position: absolute;
    top: 0%;
    left: 10%;
  }

  span:last-child{
    position: absolute;
    bottom: -20%;
    right: 10%;
  }
</style>
</head>

<body>

 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top bg-light p-1 shadow justify-content-center">
  <a class="navbar-brand" href="dashboard.php">
    <img src="./image/s2.png" width="100px" height="90px">
  </a>
 </nav>

 <!-- Side Bar -->
 <div class="container-fluid" style="margin-top:150px;">
  <div class="row">
   <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">

      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'dashboard') { echo 'active'; } ?> " href="dashboard.php">
        <i class="fas fa-tachometer-alt mr-2"></i>
        Dashboard
       </a>
      </li>

     <!--  <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'selectArmy') { echo 'active'; } ?> " href="selectArmy.php">
        <i class="fa fa-truck mr-2"></i>
        Indian Army
       </a>
      </li> -->

      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'selectNavy') { echo 'active'; } ?> " href="selectNavy.php">
        <i class="fa fa-ship mr-2"></i>
        Navy
       </a>
      </li>

     <!--  <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'selectAirforce') { echo 'active'; } ?> " href="selectAirforce.php">
        <i class="fa fa-fighter-jet mr-2"></i>
        Airforce
       </a>
      </li> -->

      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'changepass') { echo 'active'; } ?>" href="changePass.php">
        <i class="fas fa-key mr-2"></i>
        Change Password
       </a>
      </li>

      <li class="nav-item">
       <a class="nav-link" href="logout.php">
        <i class="fas fa-sign-out-alt mr-2"></i>
        Logout
       </a>
      </li>

     </ul>
    </div>
   </nav>
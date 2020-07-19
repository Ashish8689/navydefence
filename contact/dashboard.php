<?php
define('TITLE', 'Dashboard');
define('PAGE', 'dashboard');

include('connection.php');
include('include/header.php'); 

session_start();

if(isset($_SESSION['is_adminlogin'])){
  $email = $_SESSION['email'];
}
else{
  echo "<script>location.href='login.php'</script>";
}

?>


<div class="col-sm-9 col-md-10 content">
  <!-- <div class="row mx-5 text-center">

    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Requests Received</div>
        <div class="card-body">
          <h4 class="card-title">1
          </h4>
          <a class="btn text-white" href="selectArmy.php">Army</a>
        </div>
      </div>
    </div>

    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Assigned Work</div>
        <div class="card-body">
          <h4 class="card-title">2
          </h4>
          <a class="btn text-white" href="selectNavy.php">Navy</a>
        </div>
      </div>
    </div>

    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">No. of Technician</div>
        <div class="card-body">
          <h4 class="card-title">3
          </h4>
          <a class="btn text-white" href="selectAirforce.php">Airforce</a>
        </div>
      </div>
    </div>
  </div> -->

<div class="q">
  <span class="sub">"</span> <p class="quote">You learn more from Failure than from  success.<br> Don't let it stop you. <br>Failure builts character.</p><span class="sub">"</span>
</div>

</div>
</div>
</div>
<?php
include('include/footer.php'); 
?>
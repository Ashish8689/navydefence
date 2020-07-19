<?php
define('TITLE', 'Change Password');
define('PAGE', 'changepass');
include('include/header.php'); 
include('connection.php');

session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $email = $_SESSION['email'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }

 $email = $_SESSION['email'];

 if(isset($_REQUEST['passupdate'])){

  if(($_REQUEST['password'] == "")){
       // msg displayed if required field missing
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  }
   else 
   {
      $sql = "select * from signup where email='$email'";

      $result = $con->query($sql);

      if($result->num_rows == 1){

       $pass = $_REQUEST['password'];

       $sql = "UPDATE signup SET password = '$pass' WHERE email = '$email'";
        if($con->query($sql) == TRUE){
         // below msg display on form submit success
         $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
        } else {
         // below msg display on form submit failed
         $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
        }
      }
   }
}
?>
<div class="col-sm-9 col-md-10">
  <div class="row">
    <div class="col-sm-6">
      <form class="mt-5 mx-5">
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" value=" <?php echo $email ?>" readonly>
        </div>
        <div class="form-group">
          <label for="inputnewpassword">New Password</label>
          <input type="text" class="form-control" id="inputnewpassword" placeholder="New Password" name="password">
        </div>
        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        <?php if(isset($passmsg)) {echo $passmsg; } ?>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<?php
include('include/footer.php'); 
?>
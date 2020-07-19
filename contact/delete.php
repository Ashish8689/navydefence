<?php
 
 include "connection.php";

 $id=$_GET['id'];

 $deletequery="delete from query where id=$id";

 $query=mysqli_query($con,$deletequery);

  header('location:selectNavy.php');

 if($query){
 	?>
 	<script>
 		alert ("Deleted Succesfully");
 	</script>
 	<?php
 }
 else{
 	?>
 	<script>
 		alert ("Not deleted");
 	</script>
 	<?php
 }

?>
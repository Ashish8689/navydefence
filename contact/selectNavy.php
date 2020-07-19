<?php

  define('TITLE', 'selectNavy');
  define('PAGE', 'selectNavy');

  include "include/header.php";
  include "connection.php";
?>

<div class="col-sm-9 col-md-10">
 <div class="container">	
 	<h2 class="mb-5" style='margin-left:280px';>Indian Navy Query</h2>
  <table class=" table table-striped">
	<thead>
		<th>id</th>
		<th>Name</th>
		<th>Last</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Comment</th>
		<th>operation</th>
	</thead>

	<tbody>
 
	 <?php
	 
	 $selectQuery ="select * from query";
	 $call = mysqli_query($con,$selectQuery);
	 $row = mysqli_num_rows($call);

	 while($res = mysqli_fetch_array($call)){
    
    ?>

       <tr>
			<td><?php echo $res['id'] ?></td>
			<td><?php echo $res['name'] ?></td>
			<td><?php echo $res['last'] ?></td>
			<td><?php echo $res['email'] ?></td>
			<td><?php echo $res['mobile'] ?></td>
			<td><?php echo $res['comment'] ?></td>

			<td class="text-center"><a href="delete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="bottom" title="Delete">
			<i class="fa fa-trash"></i></a></td>

		</tr>
	  <?php	
	 }
	 
	?>

	</tbody>
</table>
</div>
</div>

<?php include 'include/footer.php' ?>
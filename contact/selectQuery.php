<!DOCTYPE html>
<html>
<head>
	<title>Select Query</title>
<meta charset="utf-8">	
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>

<div class="container">	

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
	 
	 include "../Connection.php";

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

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<script>
	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();
	});
</script>

</body>
</html>
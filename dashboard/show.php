<?php include "session.php" ?>

<?php include "header.php" ?>
<?php $thisPage="Show"; ?>
<?php include "sidebar.php" ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		

		</div>
		<div class="col-md-10">
			<center>
<h1 class="table table-dark">Display Student\Candidate data</h1>

<table border="3px solid;"class="table table-dark">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Mobile Number</th>
		<th>Place</th>
		<th>City</th>
		<th>Child_Name</th>
		<th>Child_Age</th>
		<th>Child_Gender</th>
	</tr>
		</div>
	</div>
</div>

	<?php

	include ('dbcon.php');

	$q="select * from form";
	$query = mysqli_query($con ,$q);


	while ($result = mysqli_fetch_array($query))
	{
		?>
		<tr class="text-center">
			<td><?php echo $result['id']?></td>
			<td><?php echo $result['name']?></td>
			<td><?php echo $result ['mobile']?></td>
			<td><?php echo $result['place'] ?></td>
			<td><?php echo $result['city'] ?></td>
			<td><?php echo $result['cname'] ?></td>
			<td><?php echo $result['cage'] ?></td>
			<td><?php echo $result['gender'] ?></td>
		</tr>
		<?php
	}
	?>
</table>
</center>
</body>
</html>

<?php include "footer.php" ?>
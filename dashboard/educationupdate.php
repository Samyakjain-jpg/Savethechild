<?php include "session.php" ?>

<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From education where id=$id";
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
}
?>


<?php include "header.php" ?> 
<?php $thisPage="educationupdate.php"; ?>
<?php include "sidebar.php"?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<section class="content-header">
	    <div class="container-fluid">
	        <div class="row mb-2">
	    	    <div class="col-sm-6">
	            	<h1>Education</h1>
	          	</div>
	          	<div class="col-sm-6">
	            	<ol class="breadcrumb float-sm-right">
	              		<li class="breadcrumb-item"><a href="#">Home</a></li>
	              		<li class="breadcrumb-item active">Education content Manage</li>
	            	</ol>
	          	</div>
	        </div>
	    </div><!-- /.container-fluid -->
	</section>
<!-- Main content -->
	<section class="content">
	    <div class="container-fluid">
	        <div class="row">
	          	<!-- left column -->
	          	<div class="col-md-2">
	          		
	          	</div>
		        <div class="col-md-8">
		            <!-- general form elements -->
		            <div class="card card-primary">
		        	    <div class="card-header">
		                	<h3 class="card-title">Update Content</h3>
		              	</div>
		              	<!-- /.card-header -->
		              	<!-- form start -->
		              	<form role="form" method="post" action="" enctype="multipart/form-data"> 
		                	<div class="card-body">
		                  		<div class="form-group">
			                    	<label>Title1</label>
			                    	<input type="text" class="form-control" id="exampleInputEmail1" name="h1" value="<?php echo $user['h1'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>Title2</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="h2" value="<?php echo $user['h2'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>Title3</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="h3" value="<?php echo $user['h3'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>Title4</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="h4" value="<?php echo $user['h4'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>Title5</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="h5" value="<?php echo $user['h5'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>Title6</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="h6" value="<?php echo $user['h6'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>Title7</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="h7" value="<?php echo $user['h7'] ?>">
			                  	</div>
			            	</div>
		                	<!-- /.card-body -->

			                <div class="card-footer">
			                  <button type="submit" class="btn btn-primary" name="update" value="update">Update</button>
			                </div>
		             	</form>
		            </div>
		            <!-- /.card -->
		        </div>
		    </div>
		</div>
	</section>
</div>

<?php include "footer.php" ?>


<!--update--->
<?php
  
  if(isset($_POST['update'])){

  	   	$h1 = $_POST['h1'];
  	   	$h2 = $_POST['h2'];
  	   	$h3 = $_POST['h3'];
  	   	$h4 = $_POST['h4'];
  	   	$h5 = $_POST['h5'];
  	   	$h6 = $_POST['h6'];
  	   	$h7 = $_POST['h7'];
	   
  	  $query ="UPDATE education SET h1 = '$h1', h2 = '$h2', h3 = '$h3', h4 = '$h4', h5 = '$h5', h6 = '$h6', h7 = '$h7' where id=$id";
  	  $fire = mysqli_query($con, $query) or die("can not fetch the data.".mysqli_error($con));

  	  //if($fire)echo "data updated successfully.";
  	  if($fire) {
    	?>
    	<script>
    		alert("data updated properly")
    	</script>
    	<?php
    }else{
    	?>
    	<script>
    		alert("data not updated")
    	</script>
    	<?php
    }

  } 
?>
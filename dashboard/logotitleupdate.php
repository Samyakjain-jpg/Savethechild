<?php include "session.php" ?>

<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From indexlogo3 where id=$id";
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
}
?>


<?php include "header.php" ?> 
<?php $thisPage="Logotitleupdate.php"; ?>
<?php include "sidebar.php" ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<section class="content-header">
	    <div class="container-fluid">
	        <div class="row mb-2">
	    	    <div class="col-sm-6">
	            	<h1>Logo title update</h1>
	          	</div>
	          	<div class="col-sm-6">
	            	<ol class="breadcrumb float-sm-right">
	              		<li class="breadcrumb-item"><a href="#">Home</a></li>
	              		<li class="breadcrumb-item active">Logo title update Manage</li>
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
			                    	<label>Title 1</label>
			                    	<input type="text" class="form-control" id="exampleInputEmail1" name="p1" value="<?php echo $user['p1'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>Title 2</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="p2" value="<?php echo $user['p2'] ?>">
			                  	</div>
			                  		<div class="form-group">
			                    	<label>Title 3</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="p3" value="<?php echo $user['p3'] ?>">
			                  	</div>
			                  		<div class="form-group">
			                    	<label>Title 4</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="p4" value="<?php echo $user['p4'] ?>">
			                  	</div>
			                  		<div class="form-group">
			                    	<label>PTitle 1</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="pt1" value="<?php echo $user['pt1'] ?>">
			                  	</div>
			                  		<div class="form-group">
			                    	<label>PTitle 2</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="pt2" value="<?php echo $user['pt2'] ?>">
			                  	</div>
			                  		<div class="form-group">
			                    	<label>PTitle 3</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="pt3" value="<?php echo $user['pt3'] ?>">
			                  	</div>
			                  		<div class="form-group">
			                    	<label>PTitle 4</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="pt4" value="<?php echo $user['pt4'] ?>">
			                  	</div>
			                  	<!-- <div class="form-group">
			                    	<label>Image</label>
			                    	<div class="input-group">
			                      		<div class="custom-file">
				                        	<input type="file" class="custom-file-input" id="exampleInputFile" name="image">
											<input type="file" name="image" value="<?php echo $user['image'] ?>">
				                      	</div>
				                    </div>
		                		</div> -->
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

  	   	$p1 = $_POST['p1'];
	    $p2 = $_POST['p2'];
	    $p3 = $_POST['p3'];
	    $p4 = $_POST['p4'];
	    $pt1 = $_POST['pt1'];
	    $pt2 = $_POST['pt2'];
	    $pt3 = $_POST['pt3'];
	    $pt4 = $_POST['pt4'];
	    // $filename = $_FILES['image'] ['name'];
	    // $tempname = $_FILES['image'] ['tmp_name'];
	    // $image = "upload/" .$filename;
	    // move_uploaded_file($tempname, $image);

  	  $query ="UPDATE indexlogo3 SET p1 = '$p1', p2 = '$p2', p3 = '$p3', p4 = '$p4', pt1 = '$pt1', pt2 = '$pt2', pt3 = '$pt3', pt4 = '$pt4' where id=$id";
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
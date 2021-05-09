<?php include "session.php" ?>

<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From fromindex where id=$id";
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
}
?>


<?php include "header.php" ?> 
<?php $thisPage="Fromindexupdate.php"; ?>
<?php include "sidebar.php" ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<section class="content-header">
	    <div class="container-fluid">
	        <div class="row mb-2">
	    	    <div class="col-sm-6">
	            	<h1>from index</h1>
	          	</div>
	          	<div class="col-sm-6">
	            	<ol class="breadcrumb float-sm-right">
	              		<li class="breadcrumb-item"><a href="#">Home</a></li>
	              		<li class="breadcrumb-item active">fromindex content Manage</li>
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
			                    	<label>Title</label>
			                    	<input type="text" class="form-control" id="exampleInputEmail1" name="fh" value="<?php echo $user['fh'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>Title 2</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="ft" value="<?php echo $user['ft'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>Title 3</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="fb" value="<?php echo $user['fb'] ?>">
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

  	   	$fh = $_POST['fh'];
	    $ft = $_POST['ft'];
	    $fb = $_POST['fb'];
	    // $filename = $_FILES['image'] ['name'];
	    // $tempname = $_FILES['image'] ['tmp_name'];
	    // $image = "upload/" .$filename;
	    // move_uploaded_file($tempname, $image);

  	  $query ="UPDATE fromindex SET fh = '$fh', ft = '$ft', fb = '$fb' where id=$id";
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
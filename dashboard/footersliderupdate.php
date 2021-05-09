<?php include "session.php" ?>

<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From footerslider where id=$id";
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
}
?>


<?php include "header.php" ?> 
<?php $thisPage="footersliderupdate.php"; ?>
<?php include "sidebar.php" ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<section class="content-header">
	    <div class="container-fluid">
	        <div class="row mb-2">
	    	    <div class="col-sm-6">
	            	<h1> Slider Footer</h1>
	          	</div>
	          	<div class="col-sm-6">
	            	<ol class="breadcrumb float-sm-right">
	              		<li class="breadcrumb-item"><a href="#">Home</a></li>
	              		<li class="breadcrumb-item active"> Slider Footer Manage</li>
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
			                    	<input type="text" class="form-control" id="exampleInputEmail1" name="s1" value="<?php echo $user['s1'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>Title2</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="s2" value="<?php echo $user['s2'] ?>">
			                  	</div>
			                  		<div class="form-group">
			                    	<label>Title3</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="s3" value="<?php echo $user['s3'] ?>">
			                  	</div>
			                  		<div class="form-group">
			                    	<label>Title4</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="s4" value="<?php echo $user['s4'] ?>">
			                  	</div>
			                  		<div class="form-group">
			                    	<label>Title5</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="s5" value="<?php echo $user['s5'] ?>">
			                  	</div>
			                  		<div class="form-group">
			                    	<label>Title6</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="s6" value="<?php echo $user['s6'] ?>">
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

  	   	$s1 = $_POST['s1'];
	    $s2 = $_POST['s2'];
	    $s3 = $_POST['s3'];
	    $s4 = $_POST['s4'];
	    $s5 = $_POST['s5'];
	    $s6 = $_POST['s6'];
	    // $filename = $_FILES['image'] ['name'];
	    // $tempname = $_FILES['image'] ['tmp_name'];
	    // $image = "upload/" .$filename;
	    // move_uploaded_file($tempname, $image);

  	  $query ="UPDATE footerslider SET s1 = '$s1', s2 = '$s2', s3 = '$s3', s4 = '$s4', s5 = '$s5', s6 = '$s6'where id=$id";
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
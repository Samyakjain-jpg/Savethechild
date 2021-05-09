<?php include "session.php" ?>

<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From indexslider where id=$id";
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
}
?>


<?php include "header.php" ?> 
<?php $thisPage="Footersliderupdatefooter.php"; ?>
<?php include "sidebar.php" ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<section class="content-header">
	    <div class="container-fluid">
	        <div class="row mb-2">
	    	    <div class="col-sm-6">
	            	<h1>Index Slider Footer</h1>
	          	</div>
	          	<div class="col-sm-6">
	            	<ol class="breadcrumb float-sm-right">
	              		<li class="breadcrumb-item"><a href="#">Home</a></li>
	              		<li class="breadcrumb-item active">Index Slider Footer Manage</li>
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
			                    	<input type="text" class="form-control" id="exampleInputEmail1" name="title1" value="<?php echo $user['title1'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>Title2</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="title2" value="<?php echo $user['title2'] ?>">
			                  	</div>
			                  		<div class="form-group">
			                    	<label>Title3</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="title3" value="<?php echo $user['title3'] ?>">
			                  	</div>
			                  		<div class="form-group">
			                    	<label>Heading1</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="heading1" value="<?php echo $user['heading1'] ?>">
			                  	</div>
			                  		<div class="form-group">
			                    	<label>Heading2</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="heading2" value="<?php echo $user['heading2'] ?>">
			                  	</div>
			                  		<div class="form-group">
			                    	<label>Heading3</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="heading3" value="<?php echo $user['heading3'] ?>">
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

  	   	$title1 = $_POST['title1'];
	    $title2 = $_POST['title2'];
	    $title3 = $_POST['title3'];
	    $heading1 = $_POST['heading1'];
	    $heading2 = $_POST['heading2'];
	    $heading3 = $_POST['heading3'];
	    // $filename = $_FILES['image'] ['name'];
	    // $tempname = $_FILES['image'] ['tmp_name'];
	    // $image = "upload/" .$filename;
	    // move_uploaded_file($tempname, $image);

  	  $query ="UPDATE indexslider SET title1 = '$title1', title2 = '$title2', title3 = '$title3', heading1 = '$heading1', heading2 = '$heading2', heading3 = '$heading3'where id=$id";
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
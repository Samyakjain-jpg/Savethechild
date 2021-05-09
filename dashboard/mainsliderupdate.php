<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From indexmainslider where id=$id";
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
}
?>


<?php include "session.php" ?>
<?php include "header.php" ?>
<?php $thisPage="mainsliderupdate.php"; ?>
<?php include "sidebar.php" ?>
<br><br><br>

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
		          				<div class="form-group">
			                    	<label>Title 1</label>
			                    	<input type="text" class="form-control" id="exampleInputEmail1" name="ih1" value="<?php echo $user['ih1'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>Title2</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="ih2" value="<?php echo $user['ih2'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>Title3</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="ih3" value="<?php echo $user['ih3'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>HTitle1</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="it1" value="<?php echo $user['it1'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>HTitle2</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="it2" value="<?php echo $user['it2'] ?>">
			                  	</div>
			                  	<div class="form-group">
			                    	<label>HTitle3</label>
			                    	<input type="text" class="form-control" id="exampleInputPassword1" name="it3" value="<?php echo $user['it3'] ?>">
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

  	   	$ih1= $_POST['ih1'];
	    $ih2 =$_POST['ih2'];
	    $ih3 =$_POST['ih3'];
	    $it1 =$_POST['it1'];
	    $it2 =$_POST['it2'];
	    $it3 =$_POST['it3'];
	    // $filename = $_FILES['image'] ['name'];
	    // $tempname = $_FILES['image'] ['tmp_name'];
	    // $image = "upload/" .$filename;
	    // move_uploaded_file($tempname, $image);

  	  $query ="UPDATE indexmainslider SET ih1 = '$ih1' , ih2 = '$ih2' , ih3 = '$ih3' , it1 = '$it1' , it2 = '$it2', it3 = '$it3' where id=$id";
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
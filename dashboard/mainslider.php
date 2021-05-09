 <?php include "session.php" ?>

<?php include "header.php" ?>
<?php $thisPage="MainSlider"; ?>
<?php include "sidebar.php" ?>
<br><br><br>
 <section class="content">
	    <div class="row">
	        <div class="col-2">
	        </div>
	        <div class="col-10">
	        	<div class="card">
		            <div class="card-header">
		              <h3 class="card-title">Would you like to update..</h3>
		            </div>
		            <!-- /.card-header -->
		            <div class="card-body">
		              <table id="example1" class="table table-bordered table-striped table-responsive">
		              	<thead>
		                <tr>
		                  <th>ID</th>
		                  <th>Image1</th>
		                  <th>Image2</th>
		                  <th>Image3</th>
		                  <th>Title1</th>
		                  <th>Title2</th>
		                  <th>Title3</th>
		                  <th>Content Heading1</th>
		                  <th>Content Heading2</th>
		                  <th>Content Heading3</th>
		                  <th>Action</th>
		                </tr>
		                </thead>
		                <tbody>
		              	<?php

					    	include ('dbcon.php');

					        $q = "select * from indexmainslider";
					        $query = mysqli_query($con, $q);
					       

					        while ($result = mysqli_fetch_array($query)) {
					       	
					    ?>
				        <tr>
				        	   <td><?php echo $result['id']?></td>	
				        	<td><img src="<?php echo $result['image1']?>" width="200" height="200"><br><br>
				        		<form method="post" enctype="multipart/form-data">
					 	<input type="hidden" name="id" value="<?php echo $result['id']?>">	
					 			<input type="file" name="image1">
					 			<br><input type="submit" name="update1" value="update">
					 		    </form>
				        	  <td><img src="<?php echo $result['image2']?>" width="200" height="200"><br>
						    	<br>
					 			<form method="post" enctype="multipart/form-data">
					 			<input type="hidden" name="id" value="<?php echo $result['id']?>">	
					 			<input type="file" name="image2">
					 			<br><input type="submit" name="update2" value="update">
					 		    </form>
						    </td>
				        	  <td><img src="<?php echo $result['image3']?>" width="200" height="200"><br>
						    	<br>
					 			<form method="post" enctype="multipart/form-data">
					 			<input type="hidden" name="id" value="<?php echo $result['id']?>">	
					 			<input type="file" name="image3">
					 			<br><input type="submit" name="update3" value="update">
					 		    </form>
						    <td><?php echo $result['ih1']?></td>
						    <td><?php echo $result['ih2']?></td>	
						    <td><?php echo $result['ih3']?></td>	
						    <td><?php echo $result['it1']?></td>	
						    <td><?php echo $result['it2']?></td>
						    <td><?php echo $result['it3']?></td>
						 	<br>
					 			
						    </td>
						    <td><a href="mainsliderupdate.php?id=<?php echo $result['id'];?>"><button type="button" class="btn  btn-primary">Update</button></a></td>	
						</tr>

						<?php
							}
						?>
						</tbody>
		              </table>
		            </div>
            		<!-- /.card-body -->
		        </div>
		        <!-- /.card -->
	        </div>
	    </div>
	</section>

</div>



<?php

  if(isset($_POST['update1'])){


	    $filename1 = $_FILES['image1'] ['name'];
	    $tempname1 = $_FILES['image1'] ['tmp_name'];
	    $image1 = "upload/" .$filename1;
	    move_uploaded_file($tempname1, $image1);


	    $query = "UPDATE indexmainslider SET image1 = '$image1' ";
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


<?php
	include "dbcon.php";

  if(isset($_POST['update2'])){

	    $filename2 = $_FILES['image2'] ['name'];
	    $tempname2 = $_FILES['image2'] ['tmp_name'];
	    $image2 = "upload/" .$filename2;
	    move_uploaded_file($tempname2, $image2);


	    $query = "UPDATE indexmainslider SET image2 = '$image2' ";
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



<?php
// include "dbcon.php";

  if(isset($_POST['update3'])){

	    $filename3 = $_FILES['image3'] ['name'];
	    $tempname3 = $_FILES['image3'] ['tmp_name'];
	    $image3 = "upload/" .$filename3;
	    move_uploaded_file($tempname3, $image3);


	    $query = "UPDATE indexmainslider SET image3 = '$image3' ";
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
<?php include "footer.php" ?>
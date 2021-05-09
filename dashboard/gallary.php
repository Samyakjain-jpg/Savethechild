<?php include "session.php" ?>

<?php include "header.php" ?>
<?php $thisPage="Gallary"; ?>
<?php include "sidebar.php" ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallary</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gallary</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Would you like to update Gallary..</h3>
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
                      <th>Image4</th>
                      <th>Image5</th>
                      <th>Image6</th>
                      <th>Image7</th>
                      <th>Image8</th>
                      <th>Image9</th>
                      <th>Image10</th>
                      <th>Image11</th>
                      <th>Image12</th>
                      <th>Heading1</th>
                      <th>Heading2</th>
                      <th>Heading3</th>
                      <th>Heading4</th>
                      <th>Heading5</th>
                      <th>Heading6</th>
                      <th>Heading7</th>
                      <th>Heading8</th>
                      <th>Heading9</th>
                      <th>Heading10</th>
                      <th>Heading11</th>
                      <th>Heading12</th>
                      <th>Heading13</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                include ('dbcon.php');

                  $q = "select * from gallary";
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
                    <td><img src="<?php echo $result['image4']?>" width="200" height="200"><br>
                  <br>
                <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $result['id']?>">  
                <input type="file" name="image4">
                <br><input type="submit" name="update4" value="update">
                  </form>
                    <td><img src="<?php echo $result['image5']?>" width="200" height="200"><br>
                  <br>
                <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $result['id']?>">  
                <input type="file" name="image5">
                <br><input type="submit" name="update5" value="update">
                  </form>
                    <td><img src="<?php echo $result['image6']?>" width="200" height="200"><br><br>
                    <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $result['id']?>">  
                <input type="file" name="image6">
                <br><input type="submit" name="update6" value="update">
                  </form>
                    <td><img src="<?php echo $result['image7']?>" width="200" height="200"><br><br>
                    <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $result['id']?>">  
                <input type="file" name="image7">
                <br><input type="submit" name="update7" value="update">
                  </form>
                    <td><img src="<?php echo $result['image8']?>" width="200" height="200"><br><br>
                    <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $result['id']?>">  
                <input type="file" name="image8">
                <br><input type="submit" name="update8" value="update">
                  </form>
                    <td><img src="<?php echo $result['image9']?>" width="200" height="200"><br><br>
                    <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $result['id']?>">  
                <input type="file" name="image9">
                <br><input type="submit" name="update9" value="update">
                  </form>
                    <td><img src="<?php echo $result['image10']?>" width="200" height="200"><br><br>
                    <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $result['id']?>">  
                <input type="file" name="image10">
                <br><input type="submit" name="update10" value="update">
                  </form>
                    <td><img src="<?php echo $result['image11']?>" width="200" height="200"><br><br>
                    <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $result['id']?>">  
                <input type="file" name="image11">
                <br><input type="submit" name="update11" value="update">
                  </form>
                    <td><img src="<?php echo $result['image12']?>" width="200" height="200"><br><br>
                    <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $result['id']?>">  
                <input type="file" name="image12">
                <br><input type="submit" name="update12" value="update">
                  </form>
      
                <td><?php echo $result['h1']?></td>  
                <td><?php echo $result['h2']?></td>
                <td><?php echo $result['h3']?></td>
                <td><?php echo $result['h4']?></td>
                <td><?php echo $result['h5']?></td>
                <td><?php echo $result['h6']?></td>
                <td><?php echo $result['h7']?></td>
                <td><?php echo $result['h8']?></td>
                <td><?php echo $result['h9']?></td>
                <td><?php echo $result['h10']?></td>
                <td><?php echo $result['h11']?></td>
                <td><?php echo $result['h12']?></td>
                <td><?php echo $result['h13']?></td>
                <td><a href="gallaryupdate.php?id=<?php echo $result['id'];?>"><button type="button" class="btn  btn-primary">Update</button></a></td> 
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


      $query = "UPDATE gallary SET image1 = '$image1' ";
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


      $query = "UPDATE gallary SET image2 = '$image2' ";
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


      $query = "UPDATE gallary SET image3 = '$image3' ";
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

  if(isset($_POST['update4'])){

      $filename4 = $_FILES['image4'] ['name'];
      $tempname4 = $_FILES['image4'] ['tmp_name'];
      $image4 = "upload/" .$filename4;
      move_uploaded_file($tempname4, $image4);


      $query = "UPDATE gallary SET image4 = '$image4' ";
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

  if(isset($_POST['update5'])){

      $filename5 = $_FILES['image5'] ['name'];
      $tempname5 = $_FILES['image5'] ['tmp_name'];
      $image5 = "upload/" .$filename5;
      move_uploaded_file($tempname5, $image5);


      $query = "UPDATE gallary SET image5 = '$image5' ";
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

  if(isset($_POST['update6'])){

      $filename6 = $_FILES['image6'] ['name'];
      $tempname6 = $_FILES['image6'] ['tmp_name'];
      $image6 = "upload/" .$filename6;
      move_uploaded_file($tempname6, $image6);


      $query = "UPDATE gallary SET image6 = '$image6' ";
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

  if(isset($_POST['update7'])){

      $filename7 = $_FILES['image7'] ['name'];
      $tempname7 = $_FILES['image7'] ['tmp_name'];
      $image7 = "upload/" .$filename7;
      move_uploaded_file($tempname7, $image7);


      $query = "UPDATE gallary SET image7 = '$image7' ";
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

  if(isset($_POST['update8'])){

      $filename8 = $_FILES['image8'] ['name'];
      $tempname8 = $_FILES['image8'] ['tmp_name'];
      $image8 = "upload/" .$filename8;
      move_uploaded_file($tempname8, $image8);


      $query = "UPDATE gallary SET image8 = '$image8' ";
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

  if(isset($_POST['update9'])){

      $filename9 = $_FILES['image9'] ['name'];
      $tempname9 = $_FILES['image9'] ['tmp_name'];
      $image9 = "upload/" .$filename9;
      move_uploaded_file($tempname9, $image9);


      $query = "UPDATE gallary SET image9 = '$image9' ";
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

  if(isset($_POST['update10'])){

      $filename10 = $_FILES['image10'] ['name'];
      $tempname10 = $_FILES['image10'] ['tmp_name'];
      $image10 = "upload/" .$filename10;
      move_uploaded_file($tempname10, $image10);


      $query = "UPDATE gallary SET image10 = '$image10' ";
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

  if(isset($_POST['update11'])){

      $filename11 = $_FILES['image11'] ['name'];
      $tempname11 = $_FILES['image11'] ['tmp_name'];
      $image11 = "upload/" .$filename11;
      move_uploaded_file($tempname11, $image11);


      $query = "UPDATE gallary SET image11 = '$image11' ";
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

  if(isset($_POST['update12'])){

      $filename12 = $_FILES['image12'] ['name'];
      $tempname12 = $_FILES['image12'] ['tmp_name'];
      $image12 = "upload/" .$filename12;
      move_uploaded_file($tempname12, $image12);


      $query = "UPDATE gallary SET image12 = '$image12' ";
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
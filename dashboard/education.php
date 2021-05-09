<?php include "session.php" ?>

<?php include "header.php" ?>
<?php $thisPage="Education"; ?>
<?php include "sidebar.php" ?>

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
              <li class="breadcrumb-item active">Education</li>
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
                  <h3 class="card-title">Would you like to update Education..</h3>
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
                      <th>Heading1</th>
                      <th>Heading2</th>
                      <th>Heading3</th>
                      <th>Heading4</th>
                      <th>Heading5</th>
                      <th>Heading6</th>
                      <th>Heading7</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                include ('dbcon.php');

                  $q = "select * from education";
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
                    <td><img src="<?php echo $result['image4']?>" width="200" height="200"><br>
                  <br>
                <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $result['id']?>">  
                <input type="file" name="image4">
                <br><input type="submit" name="update4" value="update">
                  </form>
      
                <td><?php echo $result['h1']?></td>  
                <td><?php echo $result['h2']?></td>
                <td><?php echo $result['h3']?></td>
                <td><?php echo $result['h4']?></td>
                <td><?php echo $result['h5']?></td>
                <td><?php echo $result['h6']?></td>
                <td><?php echo $result['h7']?></td>
                <td><a href="educationupdate.php?id=<?php echo $result['id'];?>"><button type="button" class="btn  btn-primary">Update</button></a></td> 
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


      $query = "UPDATE education SET image1 = '$image1' ";
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


      $query = "UPDATE education SET image2 = '$image2' ";
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


      $query = "UPDATE education SET image3 = '$image3' ";
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


      $query = "UPDATE education SET image4 = '$image4' ";
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
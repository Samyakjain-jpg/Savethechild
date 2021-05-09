<?php   
include('dbcon.php'); 
  

  if(isset($_POST['submit'])){

     $name= $_POST['name']; 
     $fname= $_POST['fname']; 
     $mname= $_POST['mname']; 
     $mobile= $_POST['mobile']; 
     $address= $_POST['address']; 

$q ="INSERT INTO student1 (name, fname, mname, mobile, address) VALUES ('$name','$fname','$mname','$mobile','$address')";

   $query =mysqli_query($con, $q);

    if($query){
      ?>
      <script>
        alert("YOUR FROM IS SUBMITTED :)")
      </script>
      <?php
    }else{
      ?>
      <script>
        alert("YOUR FROM IS NOT SUBMITTED")
      </script>
      <?php
    }


}
?>


<?php include "header.php"; ?>

<?php include "sidebar.php"; ?>
<br><br>


   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-3">
          </div>
          <div class="col-md-7">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Student</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="form-group">
                <form method="post">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                  </div>
                 <div class="form-group">
                    <label>Father Name</label>
                    <input type="text" class="form-control" placeholder="Father Name" name="fname">
                  </div>
                   <div class="form-group">
                    <label>Mother Name</label>
                    <input type="text" class="form-control" placeholder="Mother Name" name="mname">
                  </div>
                   <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" class="form-control" placeholder="Mobile Number" name="mobile">
                  </div>
                   <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Address" name="address">
                  </div>
                 
                   <input type="submit" name="submit" value="Submit" style="color: black;
                    background-color: white;">
                  </form>
            </div>
        </div>
      </div>
   </div>
</section>
    <!-- /.card-body -->

           

<br><br>
<?php include "footer.php"; ?>
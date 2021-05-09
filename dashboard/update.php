<?php

include "header.php";
include "sidebar.php";
?>


 <?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From student1 where id=$id";
$fire =mysqli_query($con,$query) or die("can not fetch the data.".mysqli_error($con));

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
$user['name'];
$user['fname'];
$user['mname'];
$user['mobile'];
$user['address'];

}
?>

<!--update--->
<?php
  
  if(isset($_POST['update'])){

       $name = $_POST['name'];
       $fname = $_POST['fname'];
       $mname = $_POST['mname'];
       $mobile = $_POST['mobile'];
       $address = $_POST['address'];

      $query ="UPDATE student1 SET name = '$name',fname = '$fname', mname = '$mname', mobile = '$mobile', address = '$address' where id=$id";
      $fire = mysqli_query($con, $query) or die("can not fetch the data.".mysqli_error($con));

      //if($fire)echo "data updated successfully.";
      if($fire) header("Location:show.php");

  } 



?>   
     <!-- form start -->
            <div class="row">
         <div class="col-md-2"></div>
      <div class="col-md-10">
              <div class="form-group">
                <form method="post">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name"  value="<?php echo $user['name'] ?>">
                  </div>
                 <div class="form-group">
                    <label>Father Name</label>
                    <input type="text" class="form-control" placeholder="Father Name" name="fname"  value="<?php echo $user['fname'] ?>">
                  </div>
                   <div class="form-group">
                    <label>Mother Name</label>
                    <input type="text" class="form-control" placeholder="Mother Name" name="mname"  value="<?php echo $user['mname'] ?>">
                  </div>
                   <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" class="form-control" placeholder="Mobile Number" name="mobile"  value="<?php echo $user['mobile'] ?>">
                  </div>
                   <div class="form-group">
                    <label>Address</label>  
                    <input type="text" class="form-control" placeholder="Address" name="address"  value="<?php echo $user['address'] ?>">
                  </div>
                 
                   <input type="submit" name="update" value="update" style="color: black;
                    background-color: white;">
                  </form>
            </div>
          </div>
        </div>
<?php
include ('dbcon.php');

if (isset($_POST['submit']))
{

         $name=$_POST['name'];
         $mobile=$_POST['mobile'];
         $place=$_POST['place'];
         $city=$_POST['city'];
         $cname=$_POST['cname'];
         $cage=$_POST['cage'];
         $gender=$_POST['gender'];

         $q="INSERT INTO form (name,mobile,place,city,cname,cage,gender) VALUES ('$name','$mobile','$place','$city','$cname','$cage','$gender')";

         $query=mysqli_query($con,$q);
}
?>


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 -->        
 <?php include "header.php" ?>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


  <div id="head">
            <div class="line">
               <h1><b>Please Fill a Form</b></h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
         <div class="container">

   <h1 style="color:white; font-size:50px;
    font-family: cursive; color:rgba(0, 30, 34, 0.85);"><center >Candidate Detail</center></h1><br><br>
  <form method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Candidate Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Ex:Samyak">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Candidate Mobile Number</label>
      <input type="text" name="mobile" class="form-control" id="inputPassword4" placeholder="+91 ">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="place" class="form-control" id="inputAddress" placeholder="1234 Main St Apartment, studio, or floor">
  </div>
  <div class="form-group">
    <label for="inputAddress2">City</label>
    <input type="text" name="city" class="form-control" id="inputAddress2" placeholder="City">
  </div>
   <h1 style="color:white; font-size:50px;
    font-family: cursive; color:rgba(0, 30, 34, 0.85);"><center >Child Detail</center></h1><br><br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Child Name</label>
      <input type="text" name="cname" class="form-control" placeholder="Child Name">
    </div>
    <div class="form-group col-md-4">
       <label for="inputCity">Child Age</label>
       <input type="text" name="cage" class="form-control" placeholder="Child Age">
    </div>
    <div class="form-group col-md-2">
      <label style="font-size: 21px;">Gender</label><br>
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">Female

    </div>
  </div>
<!--   <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div> -->
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <!-- <input type="submit" name="" name="submit" value="submit"> -->
</form>
</div>
            </div>
         </div>
         <!-- GALLERY -->	
         <div id="third-block">
            <div class="line">
               <h2>PROTECTING INDIA'S KIDS.</h2>
               <p class="subtitile">Be the voice so children everywhere has  a brighter future.
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img src="img/w1.jpg">      
                     <p class="subtitile">Sometimes a lot can be done with very little efforts.Too many children go to bed hungry night after night.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/w2.jpg">      
                     <p class="subtitile">There are 8 million children live in the streets, railway platform and bus stations, homeless and without hope

                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/w3.jfif">      
                     <p class="subtitile">There are 35 million orphans in india they are hungry, parents less, alone, scared, homeless, hopeless.

                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/w4.jpg">      
                     <p class="subtitile">Too many children are separated from their families during a disaster.
                     </p>
                  </div>
               </div>
            </div>
         </div>
     <!--     <div id="fourth-block">
            <div class="line">
               <div id="news-carousel" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2>You Can Trust Our Commitment to Children</h2>
                     <p class="s-12 m-12 l-8 center">You believe, as we do, that every child deserves a future. Every last child.The world has made great progress for children. More children are alive and thriving today than ever before.
                     </p>
                  </div>
                  <div class="item">
                     <h2>You can Share to Save the Children’s Values</h2>
                     <p class="s-12 m-12 l-8 center">We’re passionately committed to one goal: Giving all children the best chance for the future they deserve – a healthy start in life, the opportunity to learn and protection from harm.
                     </p>
                  </div>
                  <div class="item">
                     <h2>But here's the problem.</h2>
                     <p class="s-12 m-12 l-8 center">Millions of children in the india and around the world still aren't getting what they deserve. We're talking about children in need. Dying, when the world knows how to save them. Vulnerable children in poverty. Denied an education. Forced to flee violence. Orphaned, abused, abandoned. Children with no reason to smile. No hope for the future.
                     </p>
                  </div>
               </div>
            </div>
         </div> -->
         <?php include "footerslider.php" ?>
      </section>
       <!-- FOOTER -->   
<?php include "footer.php" ?>
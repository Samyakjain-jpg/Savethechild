<?php

        include ('dashboard/dbcon.php');

        $q = "select * from education";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?>
<?php include "header.php"; ?>

   <div id="head">
            <div class="line">
               <h1><?php echo $result['h1']?></h1>
            </div>
         </div>



         <!-- GALLERY -->	
         <div id="third-block">
            <div class="line">
               <h2><?php echo $result['h2']?></h2>
               <p class="subtitile"><?php echo $result['h3']?>
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image1']?>">      
                     <p class="subtitile"><?php echo $result['h4']?>
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image2']?>">      
                     <p class="subtitile"><?php echo $result['h5']?>
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image3']?>">      
                     <p class="subtitile"><?php echo $result['h6']?>
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image4']?>">      
                     <p class="subtitile"><?php echo $result['h7']?>
                     </p>
                  </div>
               </div>
            </div>
         </div>

       <!--   <div id="fourth-block">
            <div class="line">
               <div id="news-carousel" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2>Ensuring ALL children are healthy and well-nourished</h2>
                     <p class="s-12 m-12 l-8 center">We work with both the public and private health sector and with caregivers to ensure that children have sustained access to health facilities and are provided with appropriate care beyond the learning environment setting.
                     </p>
                  </div>
                  <div class="item">
                     <h2>Uninterrupted learning</h2>
                     <p class="s-12 m-12 l-8 center">We support the delivery of services such as psychosocial support to ensure uninterrupted learning at all times. We also provide teaching and learning materials such as back-to-school kits, hygiene kits, books, and toys to support children even in times of crisis.
                     </p>
                  </div>
                  <div class="item">
                     <h2>Supporting early childhood and school teachers</h2>
                     <p class="s-12 m-12 l-8 center">Our health and nutrition programs for school-aged children ensures that basic health services are provided, and that they are able to practice hygiene with safe water and child-friendly sanitation and hygiene facilities. We continuously develop teaching and learning materials with age-appropriate and accurate health and nutrition information, and train teachers on utilizing them.
                     </p>
                  </div>
               </div>
            </div>
         </div> -->
 <?php include "footerslider.php"?>
      </section>
       <!-- FOOTER -->   

<?php include "footer.php"; ?>
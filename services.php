<?php

        include ('dashboard/dbcon.php');

        $q = "select * from someservice";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?> 
<?php include "header.php"; ?>

 <div id="head">
            <div class="line">
               <h1><?php echo $result['h1']?></h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
               <div class="margin">
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="fa fa-space-shuttle" aria-hidden="true" style="font-size: 31px; color: white;"></i>
                        <h3>space</h3>
                        <p><?php echo $result['h2']?>
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="fa fa-child" aria-hidden="true" style="color: white; font-size:31px;"></i>
                        <h3>happy child</h3>
                        <p><?php echo $result['h3']?>
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="icon-heart icon2x"></i>
                        <h3>Intuitive</h3>
                        <p><?php echo $result['h4']?>
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                         <i class="fa fa-futbol-o" aria-hidden="true" style="font-size: 40px; color: white;"></i>
                        <h3>sports</h3>
                        <p><?php echo $result['h5']?>
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                       <i class="fa fa-trophy" aria-hidden="true" style="font-size: 40px; color: white;"></i>
                        <h3>success</h3>
                        <p><?php echo $result['h6']?>
                        </p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4">
                     <div class="content-block margin-bottom">
                        <i class="fa fa-medkit" aria-hidden="true" style="font-size: 40px; color: white;"></i>
                        <h3>first aid kit</h3>
                        <p><?php echo $result['h7']?>  
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- GALLERY -->	
         <div id="third-block">
            <div class="line">
               <h2><?php echo $result['h8']?></h2>
               <p class="subtitile"><?php echo $result['h9']?>
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image1']?>">      
                     <p class="subtitile"><?php echo $result['h10']?>
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image2']?>">      
                     <p class="subtitile"><?php echo $result['h11']?>
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image3']?>">      
                     <p class="subtitile"><?php echo $result['h12']?>
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image4']?>">      
                     <p class="subtitile"><?php echo $result['h13']?>
                     </p>
                  </div>
               </div>
            </div>
         </div>
       <!--   <div id="fourth-block">
            <div class="line">
               <div id="news-carousel" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2>Children need nutritious food to grow.</h2>
                     <p class="s-12 m-12 l-8 center">Together, you and your sponsored child will start a special relationship that changes both your lives. Because of you, your sponsored child will have what every child deserves: a future.
                     </p>
                  </div>
                  <div class="item">
                     <h2>The Child, believes her child deserves future.</h2>
                     <p class="s-12 m-12 l-8 center">Child sponsorship is a way of giving that connects one compassionate person (like you!) with one child in need. Sponsoring a child gives her the chance to grow up healthy, educated and safe – forever changing the course of her life and future. And you just might find that it changes you, too.
                     </p>
                  </div>
                  <div class="item">
                     <h2>Join the movement we are the voice of children</h2>
                     <p class="s-12 m-12 l-8 center">The earliest years are the most important for a child’s development, and missing out on learning — and the key nutrition many find only at school — could have a devastating impact on their mental and physical health and growth.
                     </p>
                  </div>
               </div>
            </div>
         </div> -->
         <?php include "footerslider.php"?>
      </section>
      <!-- FOOTER -->   

 <?php include "footer.php"; ?>
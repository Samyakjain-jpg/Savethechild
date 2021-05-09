<?php

        include ('dashboard/dbcon.php');

        $q = "select * from indexmainslider";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?>

 <div id="carousel">
            <div id="header-carousel" class="owl-carousel owl-theme">
               <div class="item">
                  <img src="dashboard/<?php echo $result['image1']?>" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2><?php echo $result['ih1']?></h2>
                        </div>
                        <div class="s-12 l-9">
                           <p><?php echo $result['it1']?></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="dashboard/<?php echo $result['image2']?>" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2><?php echo $result['ih2']?></h2>
                        </div>
                        <div class="s-12 l-9">
                           <p><?php echo $result['it2']?></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="dashboard/<?php echo $result['image3']?>" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2><?php echo $result['ih3']?></h2>
                        </div>
                        <div class="s-12 l-9">
                           <p><?php echo $result['it3']?></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
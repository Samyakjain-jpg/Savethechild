<?php

        include ('dashboard/dbcon.php');

        $q = "select * from footerslider";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?> 
     <div id="fourth-block">
            <div class="line">
               <div id="news-carousel" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2><?php echo $result['s1']?></h2>
                     <p class="s-12 m-12 l-8 center"><?php echo $result['s2']?>
                     </p>
                  </div>
                  <div class="item">
                     <h2><?php echo $result['s3']?></h2>
                     <p class="s-12 m-12 l-8 center"><?php echo $result['s4']?>
                     </p>
                  </div>
                  <div class="item">
                     <h2><?php echo $result['s5']?></h2>
                     <p class="s-12 m-12 l-8 center"><?php echo $result['s6']?>
                     </p>
                  </div>
               </div>
            </div>
         </div>
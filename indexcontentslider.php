<?php

        include ('dashboard/dbcon.php');

        $q = "select * from indexslider";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?>
  <div id="fourth-block">
            <div class="line">
               <div id="news-carousel" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2><?php echo $result['title1']?></h2>
                     <p class="s-12 m-12 l-8 center"><?php echo $result['heading1']?>
                     </p>
                  </div>
                  <div class="item">
                     <h2><?php echo $result['title2']?></h2>
                     <p class="s-12 m-12 l-8 center"><?php echo $result['heading2']?>
                     </p>
                  </div>
                  <div class="item">
                     <h2><?php echo $result['title3']?></h2>
                     <p class="s-12 m-12 l-8 center"><?php echo $result['heading3']?>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php

        include ('dashboard/dbcon.php');

        $q = "select * from indextitle ,indexlogo3";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?>
  <!-- FIRST BLOCK -->
         <div id="first-block">
            <div class="line">
               <h2><?php echo $result['title1']?></h2>
               <p class="subtitile"><?php echo $result['title2']?>
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                    <i class="fa fa-book" aria-hidden="true" style="font-size: 29px;"></i>
                     <h3><?php echo $result['p1']?></h3>
                     <p><?php echo $result['pt1']?></p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                    <i class="fa fa-university" aria-hidden="true" style="font-size: 31px;"></i>
                     <h3><?php echo $result['p2']?></h3>
                     <p><?php echo $result['pt2']?></p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 31px;"></i>
                     <h3><?php echo $result['p3']?></h3>
                     <p><?php echo $result['pt3']?></p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="fa fa-phone" aria-hidden="true" style="font-size: 31px;"></i>
                     <h3><?php echo $result['p4']?></h3>
                     <p><?php echo $result['pt4']?></p>
                  </div>
               </div>
            </div>
         </div>
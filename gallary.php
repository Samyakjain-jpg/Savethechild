<?php

        include ('dashboard/dbcon.php');

        $q = "select * from gallary";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?> 
<?php include "header.php"; ?>

<div id="head">
            <div class="line">
               <h1><?php echo $result['h1']?></h1>
               <!-- <p>Our stories paint a picture of the amazing work Save the Child does in the india and around the local and explore some of the biggest issues facing children today.</p> -->
            </div>
         </div>
         <div id="content">
            <div class="line">
               <div class="margin">
                   <div class="s-12 m-6 l-4">
                      <img src="dashboard/<?php echo $result['image1']?>">      
                      <p class="subtitile"><?php echo $result['h2']?>
                      </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="dashboard/<?php echo $result['image2']?>">      
                      <p class="subtitile"><?php echo $result['h3']?>
                      </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="dashboard/<?php echo $result['image3']?>">      
                      <p class="subtitile"><?php echo $result['h4']?>
                      </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="dashboard/<?php echo $result['image4']?>">      
                      <p class="subtitile"><?php echo $result['h5']?>
                      </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="dashboard/<?php echo $result['image5']?>">      
                      <p class="subtitile"><?php echo $result['h6']?>
                      </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="dashboard/<?php echo $result['image6']?>">      
                      <p class="subtitile"><?php echo $result['h7']?>
                      </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="dashboard/<?php echo $result['image7']?>">      
                      <p class="subtitile"><?php echo $result['h8']?>
                      </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="dashboard/<?php echo $result['image8']?>">      
                      <p class="subtitile"><?php echo $result['h9']?>
                      </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="dashboard/<?php echo $result['image9']?>">      
                      <p class="subtitile"><?php echo $result['h10']?>
                      </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="dashboard/<?php echo $result['image10']?>">      
                      <p class="subtitile"><?php echo $result['h11']?>
                      </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="dashboard/<?php echo $result['image11']?>">      
                      <p class="subtitile"><?php echo $result['h12']?>
                      </p>
                   </div>
                   <div class="s-12 m-6 l-4">
                      <img src="dashboard/<?php echo $result['image12']?>">      
                      <p class="subtitile"><?php echo $result['h13']?>
                      </p>
                   </div>
               </div>
            </div>
         </div>


         <?php include "footerslider.php"?>
        <!--  <div id="fourth-block">
            <div class="line">
               <div id="news-carousel" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2>You Can Trust Our Commitment to Children</h2>
                     <p class="s-12 m-12 l-8 center">We’re passionately committed to one goal: Giving all children the best chance for the future they deserve – a healthy start in life, the opportunity to learn and protection from harm.
                     </p>
                  </div>
                  <div class="item">
                     <h2>You Share Save the Children’s Values</h2>
                     <p class="s-12 m-12 l-8 center">You believe, as we do, that every child deserves a future. Every last child.The world has made great progress for children. More children are alive and thriving today than ever before.
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
      </section>
       <!-- FOOTER -->   



<?php include "footer.php"; ?>
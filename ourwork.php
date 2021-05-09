<?php

        include ('dashboard/dbcon.php');

        $q = "select * from ourwork";
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
               <h2><?php echo $result['h2']?>
</h2><br>
               <p class="s-12 m-12 l-8 center"><?php echo $result['h3']?>

               </p>
               <h2><?php echo $result['h4']?>
</h2>
               <p class="s-12 m-12 l-8 center"><?php echo $result['h5']?>



               </p>
            </div>
         </div>
         <!-- GALLERY -->	
         <div id="third-block">
            <div class="line">
               <h2><?php echo $result['h6']?></h2>
               <p class="subtitile"><?php echo $result['h7']?>
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image1']?>">      
                     <p class="subtitile"><?php echo $result['h8']?>
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image2']?>">      
                     <p class="subtitile"><?php echo $result['h9']?>

                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image3']?>">      
                     <p class="subtitile"><?php echo $result['h10']?>

                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image4']?>">      
                     <p class="subtitile"><?php echo $result['h11']?>
                     </p>
                  </div>
               </div>
            </div>
         </div>

<?php include "footerslider.php"?>
      </section>


<?php include "footer.php"; ?>

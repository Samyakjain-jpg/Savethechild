<?php

        include ('dashboard/dbcon.php');

        $q = "select * from journeyindex";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?>  

  <!-- GALLERY --> 	
         <div id="third-block">
            <div class="line">
               <h2><?php echo $result['th']?></h2>
               <p class="subtitile"><?php echo $result['th1']?>

               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image1']?>" alt="alternative text">      
                     <p class="subtitile"><?php echo $result['it1']?> 

                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image2']?>" alt="alternative text">      
                     <p class="subtitile"><?php echo $result['it2']?>
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image3']?>" alt="alternative text">      
                     <p class="subtitile"><?php echo $result['it3']?>
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="dashboard/<?php echo $result['image4']?>" alt="alternative text">      
                     <p class="subtitile"><?php echo $result['it4']?>
                     </p>
                  </div>
               </div>
            </div>
         </div>
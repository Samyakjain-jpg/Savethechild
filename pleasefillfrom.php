<?php

        include ('dashboard/dbcon.php');

        $q = "select * from fromindex";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?>
  <div id="second-block">
            <div class="line">
               <div class="margin-bottom">
                  <div class="margin">
                     <article class="s-12 l-8 center">
                        <h1><?php echo $result['fh']?></h1>
                        <p class="margin-bottom"><?php echo $result['ft']?></p>
                        <a class="button rounded-btn submit-btn s-12 l-4 center" href="http://localhost/samyak%20project/from.php"><?php echo $result['fb']?></a>  			
                     </article>
                  </div>
               </div>
            </div>
         </div>
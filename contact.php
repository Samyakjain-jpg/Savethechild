<?php

        include ('dashboard/dbcon.php');

        $q = "select * from contact";
        $query = mysqli_query($con, $q);
       

        $result = mysqli_fetch_array($query);
?>
<?php include "header.php"; ?>

  <div id="head">
            <div class="line">
               <h1><?php echo $result['h1']?></h1>
            </div>
         </div>
         <div id="content" class="left-align contact-page">
            <div class="line">
               <div class="margin">
                  <div class="s-12 l-6">
                     <h2><?php echo $result['h2']?></h2>
                     <address>
                        <p><i class="icon-home icon"></i><?php echo $result['h3']?></p>
                        <p><i class="icon-home icon"></i><?php echo $result['h4']?></p>
                        <p><i class="icon-globe_black icon"></i><?php echo $result['h5']?></p>
                     </address>
                     <br />
                     <h2>Social</h2>
                     <p><i class="icon-facebook icon"></i> <a href="">Connect Facebook</a></p>
                     <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="">Connect Twitter</a></p>
                  </div>
                  <div class="s-12 l-6">
                       <h2>Contact us</h2>
                     <address>
                        <p><i class="fa fa-address-book-o" aria-hidden="true" style="color: white;"></i><?php echo $result['h6']?></p>
                         <p><i class="fa fa-phone" aria-hidden="true" style="color: white;"></i><?php echo $result['h7']?></p>
                        <p><i class="fa fa-mobile" aria-hidden="true" style="color: white;" ></i><?php echo $result['h8']?></p>
                     </address>
                     <br />
                     <h2>Social</h2>
                     <p><i class="icon-facebook icon"></i> <a href="#">Connect Facebook</a></p>
                     <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="#">Connect Twitter</a></p>
                  </div>
               </div>
            </div>
         </div>
       <!--   
         <div id="fourth-block">
            <div class="line">
               <div id="news-carousel" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2>Ensuring ALL children are healthy and well-nourished</h2>
                     <p class="s-12 m-12 l-8 center">We work with both the public and private health sector and with caregivers to ensure that children have sustained access to health facilities and are provided with appropriate care beyond the learning environment setting.
                     </p>
                  </div>
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
               </div>
            </div>
         </div> -->
         <?php include "footerslider.php" ?>
      </section>
      <!-- FOOTER -->   

<?php include "footer.php"; ?>
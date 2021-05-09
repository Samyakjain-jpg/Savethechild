<?php include "session.php" ?>

<?php include "header.php" ?>
<?php $thisPage="FooterSliderr"; ?>
<?php include "sidebar.php" ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fooetr Slider</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Fooetr Slider</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Would you like to update Fooetr Slider..</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-responsive">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>H_footer1</th>
                      <th>H_footer2</th>
                      <th>H_footer3</th>
                      <th>H_footer4</th>
                      <th>H_footer5</th>
                      <th>H_footer6</th>

                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                include ('dbcon.php');

                  $q = "select * from footerslider";
                  $query = mysqli_query($con, $q);
                 

                  while ($result = mysqli_fetch_array($query)) {
                  
              ?>
                <tr>
                     <td><?php echo $result['id']?></td>
      
                <td><?php echo $result['s1']?></td>
                <td><?php echo $result['s2']?></td>
                <td><?php echo $result['s3']?></td>
                <td><?php echo $result['s4']?></td>
                <td><?php echo $result['s5']?></td>
                <td><?php echo $result['s6']?></td>
                <td><a href="footersliderupdate.php?id=<?php echo $result['id'];?>"><button type="button" class="btn  btn-primary">Update</button></a></td> 
            </tr>

            <?php
              }
            ?>
            </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      </div>
  </section>

</div>


<?php include "footer.php" ?>
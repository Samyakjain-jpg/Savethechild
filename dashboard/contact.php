<?php include "session.php" ?>

<?php include "header.php" ?>
<?php $thisPage="Contact"; ?>
<?php include "sidebar.php" ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact</li>
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
                  <h3 class="card-title">Would you like to update Contact..</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-responsive">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Heading1</th>
                      <th>Heading2</th>
                      <th>Heading3</th>
                      <th>Heading4</th>
                      <th>Heading5</th>
                      <th>Heading6</th>
                      <th>Heading7</th>
                      <th>Heading8</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                include ('dbcon.php');

                  $q = "select * from contact";
                  $query = mysqli_query($con, $q);
                 

                  while ($result = mysqli_fetch_array($query)) {
                  
              ?>
                <tr>
                <td><?php echo $result['id']?></td> 
                <td><?php echo $result['h1']?></td>  
                <td><?php echo $result['h2']?></td>
                <td><?php echo $result['h3']?></td>
                <td><?php echo $result['h4']?></td>
                <td><?php echo $result['h5']?></td>
                <td><?php echo $result['h6']?></td>
                <td><?php echo $result['h7']?></td>
                <td><?php echo $result['h8']?></td>
                <td><a href="contactupload.php?id=<?php echo $result['id'];?>"><button type="button" class="btn  btn-primary">Update</button></a></td> 
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
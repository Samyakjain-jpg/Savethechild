<?php include "session.php" ?>

<?php include "header.php" ?>
<?php $thisPage="Logotitle"; ?>
<?php include "sidebar.php" ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Logo title update</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Logo title update Manage</li>
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
                  <h3 class="card-title">Would you like to update..</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-responsive">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title1</th>
                      <th>Title2</th>
                      <th>Title3</th>
                      <th>Title4</th>
                      <th>PTitle1</th>
                      <th>PTitle2</th>
                      <th>PTitle3</th>
                      <th>PTitle4</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                include ('dbcon.php');

                  $q = "select * from indexlogo3";
                  $query = mysqli_query($con, $q);
                 

                  while ($result = mysqli_fetch_array($query)) {
                  
              ?>
                <tr>
                <td><?php echo $result['id']?></td> 
                <td><?php echo $result['p1']?></td>  
                <td><?php echo $result['p2']?></td>
                <td><?php echo $result['p3']?></td>
                <td><?php echo $result['p4']?></td>
                <td><?php echo $result['pt1']?></td>  
                <td><?php echo $result['pt2']?></td>
                <td><?php echo $result['pt3']?></td>
                <td><?php echo $result['pt4']?></td>
                <td><a href="logotitleupdate.php?id=<?php echo $result['id'];?>"><button type="button" class="btn  btn-primary">Update</button></a></td> 
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
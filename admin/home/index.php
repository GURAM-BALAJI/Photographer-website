<?php
include '../session.php';
include '../includes/header.php'; ?>

<?php include '../includes/navbar.php'; ?>
<?php include '../includes/menubar.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
        </h1>
        <ol class="breadcrumb">
          <li><i class="fa fa-dashboard"></i> Home</li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <?php
        if (isset($_SESSION['error'])) {
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              " . $_SESSION['error'] . "
            </div>
          ";
          unset($_SESSION['error']);
        }
        if (isset($_SESSION['success'])) {
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              " . $_SESSION['success'] . "
            </div>
          ";
          unset($_SESSION['success']);
        }
        ?>

        <!-- /.row -->
        <div class="row">
          <!-- ./col -->
          

         
          <?php if ($admin['gallery_view']) { ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <?php
                  $sql6 = "SELECT gallery_id from gallery";
                  $query6 = $conn->prepare($sql6);;
                  $query6->execute();
                  $results6 = $query6->fetchAll(PDO::FETCH_OBJ);
                  $query = $query6->rowCount();
                  echo "<h3>" . $query . "</h3>";
                  ?>
                  <div class="stat-panel-title text-uppercase">Total gallery</div>
                </div>
                <div class="icon">
                  <i class="fa fa-picture-o"></i>
                </div>
                <a href="../gallery/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          <?php } ?>
           

          <?php if ($admin['video_gallery_view']) { ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <?php
                  $sql6 = "SELECT video_gallery_id from video_gallery";
                  $query6 = $conn->prepare($sql6);;
                  $query6->execute();
                  $results6 = $query6->fetchAll(PDO::FETCH_OBJ);
                  $query = $query6->rowCount();
                  echo "<h3>" . $query . "</h3>";
                  ?>
                  <div class="stat-panel-title text-uppercase">Total video gallery</div>
                </div>
                <div class="icon">
                  <i class="fa fa-youtube"></i>
                </div>
                <a href="../video_gallery/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          <?php } ?>


          <?php if ($admin['team_view']) { ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <?php
                  $sql6 = "SELECT team_id from team";
                  $query6 = $conn->prepare($sql6);;
                  $query6->execute();
                  $results6 = $query6->fetchAll(PDO::FETCH_OBJ);
                  $query = $query6->rowCount();
                  echo "<h3>" . $query . "</h3>";
                  ?>
                  <div class="stat-panel-title text-uppercase">Total team</div>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="../team/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          <?php } ?>


          <?php if ($admin['works_view']) { ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-gray">
                <div class="inner">
                  <?php
                  $sql6 = "SELECT works_id from works";
                  $query6 = $conn->prepare($sql6);;
                  $query6->execute();
                  $results6 = $query6->fetchAll(PDO::FETCH_OBJ);
                  $query = $query6->rowCount();
                  echo "<h3>" . $query . "</h3>";
                  ?>
                  <div class="stat-panel-title text-uppercase">Total works</div>
                </div>
                <div class="icon">
                  <i class="fa fa-briefcase"></i>
                </div>
                <a href="../works/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          <?php } ?>

          <?php if ($admin['category_view']) { ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <?php
                  $sql6 = "SELECT category_id from category";
                  $query6 = $conn->prepare($sql6);;
                  $query6->execute();
                  $results6 = $query6->fetchAll(PDO::FETCH_OBJ);
                  $query = $query6->rowCount();
                  echo "<h3>" . $query . "</h3>";
                  ?>
                  <div class="stat-panel-title text-uppercase">Total category</div>
                </div>
                <div class="icon">
                  <i class="fa fa-sitemap"></i>
                </div>
                <a href="../category/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          <?php } ?>


          <?php if ($admin['admin_view']) { ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <?php
                  $sql6 = "SELECT admin_id from admin Where admin_delete=0 AND admin_status=1";
                  $query6 = $conn->prepare($sql6);;
                  $query6->execute();
                  $results6 = $query6->fetchAll(PDO::FETCH_OBJ);
                  $query = $query6->rowCount();
                  $sql2 = "SELECT admin_id from admin Where admin_delete=0 AND admin_status=0";
                  $query2 = $conn->prepare($sql2);;
                  $query2->execute();
                  $results2 = $query2->fetchAll(PDO::FETCH_OBJ);
                  $query1 = $query2->rowCount();
                  echo "<h6>Active Admin's: " . htmlentities($query) . "</h6>";
                  echo "<h6>In-Active Admin's: " . htmlentities($query1) . "</h6>";
                  echo "<h6>Total Admin's: " . htmlentities($query1 + $query) . "</h6>";
                  ?>
                </div>
                <div class="icon">
                  <i class="fa fa-grav"></i>
                </div>
                <a href="../admin/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          <?php } ?>


          
        </div>
    </div>

  </div>
  </section>
  </div>
  </div>
  <?php include '../includes/scripts.php'; ?>
</body>
<?php include '../includes/req_end.php'; ?>

</html>
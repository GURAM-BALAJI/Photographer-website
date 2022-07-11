<?php include '../session.php'; ?>
<?php include '../includes/header.php'; ?>
<?php if ($admin['home_image_view']) { ?>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <?php include '../includes/navbar.php'; ?>
      <?php include '../includes/menubar.php'; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Home Images
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Mannage</li>
            <li class="active">Home Images</li>
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
<?php if ($admin['home_image_edit']) { ?>
          <div class="modal-body">
            <form class="form-horizontal" method="POST" action="home_images_photo.php" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-9">
                  <select name="image_name" class="form-control">
                    <option value="home_ss_image_1">Slide Show Image-1 </option>
                    <option value="home_ss_image_2">Slide Show Image-2 </option>
                    <option value="home_ss_image_3">Slide Show Image-3 </option>
                    <option value="home_ss_image_4">Slide Show Image-4 </option>
                    <option value="welcome_side_image1">Welcome-Side Image-1 </option>
                    <option value="welcome_side_image2">Welcome-Side Image-2 </option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="image" class="col-sm-3 control-label">Image</label>
                <div class="col-sm-9">
                  <input class="form-control" type="file" id="image" name="image" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" id="name" name="name">
                </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </div>
            </form>
          </div>
          <?php } try {
            echo "<table border='1'>";
            $stmt = $conn->prepare("SELECT * FROM home_images WHERE home_images_id='1'");
            $stmt->execute();
            foreach ($stmt as $row) {
              echo "<tr><td>Slide Show Image-1</td><td><img height='300px' width='700px' src='../../images/home_images/" . $row['home_ss_image_1'] . "'></td><td>" . $row['home_ss_image_1_name'] . "</td></tr>";
              echo "<tr><td>Slide Show Image-2</td><td><img height='300px' width='700px' src='../../images/home_images/" . $row['home_ss_image_2'] . "'></td><td>" . $row['home_ss_image_2_name'] . "</td></tr>";
              echo "<tr><td>Slide Show Image-3</td><td><img height='300px' width='700px' src='../../images/home_images/" . $row['home_ss_image_3'] . "'></td><td>" . $row['home_ss_image_3_name'] . "</td></tr>";
              echo "<tr><td>Slide Show Image-4</td><td><img height='300px' width='700px' src='../../images/home_images/" . $row['home_ss_image_4'] . "'></td><td>" . $row['home_ss_image_4_name'] . "</td></tr>";
              echo "<tr><td>Welcome-Side Image-1</td><td><img height='300px' width='300px' src='../../images/home_images/" . $row['welcome_side_image1'] . "'></td><td>" . $row['welcome_side_image1_name'] . "</td></tr>";
              echo "<tr><td>Welcome-Side Image-2</td><td><img height='300px' width='300px' src='../../images/home_images/" . $row['welcome_side_image2'] . "'></td><td>" . $row['welcome_side_image2_name'] . "</td></tr>";
            }
            echo "</table>";
          } catch (PDOException $e) {
            echo $e->getMessage();
          }

          $pdo->close();
          ?>
        </section>

      </div>

    </div>
    <!-- ./wrapper -->

    <?php include '../includes/scripts.php'; ?>
  </body>
<?php } ?>
<?php include '../includes/req_end.php'; ?>

</html>
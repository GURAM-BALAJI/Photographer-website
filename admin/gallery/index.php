<?php include '../session.php'; ?>
<?php include '../includes/header.php'; ?>
<?php if ($admin['gallery_view']) { ?>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <?php include '../includes/navbar.php'; ?>
      <?php include '../includes/menubar.php'; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Photo Gallery
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Manage</li>
            <li class="active">Photo Gallery</li>
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
          <div class="panel panel-default" style="overflow-x:auto;">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header with-border">
                    <?php if ($admin['gallery_create']) { ?>
                      <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New Image</a>
                    <?php } ?>
                  </div>
                  <div class="box-body">
                    <table id="example1" class="table table-bordered">
                      <thead>
                        <th>SL NO.</th>
                        <th>Image</th>
                        <th>Group</th>
                        <?php if ($admin['gallery_del']) { ?>
                          <th>Tools</th>
                        <?php } ?>
                      </thead>
                      <tbody>
                        <?php
                        $conn = $pdo->open();

                        try {
                          $stmt = $conn->prepare("SELECT * FROM gallery ");
                          $stmt->execute();
                          $slno = 1;
                          foreach ($stmt as $row) {
                            echo "
                          <tr>
                          <td>" . $slno++ . "</td>
                            <td><img src='../../images/gallery/" . $row['gallery_name'] . "' height='50px' width='50px'> " . $row['gallery_name'] . "</td>";
                            $stmt_category = $conn->prepare("SELECT * FROM category where category_id=" . $row['gallery_group'] . "");
                            $stmt_category->execute();
                            foreach ($stmt_category as $row_category)
                              echo "<td>" . $row_category['category_name'] . "</td>";
                            echo "<td>";
                            if ($admin['gallery_del'])
                              echo "<button class='btn btn-danger btn-sm delete btn-flat' data-id='" . $row['gallery_id'] . "'><i class='fa fa-trash'></i> Delete</button>";
                            echo "</td>";
                            echo "</tr>
                        ";
                          }
                        } catch (PDOException $e) {
                          echo $e->getMessage();
                        }

                        $pdo->close();
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
      <?php include 'gallery_modal.php'; ?>

    </div>
    <!-- ./wrapper -->

    <?php include '../includes/scripts.php'; ?>
    <script>
      $(function() {

        $(document).on('click', '.delete', function(e) {
          e.preventDefault();
          $('#delete').modal('show');
          var id = $(this).data('id');
          getRow(id);
        });

      });

      function getRow(id) {
        $.ajax({
          type: 'POST',
          url: 'gallery_row.php',
          data: {
            id: id
          },
          dataType: 'json',
          success: function(response) {
            $('.catid').val(response.gallery_id);
            $('#edit_name').val(response.gallery_name);
            $('.catname').html(response.gallery_name);
          }
        });
      }
    </script>
  </body>
<?php } ?>

</html>
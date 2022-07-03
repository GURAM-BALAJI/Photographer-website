<?php include '../session.php'; ?>
<?php include '../includes/header.php'; ?>
<?php if ($admin['team_view']) { ?>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <?php include '../includes/navbar.php'; ?>
      <?php include '../includes/menubar.php'; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Teams
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Mannage</li>
            <li class="active">Teams</li>
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
                  <?php if ($admin['team_create']) { ?>
                    <div class="box-header with-border">
                      <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New team</a>
                    </div>
                  <?php } ?>
                  <div class="box-body">
                    <table id="example1" class="table table-bordered">
                      <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Profession</th>
                        <th>Tools</th>
                      </thead>
                      <tbody>
                        <?php
                        $conn = $pdo->open();

                        try {
                          $stmt = $conn->prepare("SELECT * FROM team");
                          $stmt->execute();
                          foreach ($stmt as $row) {
                            $image = (!empty($row['team_photo'])) ? '../../images/team/' . $row['team_photo'] : '../../images/team/no-image.png';
                            echo "
                          <tr>";
                            echo "<td>" . $row['team_id'] . "</td>";
                            echo "<td>" . $row['team_name'] . "</td>";
                            echo "<td><a href='team_full_image_view.php?image=" . $image . "'> <img src='" . $image . "' height='30px' width='80px'></a>";
                            if ($admin['team_edit'])
                              echo "<span class='pull-right'><a href='#edit_photo' class='photo' data-toggle='modal' data-id='" . $row['team_id'] . "'><i class='fa fa-edit'></i></a></span> ";
                            echo "</td>";
                            echo "<td>" . $row['team_profession'] . "</td>";
                            echo "<td>";
                            echo "<button class='btn btn-primary btn-sm view_more btn-flat' data-id='" . $row['team_id'] . "'><i class='fa fa-chevron-circle-down'></i> More</button> ";
                            if ($admin['team_edit'])
                              echo "<button class='btn btn-success btn-sm edit btn-flat' data-id='" . $row['team_id'] . "'><i class='fa fa-edit'></i> Edit</button> ";
                            if ($admin['team_del'])
                              echo "<button class='btn btn-danger btn-sm delete btn-flat' data-id='" . $row['team_id'] . "'><i class='fa fa-trash'></i> Delete</button>";
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
      <?php include 'team_modal.php'; ?>

    </div>
    <!-- ./wrapper -->

    <?php include '../includes/scripts.php'; ?>
    <script>
      $(function() {
        $(document).on('click', '.edit', function(e) {
          e.preventDefault();
          $('#edit').modal('show');
          var id = $(this).data('id');
          getRow(id);
        });

        $(document).on('click', '.view_more', function(e) {
          e.preventDefault();
          $('#view_more').modal('show');
          var id = $(this).data('id');
          getRow(id);
        });

        $(document).on('click', '.delete', function(e) {
          e.preventDefault();
          $('#delete').modal('show');
          var id = $(this).data('id');
          getRow(id);
        });
        $(document).on('click', '.photo', function(e) {
          e.preventDefault();
          var id = $(this).data('id');
          getRow(id);
        });

      });

      function getRow(id) {
        $.ajax({
          type: 'POST',
          url: 'team_row.php',
          data: {
            id: id
          },
          dataType: 'json',
          success: function(response) {
            $('.del_team_id').val(response.team_id);
            $('.del_team_name').html(response.team_name);
            $('.edit_photo_id').val(response.team_id);
            $('.edit_team_id').val(response.team_id);
            $('.edit_team_name').html(response.team_name);
            $('#edit_team_name').val(response.team_name);
            $('#edit_team_profession').val(response.team_profession);
            $('#edit_team_social_media1').html(response.team_social_media1);
            $('#edit_team_social_media2').html(response.team_social_media2);
            $('#edit_team_social_media1_link').val(response.team_social_media1_link);
            $('#edit_team_social_media2_link').val(response.team_social_media2_link);

            $('#view_team_social_media1_link').html(response.team_social_media1_link);
            $('#view_team_social_media2_link').html(response.team_social_media2_link);
            $('#view_team_social_media1').html(response.team_social_media1);
            $('#view_team_social_media2').html(response.team_social_media2);
          }
        });
      }
    </script>
  </body>
<?php } ?>
<?php include '../includes/req_end.php'; ?>

</html>
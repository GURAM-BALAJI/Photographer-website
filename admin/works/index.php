<?php include '../session.php'; ?>
<?php include '../includes/header.php'; ?>
<?php if($admin['works_view']){?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../includes/navbar.php'; ?>
  <?php include '../includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Works
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Mannage</li>
        <li class="active">Works</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
        <div class="panel panel-default" style="overflow-x:auto;">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <?php if($admin['works_create']){ ?>
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New Work</a>
            </div>
              <?php } ?>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                <th>SL NO.</th>
                  <th>Work Name</th>
                   <?php if($admin['works_edit'] || $admin['works_del']){ ?>
                  <th>Tools</th>
                 <?php } ?>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM works");
                      $stmt->execute();
                      $slno=1;
                      foreach($stmt as $row){
                        echo "
                          <tr>
                          <td>".$slno++."</td>";
                            echo "<td>".$row['works_name']."</td>";
                        if($admin['works_edit'] || $admin['works_del'])
                          echo "<td>";
                          if($admin['works_edit'])
                              echo "<button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['works_id']."'><i class='fa fa-edit'></i> Edit</button> ";
                               if($admin['works_del'])
                              echo "<button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['works_id']."'><i class='fa fa-trash'></i> Delete</button>";
                            if($admin['works_edit'] || $admin['works_del'])
                                echo "</td>";
                          echo "</tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
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
    <?php include 'works_modal.php'; ?>

</div>
<!-- ./wrapper -->

<?php include '../includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'works_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.catid').val(response.works_id);
      $('#edit_name').val(response.works_name);
        $('.catname').html(response.works_name);
    }
  });
}
</script>
</body>
<?php } ?>
<?php include '../includes/req_end.php'; ?>
</html>

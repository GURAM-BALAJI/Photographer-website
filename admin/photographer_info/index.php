<?php include '../session.php'; ?>
<?php include '../includes/header.php'; ?>
<?php if ($admin['photographer_info_view']) { ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include '../includes/navbar.php'; ?>
        <?php include '../includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Photographer Info
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>Manage</li>
                    <li class="active">Photographer Iinfo</li>
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
                <?php
                    $conn = $pdo->open();
                    try {
                        $stmt = $conn->prepare("SELECT * FROM photographer_info WHERE photographer_info_id='1'");
                        $stmt->execute();
                        foreach ($stmt as $row) { ?>
                <div class="modal-content">
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="photographer_info_edit.php"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="photographer_info_name"
                                        value="<?php echo $row['photographer_info_name']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photographer_info_phone" class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" name="photographer_info_phone"
                                        value="<?php echo $row['photographer_info_phone']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photographer_info_email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="photographer_info_email"
                                        value="<?php echo $row['photographer_info_email']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photographer_info_address" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="photographer_info_address" rows="4" cols="50"
                                        required><?php echo $row['photographer_info_address']; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photographer_info_address_map" class="col-sm-2 control-label">Address
                                    Map</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="photographer_info_address_map" rows="4"
                                        cols="50"
                                        required><?php echo $row['photographer_info_address_map']; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photographer_info_social_media1_type" class="col-sm-2 control-label">Social
                                    Media-1 Type</label>
                                <div class="col-sm-10">
                                    <select name="photographer_info_social_media1_type" class="form-control">
                                        <option value=''>Select Social Media-1 Type</option>
                                        <option value='facebook'
                                            <?php if ($row['photographer_info_social_media1_type'] == 'facebook') echo "selected"; ?>>
                                            FaceBook</option>
                                        <option value='instagram'
                                            <?php if ($row['photographer_info_social_media1_type'] == 'instagram') echo "selected"; ?>>
                                            Instagram</option>
                                        <option value='twitter'
                                            <?php if ($row['photographer_info_social_media1_type'] == 'twitter') echo "selected"; ?>>
                                            Twitter</option>
                                        <option value='linkedin'
                                            <?php if ($row['photographer_info_social_media1_type'] == 'linkedin') echo "selected"; ?>>
                                            Linkedin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="photographer_info_social_media1" class="col-sm-2 control-label">Social
                                    Media-1 Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="photographer_info_social_media1"
                                        value="<?php echo $row['photographer_info_social_media1']; ?>" >
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="photographer_info_social_media2_type" class="col-sm-2 control-label">Social
                                    Media-2 Type</label>
                                <div class="col-sm-10">
                                    <select name="photographer_info_social_media2_type" class="form-control">
                                        <option value=''>Select Social Media-2 Type</option>
                                        <option value='facebook'
                                            <?php if ($row['photographer_info_social_media2_type'] == 'facebook') echo "selected"; ?>>
                                            FaceBook</option>
                                        <option value='instagram'
                                            <?php if ($row['photographer_info_social_media2_type'] == 'instagram') echo "selected"; ?>>
                                            Instagram</option>
                                        <option value='twitter'
                                            <?php if ($row['photographer_info_social_media2_type'] == 'twitter') echo "selected"; ?>>
                                            Twitter</option>
                                        <option value='linkedin'
                                            <?php if ($row['photographer_info_social_media2_type'] == 'linkedin') echo "selected"; ?>>
                                            Linkedin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="photographer_info_social_media2" class="col-sm-2 control-label">Social
                                    Media-2 Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="photographer_info_social_media2"
                                        value="<?php echo $row['photographer_info_social_media2']; ?>" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photographer_info_social_media3_type" class="col-sm-2 control-label">Social
                                    Media-3 Type</label>
                                <div class="col-sm-10">
                                    <select name="photographer_info_social_media3_type" class="form-control">
                                        <option value=''>Select Social Media-3 Type</option>
                                        <option value='facebook'
                                            <?php if ($row['photographer_info_social_media3_type'] == 'facebook') echo "selected"; ?>>
                                            FaceBook</option>
                                        <option value='instagram'
                                            <?php if ($row['photographer_info_social_media3_type'] == 'instagram') echo "selected"; ?>>
                                            Instagram</option>
                                        <option value='twitter'
                                            <?php if ($row['photographer_info_social_media3_type'] == 'twitter') echo "selected"; ?>>
                                            Twitter</option>
                                        <option value='linkedin'
                                            <?php if ($row['photographer_info_social_media3_type'] == 'linkedin') echo "selected"; ?>>
                                            Linkedin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="photographer_info_social_media3" class="col-sm-2 control-label">Social
                                    Media-3 Link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="photographer_info_social_media3"
                                        value="<?php echo $row['photographer_info_social_media3']; ?>" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photographer_info_welcome_p1" class="col-sm-2 control-label">Welcome Info Paragraph 1</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="photographer_info_welcome_p1" rows="8" cols="50"
                                        required><?php echo $row['photographer_info_welcome_p1']; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photographer_info_welcome_p2" class="col-sm-2 control-label">Welcome Info Paragraph 2</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="photographer_info_welcome_p2" rows="4" cols="50"
                                        required><?php echo $row['photographer_info_welcome_p2']; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photographer_info_about" class="col-sm-2 control-label">About Us Info</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="photographer_info_about" rows="8" cols="50"
                                        required><?php echo $row['photographer_info_about']; ?></textarea>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <?php if ($admin['photographer_info_edit']) { ?>
                        <button type="submit" class="btn btn-primary btn-flat" name="edit"><i class="fa fa-save"></i>
                            UPDATE</button>
                        <?php } ?>
                        </form>
                    </div>
                </div>

            </section>

        </div>

    </div>
    <!-- ./wrapper -->
    <?php include '../includes/scripts.php'; ?>
</body>
<?php }
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }

                    $pdo->close();
                } ?>
<?php include '../includes/req_end.php'; ?>

</html>
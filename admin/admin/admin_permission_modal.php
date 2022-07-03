<?php include '../session.php'; ?>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        h2 {
            color: #1c94c4;
            text-align: center;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>

    <h2>PERMISSION</h2>
    <form class="form-horizontal" method="POST" action="admin_permission_edit.php">
        <?php
        $id = $_GET['id'];
        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT * FROM admin WHERE admin_id=:id");
        $stmt->execute(['id' => $id]);
        foreach ($stmt as $row) {
        ?>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th> </th>
                    <th style="color: #3a8104;"> Name </th>
                    <th style="color: #3a8104;"> View </th>
                    <th style="color: #3a8104;"> Create </th>
                    <th style="color: #3a8104;"> Edit </th>
                    <th style="color: #3a8104;"> Delete </th>
                    <th style="color: #3a8104;"> Special </th>
                    <th> </th>
                </tr>
                <tr>
                    <td> </td>
                    <td> ADMIN </td>
                    <td style="text-align: center;"> <input type="checkbox" name="admin_view" <?php if ($row['admin_view']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="admin_create" <?php if ($row['admin_create']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="admin_edit" <?php if ($row['admin_edit']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="admin_del" <?php if ($row['admin_del']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="admin_special" <?php if ($row['admin_special']) echo "checked"; ?>> </td>
                    <td> </td>
                </tr>
          
                <tr>
                    <td> </td>
                    <td> PHOTOGRAPHER INFO </td>
                    <td style="text-align: center;"> <input type="checkbox" name="photographer_info_view" <?php if ($row['photographer_info_view']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="photographer_info_edit" <?php if ($row['photographer_info_edit']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td> </td>
                     <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> WORKS </td>
                    <td style="text-align: center;"> <input type="checkbox" name="works_view" <?php if ($row['works_view']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="works_create" <?php if ($row['works_create']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="works_edit" <?php if ($row['works_edit']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="works_del" <?php if ($row['works_del']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td> </td>
                </tr>

                <tr>
                    <td> </td>
                    <td>PHOTO GALLERY </td>
                    <td style="text-align: center;"> <input type="checkbox" name="gallery_view" <?php if ($row['gallery_view']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="gallery_create" <?php if ($row['gallery_create']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="gallery_del" <?php if ($row['gallery_del']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td> </td>
                </tr>

                <tr>
                    <td> </td>
                    <td> VIDEO GALLERY </td>
                    <td style="text-align: center;"> <input type="checkbox" name="video_gallery_view" <?php if ($row['video_gallery_view']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="video_gallery_create" <?php if ($row['video_gallery_create']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="video_gallery_edit" <?php if ($row['video_gallery_edit']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="video_gallery_del" <?php if ($row['video_gallery_del']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td> </td>
                </tr>

                <tr>
                    <td> </td>
                    <td> HOME IMAGES </td>
                    <td style="text-align: center;"> <input type="checkbox" name="home_image_view" <?php if ($row['home_image_view']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="home_image_edit" <?php if ($row['home_image_edit']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> TEAM </td>
                    <td style="text-align: center;"> <input type="checkbox" name="team_view" <?php if ($row['team_view']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="team_create" <?php if ($row['team_create']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="team_edit" <?php if ($row['team_edit']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="team_del" <?php if ($row['team_del']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td> </td>
                </tr>
            </table>
        <?php } ?>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success btn-flat" name="update"><i class="fa fa-check"></i> UPDATE</button>
        </div>
    </form>
</body>

</html>
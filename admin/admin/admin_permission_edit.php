<?php
include '../session.php';
include '../includes/req_start.php';
if ($req_per == 1) {
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        if (isset($_POST['photographer_info_view']))
            $photographer_info_view = 1;
        else
            $photographer_info_view = 0;
        if (isset($_POST['photographer_info_edit']))
            $photographer_info_edit = 1;
        else
            $photographer_info_edit = 0;

        if (isset($_POST['admin_view']))
            $admin_view = 1;
        else
            $admin_view = 0;
        if (isset($_POST['admin_create']))
            $admin_create = 1;
        else
            $admin_create = 0;
        if (isset($_POST['admin_edit']))
            $admin_edit = 1;
        else
            $admin_edit = 0;
        if (isset($_POST['admin_del']))
            $admin_del = 1;
        else
            $admin_del = 0;
        if (isset($_POST['admin_special']))
            $admin_special = 1;
        else
            $admin_special = 0;

        if (isset($_POST['works_view']))
            $works_view = 1;
        else
            $works_view = 0;
        if (isset($_POST['works_create']))
            $works_create = 1;
        else
            $works_create = 0;
        if (isset($_POST['works_edit']))
            $works_edit = 1;
        else
            $works_edit = 0;
        if (isset($_POST['works_del']))
            $works_del = 1;
        else
            $works_del = 0;

        if (isset($_POST['gallery_view']))
            $gallery_view = 1;
        else
            $gallery_view = 0;
        if (isset($_POST['gallery_create']))
            $gallery_create = 1;
        else
            $gallery_create = 0;
        if (isset($_POST['gallery_del']))
            $gallery_del = 1;
        else
            $gallery_del = 0;


        if (isset($_POST['video_gallery_view']))
            $video_gallery_view = 1;
        else
            $video_gallery_view = 0;
        if (isset($_POST['video_gallery_create']))
            $video_gallery_create = 1;
        else
            $video_gallery_create = 0;
        if (isset($_POST['video_gallery_edit']))
            $video_gallery_edit = 1;
        else
            $video_gallery_edit = 0;
        if (isset($_POST['video_gallery_del']))
            $video_gallery_del = 1;
        else
            $video_gallery_del = 0;

        if (isset($_POST['home_image_view']))
            $home_image_view = 1;
        else
            $home_image_view = 0;
        if (isset($_POST['home_image_edit']))
            $home_image_edit = 1;
        else
            $home_image_edit = 0;

        if (isset($_POST['team_view']))
            $team_view = 1;
        else
            $team_view = 0;
        if (isset($_POST['team_create']))
            $team_create = 1;
        else
            $team_create = 0;
        if (isset($_POST['team_edit']))
            $team_edit = 1;
        else
            $team_edit = 0;
        if (isset($_POST['team_del']))
            $team_del = 1;
        else
            $team_del = 0;

        if (isset($_POST['category_view']))
            $category_view = 1;
        else
            $category_view = 0;
        if (isset($_POST['category_create']))
            $category_create = 1;
        else
            $category_create = 0;
        if (isset($_POST['category_edit']))
            $category_edit = 1;
        else
            $category_edit = 0;
        if (isset($_POST['category_del']))
            $category_del = 1;
        else
            $category_del = 0;
        $conn = $pdo->open();
        try {
            $stmt = $conn->prepare("UPDATE admin SET
              category_view=:category_view,
category_create=:category_create,
category_edit=:category_edit,
category_del=:category_del, 
            team_view=:team_view,
team_create=:team_create,
team_edit=:team_edit,
team_del=:team_del, 
            home_image_view=:home_image_view,
home_image_edit=:home_image_edit,
            video_gallery_view=:video_gallery_view,
video_gallery_create=:video_gallery_create,
video_gallery_edit=:video_gallery_edit,
video_gallery_del=:video_gallery_del,
            gallery_view=:gallery_view,
gallery_create=:gallery_create,
gallery_del=:gallery_del,
            admin_special=:admin_special,
            photographer_info_view=:photographer_info_view,
            photographer_info_edit=:photographer_info_edit,
            admin_view=:admin_view,
            admin_create=:admin_create,
            admin_edit=:admin_edit,
            admin_del=:admin_del,
            works_view=:works_view,
works_create=:works_create,
works_edit=:works_edit,
works_del=:works_del
             WHERE admin_id=:id");
            $stmt->execute([
                'category_view' => $category_view,
                'category_create' => $category_create,
                'category_edit' => $category_edit,
                'category_del' => $category_del,
                'team_view' => $team_view,
                'team_create' => $team_create,
                'team_edit' => $team_edit,
                'team_del' => $team_del,
                'home_image_view' => $home_image_view,
                'home_image_edit' => $home_image_edit,
                'video_gallery_view' => $video_gallery_view,
                'video_gallery_create' => $video_gallery_create,
                'video_gallery_edit' => $video_gallery_edit,
                'video_gallery_del' => $video_gallery_del,
                'gallery_view' => $gallery_view,
                'gallery_create' => $gallery_create,
                'gallery_del' => $gallery_del,
                'admin_special' => $admin_special,
                'photographer_info_view' => $photographer_info_view,
                'photographer_info_edit' => $photographer_info_edit,
                'admin_view' => $admin_view,
                'admin_create' => $admin_create,
                'admin_edit' => $admin_edit,
                'admin_del' => $admin_del,
                'works_view' => $works_view,
                'works_create' => $works_create,
                'works_edit' => $works_edit,
                'works_del' => $works_del,
                'id' => $id
            ]);
            $_SESSION['success'] = 'Admin Permission Updated Successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
        $pdo->close();
    }
}

header('location: index.php');

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['admin_photo'])) ? '../images/' . $admin['admin_photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['admin_name']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li><a href="../home/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      
      <?php
      if ($admin['photographer_info_view'] || $admin['works_view'] || $admin['gallery_view']) { ?>
        <li class="header">MANAGE</li>
        <?php
        if ($admin['photographer_info_view']) { ?>
          <li><a href="../photographer_info/"><i class="fa fa-camera-retro"></i> <span>photographer_info</span></a></li>
        <?php } ?>
        <?php
        if ($admin['works_view']) { ?>
          <li><a href="../works/"><i class="fa fa-briefcase"></i> <span>What We Offer</span></a></li>
        <?php } ?>
      <?php
        if ($admin['gallery_view']) { ?>
          <li><a href="../gallery/"><i class="fa fa-picture-o"></i> <span>Photo Gallery</span></a></li>
        <?php } ?>
        <?php
        if ($admin['video_gallery_view']) { ?>
          <li><a href="../video_gallery/"><i class="fa fa-youtube"></i> <span>Video Gallery</span></a></li>
        <?php } ?>
        <?php
        if ($admin['home_image_view']) { ?>
          <li><a href="../home_images/"><i class="fa fa-sliders"></i> <span>Home Images</span></a></li>
        <?php } ?>
        <?php
        if ($admin['team_view']) { ?>
          <li><a href="../team/"><i class="fa fa-users"></i> <span>Team</span></a></li>
        <?php } ?>
      <?php } ?>
      <?php
      if ($admin['admin_view']) { ?>
        <li class="header">LOGIN'S</li>
        <?php
        if ($admin['admin_view']) { ?>
          <li><a href="../admin/"><i class="fa fa-grav"></i> <span>Admin</span></a></li>
        <?php } ?>
      <?php } ?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
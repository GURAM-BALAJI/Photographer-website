<!DOCTYPE html>
<?php
include './admin/session2.php';
$conn = $pdo->open();
$stmt = $conn->prepare("SELECT * FROM photographer_info WHERE photographer_info_id=:id");
$stmt->execute(['id' => 1]);
foreach ($stmt as $row) {
?>
    <html lang="en">

    <head>

        <title><?php echo $row['photographer_info_name']; ?></title>


        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/aos.css">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="css/tooplate-gymso-style.css">
    </head>

    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">

        <!-- MENU BAR -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">

                <a class="navbar-brand" href="index.php"><?php echo $row['photographer_info_name']; ?></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link smoothScroll">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="about.php" class="nav-link smoothScroll">About
                                Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link smoothScroll">Photos <i class="fa fa-angle-down"></i></a>
                            <ul id="nav-submenu" class="nav-submenu">
                                <?php
                                $stmt_category = $conn->prepare("SELECT * FROM category");
                                $stmt_category->execute();
                                foreach ($stmt_category as $row_category) { ?>
                                    <li class="nav-item"><a href="photo.php?id=<?php echo $row_category['category_id']; ?>" class="nav-link smoothScroll"><?php echo $row_category['category_name']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="video.php" class="nav-link smoothScroll">Videos</a>
                        </li>

                        <li class="nav-item">
                            <a href="contact.php" class="nav-link active smoothScroll">Contact</a>
                        </li>
                    </ul>

                    <ul class="social-icon ml-lg-3">
                        <?php if (!empty($row['photographer_info_social_media1_type'])) { ?>
                            <li><a href="<?php echo $row['photographer_info_social_media1']; ?>" class="fa fa-<?php echo $row['photographer_info_social_media1_type']; ?>"></a></li>
                        <?php } ?>
                        <?php if (!empty($row['photographer_info_social_media2_type'])) { ?>
                            <li><a href="<?php echo $row['photographer_info_social_media2']; ?>" class="fa fa-<?php echo $row['photographer_info_social_media2_type']; ?>"></a></li>
                        <?php } ?>
                        <?php if (!empty($row['photographer_info_social_media3_type'])) { ?>
                            <li><a href="<?php echo $row['photographer_info_social_media3']; ?>" class="fa fa-<?php echo $row['photographer_info_social_media3_type']; ?>"></a></li>
                        <?php } ?>
                    </ul>
                </div>

            </div>
        </nav>

        <!-- CONTACT -->
        <section class="schedule section">
            <div class="container">
                <div class="row">

                    <div class="mt-5 ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="text-white mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                        <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            <input type="text" class="form-control" name="cf-name" placeholder="Name">

                            <input type="tel" class="form-control" name="cf-email" placeholder="Phone">

                            <input type="email" class="form-control" name="cf-email" placeholder="Email">

                            <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit" style="background-color: red;">Send
                                Message</button>
                        </form>
                    </div>

                    <div class="mt-5 ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="text-white mb-4" data-aos="fade-up" data-aos-delay="500">Where you can <span>find us</span></h2>

                        <?php if (!empty($row['photographer_info_address'])) { ?>
                            <p class="text-white" data-aos="fade-up" data-aos-delay="600"><i class="fa fa-map-marker mr-1"></i> <?php echo $row['photographer_info_address']; ?></p>
                            <p class="text-white" data-aos="fade-up" data-aos-delay="700">
                            <?php }
                        if (!empty($row['photographer_info_phone'])) { ?>
                                <i class="fa fa-phone mr-1"></i> <?php echo $row['photographer_info_phone']; ?>
                            </p>
                        <?php }
                        if (!empty($row['photographer_info_email'])) { ?>
                            <p class="text-white" data-aos="fade-up" data-aos-delay="800">
                                <i class="fa fa-envelope-o mr-1"></i>
                                <a> <?php echo $row['photographer_info_email']; ?></a>
                            <p>
                            <?php }
                        if (!empty($row['photographer_info_address_map'])) { ?>
                            <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                                <iframe src="<?php echo $row['photographer_info_address_map']; ?>" width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </section>


        <!-- FOOTER -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">Copyright &copy; 2022 7 Soft Solution
                            <br>Design: <a href="http://www.7softsolution.com">7SoftSolution.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- SCRIPTS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/custom.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
        <script src="./slideshow-script.js"></script>
    </body>
<?php } ?>

    </html>
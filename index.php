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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic'>
        <link rel="stylesheet" href="./slideshow-style.css">
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
                            <a href="index.php" class="nav-link active smoothScroll">Home</a>
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
                            <a href="contact.php" class="nav-link smoothScroll">Contact</a>
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
        <?php
        $stmt_ss = $conn->prepare("SELECT * FROM home_images WHERE home_images_id=:id");
        $stmt_ss->execute(['id' => 1]);
        foreach ($stmt_ss as $row_ss) { ?>
            <main class="main-content">
                <section class="slideshow">
                    <div class="slideshow-inner">
                        <div class="slides">
                            <div class="slide is-active ">
                                <div class="slide-content">
                                    <div class="caption">
                                        <div class="title"><?php echo $row_ss['home_ss_image_1_name']; ?></div>
                                        <a href="./photo.php" class="btn">
                                            <span class="btn-inner">See More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="image-container">
                                    <img src="./images/home_images/<?php echo $row_ss['home_ss_image_1']; ?>" class="image" />
                                </div>
                            </div>
                            <div class="slide">
                                <div class="slide-content">
                                    <div class="caption">
                                        <div class="title"><?php echo $row_ss['home_ss_image_2_name']; ?></div>
                                        <a href="./photo.php" class="btn">
                                            <span class="btn-inner">See More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="image-container">
                                    <img src="./images/home_images/<?php echo $row_ss['home_ss_image_2']; ?>" alt="" class="image" />
                                </div>
                            </div>
                            <div class="slide">
                                <div class="slide-content">
                                    <div class="caption">
                                        <div class="title"><?php echo $row_ss['home_ss_image_3_name']; ?></div>
                                        <a href="./photo.php" class="btn">
                                            <span class="btn-inner">See More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="image-container">
                                    <img src="./images/home_images/<?php echo $row_ss['home_ss_image_3']; ?>" class="image" />
                                </div>
                            </div>
                            <div class="slide">
                                <div class="slide-content">
                                    <div class="caption">
                                        <div class="title"><?php echo $row_ss['home_ss_image_4_name']; ?></div>
                                        <a href="./photo.php" class="btn">
                                            <span class="btn-inner">See More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="image-container">
                                    <img src="./images/home_images/<?php echo $row_ss['home_ss_image_4']; ?>" class="image" />
                                </div>
                            </div>
                        </div>

                        <div class="arrows">
                            <div class="arrow prev">
                                <span class="svg svg-arrow-left">
                                    <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                                        <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z" />
                                    </svg>
                                    <span class="alt sr-only"></span>
                                </span>
                            </div>
                            <div class="arrow next">
                                <span class="svg svg-arrow-right">
                                    <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                                        <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z" />
                                    </svg>
                                    <span class="alt sr-only"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
            </main>


            <!-- ABOUT -->
            <section class="about section">
                <div class="container">
                    <div class="row">

                        <div class="mt-lg-0 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                            <h2 class="mb-2" data-aos="fade-up" data-aos-delay="300">Welcome to <?php echo $row['photographer_info_name']; ?></h2>

                            <p data-aos="fade-up" data-aos-delay="400">
                                <?php echo $row['photographer_info_welcome_p1']; ?></p>
                            <p data-aos="fade-up" data-aos-delay="500">
                                <?php echo $row['photographer_info_welcome_p2']; ?></p>

                        </div>

                        <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                            <div class="team-thumb">
                                <img src="./images/home_images/<?php echo $row_ss['welcome_side_image1']; ?>" class="img-fluid" alt="Trainer">
                                <div class="team-info d-flex flex-column">
                                    <h3><?php echo $row_ss['welcome_side_image1_name']; ?></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                            <div class="team-thumb">
                                <img src="./images/home_images/<?php echo $row_ss['welcome_side_image2']; ?>" class="img-fluid" alt="Trainer">
                                <div class="team-info d-flex flex-column">
                                    <h3><?php echo $row_ss['welcome_side_image2_name']; ?></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        <?php } ?>

        <!-- CLASS -->
        <section class="class section">
            <div class="container">
                <div class="row">

                    <div class=" col-lg-12 col-12 text-center mb-1">
                        <h6 data-aos="fade-up">Store Your Memories</h6>
                        <h2 data-aos="fade-up" data-aos-delay="200">What We Offer ?</h2>
                    </div>
                    <?php
                    $stmt_works = $conn->prepare("SELECT * FROM works");
                    $stmt_works->execute();
                    foreach ($stmt_works as $row_works) { ?>
                        <div class="mt-2 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                            <div class="class-thumb">
                                <div class="class-info">
                                    <h3 class="mb-1"><?php echo $row_works['works_name']; ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>


        <!-- CONTACT -->
        <section class="schedule section">
            <div class="container">
                <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
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

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
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
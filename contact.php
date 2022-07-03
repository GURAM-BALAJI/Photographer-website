<!DOCTYPE html>
<html lang="en">

<head>

    <title>Gymso Fitness HTML Template</title>

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

            <a class="navbar-brand" href="index.php">Gymso Fitness</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a href="photo.php" class="nav-link smoothScroll">Photos</a>
                    </li>

                    <li class="nav-item">
                        <a href="video.php" class="nav-link smoothScroll">Videos</a>
                    </li>

                    <li class="nav-item">
                        <a href="contact.php" class="nav-link active smoothScroll">Contact</a>
                    </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
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

                <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400"
                    role="form">
                    <input type="text" class="form-control" name="cf-name" placeholder="Name">

                    <input type="tel" class="form-control" name="cf-email" placeholder="Phone">

                    <input type="email" class="form-control" name="cf-email" placeholder="Email">

                    <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea>

                    <button type="submit" class="form-control" id="submit-button" name="submit" style="background-color: red;">Send
                        Message</button>
                </form>
            </div>

            <div class="mt-5 mx-auto col-lg-5 col-md-6 col-12">
                <h2 class="text-white mb-4" data-aos="fade-up" data-aos-delay="500">Where you can <span>find us</span></h2>

                <p class="text-white" data-aos="fade-up" data-aos-delay="600"><i class="fa fa-map-marker mr-1"></i> 120-240 Rio de
                    Janeiro - State of Rio de Janeiro, Brazil</p>
                    <p class="text-white" data-aos="fade-up" data-aos-delay="700">
                        <i class="fa fa-phone mr-1"></i> +91 90353-76766</p>
                    <p class="text-white" data-aos="fade-up" data-aos-delay="800">
                        <i class="fa fa-envelope-o mr-1"></i>
                    <a >support@7SoftSolution.com</a><p>
                <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                    <iframe
                        src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
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
</body>

</html>
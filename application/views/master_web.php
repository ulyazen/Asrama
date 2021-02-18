<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo APP_NAME ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?= base_url('assets/'); ?>bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/asrama/'); ?>img/logoq.jpeg" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/asrama/'); ?>lib/slick/slick.css" rel="stylesheet">
    <link href="<?= base_url('assets/asrama/'); ?>lib/slick/slick-theme.css" rel="stylesheet">
    <link href="<?= base_url('assets/asrama/'); ?>css/style.css" rel="stylesheet">
    <?php if (isset($style)) echo $style; ?>
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="tb-contact">
                        <p><i class="fas fa-envelope"></i>dimasmaulana569@gmail.com</p>
                        <p><i class="fas fa-phone-alt"></i>+62 82369319538</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- Top Bar Start -->

    <!-- Brand Start -->
    <div class="brand">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4">
                    <div class="b-logo">
                        <a href="<?= base_url(''); ?>">
                            <img src="<?= base_url('assets/asrama/'); ?>img/logoq.jpeg" alt="Logo">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- Brand End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="<?= base_url(''); ?>" class="nav-item nav-link active">Beranda </a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil</a>
                            <div class="dropdown-menu">
                                <a href="<?= base_url('web/tentang'); ?>" class="dropdown-item">Tentang</a>
                                <a href="<?= base_url('web/struktur'); ?>" class="dropdown-item">Strukur Organisasi</a>
                                <a href="<?= base_url('web/proker'); ?>" class="dropdown-item">Program Kerja</a>
                            </div>
                        </div>
                        <a href="<?= base_url('web/kontak'); ?>" class="nav-item nav-link">Kontak Kami</a>
                        <a href="<?= base_url('web/galeri'); ?>" class="nav-item nav-link">Galeri</a>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link" href="<?= base_url('login'); ?>"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    <!-- Top News Start-->
    <div class="top-news">
        <div class="container">
            <div class="row">
                <?php if (isset($contents)) echo $contents; ?>
            </div>
        </div>
    </div>
    <!-- Top News End-->


    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Asrama Pangeran Antasari</h3>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>Jl. Samironobaru No.46, Samirono, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
                            <p><i class="fa fa-envelope"></i>dimasmaulana569@gmail.com.com</p>
                            <p><i class="fa fa-phone"></i>+62 82369319538</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Useful Links</h3>
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/amkspantasjogja/"><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p>Copyright 2020 &copy; <a href="<?= base_url(''); ?>">Asrama</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->

    <!-- JavaScript Libraries -->
    <script src="<?= base_url('assets/'); ?>jquery/jquery-3.4.1.slim.min.js"></script>
    <script src="<?= base_url('assets/asrama/'); ?>popper/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/asrama/'); ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/asrama/'); ?>lib/slick/slick.min.js"></script>
    <script src="<?= base_url('assets/asrama/'); ?>js/main.js"></script>
    <?php if (isset($script)) echo $script; ?>

</html>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo APP_NAME ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?= base_url('assets/'); ?>bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/sbadmin/css/'); ?>styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <?php if (isset($style)) echo $style; ?>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= base_url('admin'); ?>"><?php echo APP_NAME ?></a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

            <a href="<?= base_url(''); ?>"><button class="btn btn-success" type="button">Tampilan Website</button></a>

        </div>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= base_url('login/logout'); ?>">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Beranda</div>
                        <a class="nav-link" href="<?= base_url('admin'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="<?= base_url('web'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Tampilan Website
                        </a>
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="<?= base_url('admin/artikel'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Artikel
                        </a>
                        <a class="nav-link" href="<?= base_url('admin/galeri'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Galeri
                        </a>
                        <a class="nav-link" href="<?= base_url('admin/pesan'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Pesan
                        </a>
                        <a class="nav-link" href="<?= base_url('admin/site'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Site
                        </a>
                        <a class="nav-link" href="<?= base_url('admin/user'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            User
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Login Sebagai:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <?php if (isset($contents)) echo $contents; ?>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Admin Asrama 2021</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

<script src="<?= base_url('assets/'); ?>jquery/jquery-3.4.1.slim.min.js"></script>
<script src="<?= base_url('assets/asrama/'); ?>popper/popper.min.js"></script>
<script src="<?= base_url('assets/'); ?>bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url('assets/sbadmin/js/'); ?>scripts.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/sbadmin/demo/'); ?>datatables-demo.js"></script>
<?php if (isset($script)) echo $script; ?>

</html>
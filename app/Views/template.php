<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo "Pelaporan Kecelakaan - ".$title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- core:css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/app/assets/vendors/core/core.css">
    <!-- endinject -->
    <!-- plugin css -->
    <?php echo $this->renderSection('css'); ?>
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/app/assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/app/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/app/assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/app/assets/images/favicon.png" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    Noble<span>UI</span>
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('/'); ?>" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">web apps</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('user'); ?>" class="nav-link">
                            <i class="link-icon" data-feather="message-square"></i>
                            <span class="link-title">User</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('pendukung'); ?>" class="nav-link">
                            <i class="link-icon" data-feather="calendar"></i>
                            <span class="link-title">Pendukung</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('pelaporan'); ?>" class="nav-link">
                            <i class="link-icon" data-feather="calendar"></i>
                            <span class="link-title">Pelaporan</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->

        <div class="page-wrapper">

            <div class="page-content">

                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                        <h4 class="mb-3 mb-md-0"><?php echo $title; ?></h4>
                    </div>
                </div>
                
                <!-- Content -->
                <?php echo $this->renderSection('content'); ?>
                <!-- Content -->

            </div>

            <!-- partial:partials/_footer.html -->
            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © 2020 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>. All rights reserved</p>
                <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
            </footer>
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="<?php echo base_url(); ?>/app/assets/vendors/core/core.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <?php echo $this->renderSection('js'); ?>
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url(); ?>/app/assets/vendors/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url(); ?>/app/assets/js/template.js"></script>
    <!-- endinject -->
</body>

</html>
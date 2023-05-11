<!doctype html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">

            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>
            <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
                <div class="user-logo">
                    <div class="img" style="background-image: url(<?php echo base_url() ?>images/IMG_2107.jpg);"></div>
                    <h3>Tito Alexsta</h3>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="<?= base_url('/'); ?>"><span class="fa fa-home mr-3"></span> Home</a>
                </li>
                <li>
                    <a href="<?= base_url('/content/profile'); ?>"><span class="fa fa-download mr-3 notif"></span> Profile</a>
                    <!-- <small class="d-flex align-items-center justify-content-center">5</small>  ini buat notif -->
                </li>
                <li>
                    <a href="#"><span class="fa fa-gift mr-3"></span>Convert</a>
                </li>
                <!-- <li>
                    <a href="#"><span class="fa fa-trophy mr-3"></span> Top Review</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
                </li> -->
                <li>
                    <a href="<?= base_url('authentication/logout') ?>"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
                </li>
            </ul>

        </nav>

        <!-- for display the content  -->
        <?php $this->renderSection('content'); ?>


        <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>js/popper.js"></script>
        <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>js/main.js"></script>
    </div>

</body>

</html>
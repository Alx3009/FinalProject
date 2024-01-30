<!doctype html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">

            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-success">
                </button>
            </div>
            <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
                <div class="user-logo">
                    <div class="img" style="background-image: url(<?php echo base_url() ?>images/<?= $userInfo['photo'] ?>);"></div>
                    <h3><?= $userInfo['name'] ?></h3>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="<?= base_url('/homepage'); ?>"><span class="fa fa-home mr-3"></span> Home</a>
                </li>
                <li class="active">
                    <a href="<?= base_url('/content/profile'); ?>"><span class="fa fa-download mr-3 notif"></span>Profile</a>
                    <!-- <small class="d-flex align-items-center justify-content-center">5</small>  ini buat notif -->
                </li>
                <li class="active">
                    <a href="<?= base_url('/content/article/hidroponic-article'); ?>"><span class="fa fa-download mr-3 notif"></span>Article</Article></a>
                    <!-- <small class="d-flex align-items-center justify-content-center">5</small>  ini buat notif -->
                </li>
                <li class="active">
                    <a href="<?= base_url('authentication/logout') ?>"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
                </li>
            </ul>

        </nav>

        <!-- for display the content  -->
        <?php $this->renderSection('content'); ?>

        <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
        <script src="<?php echo base_url() ?>js/popper.js"></script>
        <!-- <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script> -->
        <script src="<?php echo base_url() ?>js/main.js"></script>

        <!-- script for image preview in update profile -->
        <script>
            function preview(){
                const foto = document.querySelector('#photo');
                const fotoLabel = document.querySelector('.custom-file-label');
                const imgPreview = document.querySelector('.img-preview');

                fotoLabel.textContent = foto.files[0].name;

                const fileFoto = new FileReader();
                fileFoto.readAsDataURL(foto.files[0]);

                fileFoto.onload = function (e){
                    imgPreview.src = e.target.result;
                }
            }
        </script>
        <!-- script for realtime sensor data -->
        <script>
            $(document).ready(function(){
                setInterval(() => {
             
                    $("#phlevel").load("<?php echo base_url('/phvalue'); ?>");
                    $("#ppmlevel").load("<?php echo base_url('/ppmvalue'); ?>");
                    $("#templevel").load("<?php echo base_url('/tempvalue'); ?>");
                }, 1000);
            })
        </script>
        <!-- ph, tds, temp chart line  -->
        <script>
            var refreshid = setInterval(() => {
                $('#tempchartline').load("<?php echo base_url('/tempchart'); ?>");
                $('#tdschartline').load("<?php echo base_url('/tdschart'); ?>");
                $('#phchartline').load("<?php echo base_url('/phchart'); ?>");
            }, 1000);
        </script>
    </div>
</body>
<footer class="text-center text-white" style="background-color: #02353c;">
        <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2);">
        © Smart Hydroponics: An IoT-Based Water Quality Monitoring System for Hydroponics -
        <a class="text-white" href="https://mdbootstrap.com/">Tito Alexsta</a>
        </div>
        <!-- Copyright -->
    </footer>

</html>
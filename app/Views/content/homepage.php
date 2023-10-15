<?= $this->extend('/layout/sidebar'); ?>


<?= $this->section('content'); ?>
<!-- 
Page Content  -->
<!-- <div id="content" class="p-4 p-md-5 pt-5">
    <h2 class="mb-4">Homepage</h2>
    <p>Hello <?= $userInfo['name']; ?></p>



</div> -->
<!-- calling graphic data

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->

<?php $this->renderSection('content'); ?>
<div id="content" class="p-4 p-md-5 pt-5" style="background-color: #eee;">
    <div class="container" id="responsecontainer">
        <h2 class="mb-4">Homepage</h2>
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2" style="background-color:#02353c;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 font-weight-bold text-uppercase mb-1" id="stylesensor">
                                                Temperature</div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800" id="temp">
                                                <div id="templevel"></div>
                                                &nbsp;
                                                <span>&deg;C</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2" style="background-color:#02353c;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 font-weight-bold text-uppercase mb-1" id="stylesensor">
                                                PH</div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800" id="ph">
                                                <div id="phlevel"></div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2" style="background-color:#02353c;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 font-weight-bold text-uppercase mb-1" id="stylesensor">TDS
                                            </div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800" id="ppm">
                                                <div id="ppmlevel"></div>
                                                &nbsp;
                                                <span> ppm</span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Pending Requests Card Example -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <!-- </div> -->
            <!-- <div class="col">
                <h2 class="mb-4">Homepage</h2>
                <section style="background-color: #eee;">
                    <div class="container py-5" id="responsecontainer">
                        <div id="phlevel"></div>
                        <div id="ppmlevel"></div>
                        <div id="templevel"></div>
    
                    </div>
                </section>
            </div> -->
        </div>
    </div>
</div>




<?= $this->endSection(); ?>
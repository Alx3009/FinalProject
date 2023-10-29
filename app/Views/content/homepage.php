<?= $this->extend('/layout/sidebar'); ?>

<?= $this->section('content'); ?>

<?php $this->renderSection('content'); ?>
<div id="content" class="p-4 p-md-5 pt-5" style="background: rgba(67, 147, 66, .7);">

  <div class="container" id="responsecontainer">
    <h2 class="mb-5">Realtime Data From Arduino</h2>
    <div class="row">
      <!-- Earnings (Monthly) Card Example -->
      <!-- Earnings (Annual) Card Example -->
      <div class="col-xl-4 col-md-6 mb-4">
        <div
          class="card border-left-success shadow h-100 py-2"
          style="background-color: #02353c"
        >
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div
                  class="h5 font-weight-bold text-uppercase mb-1"
                  id="stylesensor"
                >
                  Temperature
                </div>
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
        <div
          class="card border-left-primary shadow h-100 py-2"
          style="background-color: #02353c"
        >
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div
                  class="h5 font-weight-bold text-uppercase mb-1"
                  id="stylesensor"
                >
                  PH
                </div>
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
        <div
          class="card border-left-info shadow h-100 py-2"
          style="background-color: #02353c"
        >
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div
                  class="h5 font-weight-bold text-uppercase mb-1"
                  id="stylesensor"
                >
                  TDS
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
      <div class="col-xl-8" id="tempchartline"></div>
      <div class="col-xl-4 mb-4">
        <div class="card">
          <img src="/images/temperature.jpg" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Temperature</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
            <a href="" class="btn btn-outline-success btn-sm">Read More</a>
            <!-- <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a> -->
          </div>
        </div>
      </div>

      <div class="col-xl-4 mb-4">
        <div class="card">
          <img src="/images/tds.jpg" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Total Dissolved Solid</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
            <a href="" class="btn btn-outline-success btn-sm">Read More</a>
            <!-- <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a> -->
          </div>
        </div>
      </div>
      <div class="col-xl-8" id="tdschartline"></div>

      <div class="col-xl-8" id="phchartline"></div>
      <div class="col-xl-4 mb-4">
        <div class="card">
          <img src="/images/ph.jpg" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">pH</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
            <a href="" class="btn btn-outline-success btn-sm">Read More</a>
            <!-- <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a> -->
          </div>
        </div>
      </div>
    </div>

    <!-- break here -->
    <!-- chart line -->
    <!-- <div class="col-xl-8" id="tempchartline"></div>
    <div class="col-xl-4" id=""></div> -->
    
  </div>

</div>

<?= $this->endSection(); ?>

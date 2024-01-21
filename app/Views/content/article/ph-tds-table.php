<?= $this->extend('/layout/sidebar'); ?>
<?= $this->section('content'); ?>
  <div
    id="content"
    class="p-4 p-md-5 pt-5"
    style="background: rgba(242, 255, 233, 0.7)"
  >
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <!-- Post content-->
          <article>
            <!-- Post header-->
            <header>
              <!-- Post title-->
              <h1 class="fw-bolder mb-1">Hydroponic Nutrient PPM & pH Guide</h1>
              <!-- Post meta content-->
              <div class="text-muted fst-italic mb-2">
                Posted on December 14, 2023 by Tito Alexsta
              </div>
            </header>
            <!-- Post content-->
            <section class="mb-5">
              <p class="fs-5 mb-4">
                Different plants require different PPM levels to grow optimally.
                To ensure that you are providing the right amount of nutrients, it
                is important to know the PPM requirements of each plant.
              </p>
              <p class="fs-5 mb-4">
                This table provides PPM requirements for 6 groups of plants:
              </p>
              <ul>
                <li>Leafy greens</li>
                <li>Fruiting vegetables</li>
                <li>Fruit trees</li>
                <li>Flowering plants</li>
                <li>Herbs</li>
                <li>Root vegetables</li>
              </ul>
              <p>
                The table also includes minimum and maximum PPM levels for each
                group. The PPM level should be gradually increased as the plant
                grows, or it can be increased directly from the minimum to the
                maximum level. The pH level in the table is the optimal level for
                root absorption of hydroponic nutrients. If the pH level of your
                solution is higher than the level in the table, you will need to
                lower it.
              </p>
              <h4 class="fw-bolder mb-4 mt-5">The Leafy greens</h4>
              <figure class="mb-4">
                  <img
                    class="img-fluid rounded"
                    src="/images/sayurandaun.png"
                    alt="..."
                  />
              </figure>
              <h4 class="fw-bolder mb-4 mt-5">Fruiting vegetables</h4>
              <figure class="mb-4">
                  <img
                    class="img-fluid rounded"
                    src="/images/sayuranbuah.png"
                    alt="..."
                  />
              </figure>
              <h4 class="fw-bolder mb-4 mt-5">Fruit trees</h4>
              <figure class="mb-4">
                  <img
                    class="img-fluid rounded"
                    src="/images/tanamanbuah.png"
                    alt="..."
                  />
              </figure>
              <h4 class="fw-bolder mb-4 mt-5">Flowering plants</h4>
              <figure class="mb-4">
                  <img
                    class="img-fluid rounded"
                    src="/images/tanamanbunga.png"
                    alt="..."
                  />
              </figure>
              <h4 class="fw-bolder mb-4 mt-5">Herbs</h4>
              <figure class="mb-4">
                  <img
                    class="img-fluid rounded"
                    src="/images/tanamanherb.png"
                    alt="..."
                  />
              </figure>
              <h4 class="fw-bolder mb-4 mt-5">Root vegetables</h4>
              <figure class="mb-4">
                  <img
                    class="img-fluid rounded"
                    src="/images/tanamanumbi.png"
                    alt="..."
                  />
              </figure>
              <p class="fs-2 mb-4">
                Reference:
                <a
                  href="https://hidroponikpedia.com/tabel-ppm-dan-ph-nutrisi-hidroponik/"
                  >Tabel PPM dan pH Nutrisi Hidroponik</a
                >
              </p>
          </article>
        </div>
          <!-- Categories widget-->
        <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-header">Other Article</div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="<?= base_url('/content/article/ph-article'); ?>"
                      >pH for Hidroponics</a
                    >
                  </li>
                  <li>
                    <a
                      href="<?= base_url('/content/article/hidroponic-article'); ?>"
                      >Smart Hidroponics</a
                    >
                  </li>
                  <li><a href="<?= base_url('/content/article/temp-article'); ?>"">Temperature for Hidroponics</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

        </div>
      </div>
    </div>
  </div>
<?= $this->endSection(); ?>

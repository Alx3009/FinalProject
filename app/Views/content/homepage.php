<?= $this->extend('/layout/sidebar'); ?>


<?= $this->section('content'); ?>

<!-- Page Content  -->
<!-- <div id="content" class="p-4 p-md-5 pt-5">
    <h2 class="mb-4">Homepage</h2>
    <p>Hello <?= $userInfo['users']['name']; ?></p>



</div> -->
<!-- calling graphic data -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    $(document).ready(function(){
        setInterval(() => {
            $("#responsecontainer").load("<?php echo base_url('FinProApp/index'); ?>");
        }, 1000);
    })
</script>

<div id="content" class="p-4 p-md-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-4">Homepage</h2>
                <section style="background-color: #eee;">
                    <div class="container py-5" id="responsecontainer">
                        <div><?= $recordSensor->ph ?></div>
                        <div><?= $recordSensor->ppm ?></div>
                        <div><?= $recordSensor->temp ?></div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>




<?= $this->endSection(); ?>
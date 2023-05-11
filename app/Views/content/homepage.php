<?= $this->extend('/layout/sidebar'); ?>


<?= $this->section('content'); ?>

<!-- ini buat nampilkan component file terpisah -->


<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
    <h2 class="mb-4">Homepage</h2>
    <p>Hello <?= $userInfo['users']['name']; ?></p>



</div>

<?= $this->endSection(); ?>
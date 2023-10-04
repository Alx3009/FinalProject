<?= $this->extend('/layout/sidebar'); ?>


<?= $this->section('content'); ?>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-4">Profile Details</h2>
                <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('pesan'); ?></div>
                <?php endif ?>
                <section style="background-color: #eee;">
                    <div class="container py-5">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card mb-4">
                                        <div class="card-body text-center">
                                            <img src="<?php echo base_url() ?>/images/<?= $userProfile['photo'] ?>" alt="avatar" class="rounded img-fluid" style="width: 150px;">
                                            <h5 class="my-3"><?= $userProfile['name'] ?></h5>
                                            <p class="text-muted mb-1"><?= $userProfile['job'] ?></p>
                                            <p class="text-muted mb-4"><?= $userProfile['nationality'] ?></p>
                                            <div class="d-flex justify-content-center mb-2">
                                                <a class="btn btn-outline-primary ms-1" href="/content/updateprofile/<?= $userProfile['email'] ?>">Update Profile</a>

                                                <!-- <button type="button" class="btn btn-outline-primary ms-1">Update Profile</button> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4 mb-lg-0">
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush rounded-3">
                                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                    <i class="bi bi-instagram text-danger"></i>
                                                    <p class="mb-0">Instagram</p>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                    <i class="bi bi-whatsapp text-success"></i>
                                                    <p class="mb-0">Whatsapp</p>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                    <i class="bi bi-github text-dark"></i>
                                                    <p class="mb-0">Github</p>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                    <i class="bi bi-linkedin text-primary"></i>
                                                    <p class="mb-0">Linkedin</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Full Name</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <p class="text-muted mb-0"><?= $userProfile['name'] ?></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Email</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <p class="text-muted mb-0"><?= $userProfile['email'] ?></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Birth</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <p class="text-muted mb-0"><?= $userProfile['birth'] ?></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Mobile</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <p class="text-muted mb-0"><?= $userProfile['mobile'] ?></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Address</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <p class="text-muted mb-0"><?= $userProfile['address'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card mb-4 mb-md-0">
                                                <div class="card-body">
                                                    <p class="mb-4"><span class="text-primary font-italic me-1">Internship</span>
                                                    </p>
                                                    <p class="text-justify mb-1 " style="font-size: .77rem;"><?= $userProfile['first_intern'] ?></p>
                                                    <!-- <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                                <div class="progress rounded" style="height: 5px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                                <div class="progress rounded" style="height: 5px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                                <div class="progress rounded" style="height: 5px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                                <div class="progress rounded" style="height: 5px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                                <div class="progress rounded mb-2" style="height: 5px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card mb-4 mb-md-0">
                                                <div class="card-body">
                                                    <p class="mb-4"><span class="text-primary font-italic me-1">Internship</span>
                                                    </p>
                                                    <p class="text-justify mb-1 " style="font-size: .77rem;"><?= $userProfile['second_intern'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
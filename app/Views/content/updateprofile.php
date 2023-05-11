<?= $this->extend('/layout/sidebar'); ?>


<?= $this->section('content'); ?>
<div id="content" class="p-4 p-md-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-4">Update Profile</h2>
                <section style="background-color: #eee;">
                    <div class="container py-5">

                        <div class="row">
                            <div class="col">
                                <div class="card mb-3">
                                    <div class="card-body">

                                        <form action="/profile/saveUpdate/<?= $userUpdate['id'] ?>" method="post">
                                            <?= csrf_field(); ?>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <!-- <p class="mb-0">Full Name</p> -->
                                                    <label for="fullname" class="">Full Name</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="col-sm-12" id="name" name="name" value="<?= $userUpdate['name'] ?>">
                                                </div>
                                            </div>
                                            <hr>
                                            <!-- <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="email" class="">Email</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="col-sm-12" id="email" name="email" value="
                                                </div>
                                            </div>
                                            <hr> -->
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="birth" class="">Birth</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="col-sm-12" id="birth" name="birth" value="<?= $userUpdate['birth']; ?>">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="mobile" class="">Mobile</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="col-sm-12" id="mobile" name="mobile" value="<?= $userUpdate['mobile']; ?>">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="address" class="">Address</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="col-sm-12" id="addresss" name="address" value="<?= $userUpdate['address']; ?>">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="job" class="">Job</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="col-sm-12" id="job" name="job" value="<?= $userUpdate['job']; ?>">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="nationality" class="">Nationality</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="col-sm-12" id="nationality" name="nationality" value="<?= $userUpdate['nationality']; ?>">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="internship" class="">Internship</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="col-sm-12" id="first_intern" name="first_intern" value="<?= $userUpdate['first_intern']; ?>">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="internship" class="">Internship</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="col-sm-12" id="second_intern" name="second_intern" value="<?= $userUpdate['second_intern']; ?>">
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center mb-4 mt-4">
                                                <!-- <a class="btn btn-outline-primary ms-1 mt-4" href="/">Save</a> -->

                                                <button type="submit" class="btn btn-outline-primary ms-1">Update Profile</button>
                                            </div>
                                        </form>
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
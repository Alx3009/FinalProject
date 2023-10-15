<?= $this->extend('/layout/sidebar'); ?>


<?= $this->section('content'); ?>
<div id="content" class="p-4 p-md-5 pt-5" style="background-color: #eee;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-4">Update Profile</h2>
                <section>
                    <div class="container py-5">

                        <div class="row">
                            <div class="col">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <form action="/profile/saveUpdate/" method="post" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <!-- <?php $validation = \Config\Services::validation(); ?> -->
                                            <input type="hidden" class="col-sm-12" id="id" name="id" value="<?= $userUpdate['id'] ?>">
                                            <input type="hidden" class="col-sm-12" id="email" name="email" value="<?= $userUpdate['email'] ?>">
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
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="picture" class="form-label">Profile Photo</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <img src="/images/<?= $userUpdate['photo'] ?>" class=" img-thumbnail img-preview">
                                                </div>
                                                <div class="custom-file col-sm-7">
                                                    <input type="hidden" name="oldphoto" value="<?= $userUpdate['photo'] ?>">
                                                    <input type="file" class="custom-file-input <?= ($validation->hasError('photo')) ? 'is-invalid' : ''; ?>" id="photo" name="photo" onchange="preview()">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('photo'); ?>
                                                    </div>
                                                    <label class="custom-file-label" for="Photo"><?= $userUpdate['photo'] ?></label>
                                                </div>
                                                <!-- <label class="custom-file-label" for="Photo">Choose Image</label> -->
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
                                                    <label for="instagram" class="">Instagram</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="col-sm-12" id="instagram" name="instagram" value="<?= $userUpdate['instagram']; ?>">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="whatsapp" class="">WhatsApp</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="col-sm-12" id="whatsapp" name="whatsapp" value="<?= $userUpdate['wa']; ?>">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="github" class="">Github</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="col-sm-12" id="github" name="github" value="<?= $userUpdate['github']; ?>">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="linkedin" class="">Linkedin</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="col-sm-12" id="linkedin" name="linkedin" value="<?= $userUpdate['linkedin']; ?>">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label for="about" class="">About Me</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control col-sm-12" rows="3" id="about" name="about" value="<?= $userUpdate['about']; ?>"></textarea>
                                                </div>
                                            </div>
                                            <hr>
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
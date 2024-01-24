<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


</head>

<body>
    <div class="login-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h3 class="mt-3">Register Now</h3>
                    <div class="mt-3 bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <form action="<?= base_url('authentication/create') ?>" method="post" class="row g-4" autocomplete="off">
                                        <?= csrf_field(); ?>
                                        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                                        <?php endif ?>

                                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                                        <?php endif ?>
                                        <div class="col-12">
                                            <label>Fullname<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                <input type="text" class="form-control" name="name" placeholder="Enter name.." value="<?= set_value('name') ?>">
                                                <small class=" text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></small>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <label>Email<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                <input type="text" class="form-control" name="email" placeholder="Enter email.." value="<?= set_value('email') ?>">
                                                <small class=" text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></small>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-2">
                                            <label>Password<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                <input type="password" class="form-control" name="password" placeholder="Enter Password.." value="<?= set_value('password') ?>">
                                                <small class=" text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></small>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-2">
                                            <label>Confirm Password<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                <input type="password" class="form-control" name="cpassword" placeholder="Enter Password.." value="<?= set_value('cpassword') ?>">
                                                <small class=" text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></small>
                                            </div>
                                        </div>

                                        
                                        <input type="hidden" class="form-control" name="photo" placeholder="" value="<?= set_value('photo') ?>">
                                        <input type="hidden" class="form-control" name="slug" placeholder="" value="<?= set_value('slug') ?>">
                                        <input type="hidden" class="form-control" name="birth" placeholder="" value="<?= set_value('birth') ?>">
                                        <input type="hidden" class="form-control" name="mobile" placeholder="" value="<?= set_value('mobile') ?>">
                                        <input type="hidden" class="form-control" name="address" placeholder="" value="<?= set_value('address') ?>">
                                        <input type="hidden" class="form-control" name="job" placeholder="" value="<?= set_value('job') ?>">
                                        <input type="hidden" class="form-control" name="nationality" placeholder="" value="<?= set_value('nationality') ?>">
                                        <input type="hidden" class="form-control" name="first_intern" placeholder="" value="<?= set_value('first_intern') ?>">
                                        <input type="hidden" class="form-control" name="second_intern" placeholder="" value="<?= set_value('second_intern') ?>">
                                        <div class="col-sm-6 mt-3">
                                            <a href="<?= site_url('authentication/signin') ?>" class="float-end text-success">I already have account</a>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success px-4 float-end mt-4" value="sign_up">Sign Up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="my-auto mx-4">
                                <!-- <div class="form-right h-100 text-white text-center pt-5"> -->
                                <!-- <i class="bi bi-bootstrap"></i> -->

                                <div class="img"><img src="<?php echo base_url() ?>images/presidentlogo.png"></div>

                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center text-white" style="background-color: #02353c;">
        <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2);">
        © Smart Hydroponics: An IoT-Enabled Water Quality Monitoring System :
        <a class="text-white" href="https://mdbootstrap.com/">Tito Alexsta</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>
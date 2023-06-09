<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


</head>

<body>
    <div class="login-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h3 class="mt-3">Login Now</h3>
                    <div class="mt-3 bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <form action="<?= base_url('authentication/check') ?>" method="post" autocomplete="off"" class=" row g-4">
                                        <!-- <?php $validation = \Config\Services::validation(); ?> -->
                                        <?= csrf_field(); ?>
                                        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                                        <?php endif ?>

                                        <div class="col-12">
                                            <label>Email<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>" placeholder="Enter email..">
                                                <small class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></small>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-2">
                                            <label>Password<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                <input type="password" class="form-control" name="password" value="<?= set_value('password') ?>" placeholder="Enter Password..">
                                                <small class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 mt-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                                <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 mt-3">
                                            <a href="<?= site_url('authentication/register') ?>" class="float-end text-primary">Sign Up</a>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary px-4 float-end mt-4" value="sign_in">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 ps-0 d-none d-md-block">
                                <!-- <div class="form-right h-100 text-white text-center pt-5"> -->
                                <!-- <i class="bi bi-bootstrap"></i> -->

                                <div class="img" style="background-image: url(<?php echo base_url() ?>images/iot.svg);"></div>

                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
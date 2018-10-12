<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Star Admin Free Bootstrap Admin Dashboard Template</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo site_url('assets/vendors/') ?>iconfonts/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?php echo site_url('assets/vendors/') ?>css/vendor.bundle.base.css">
	<link rel="stylesheet" href="<?php echo site_url('assets/vendors/') ?>css/vendor.bundle.addons.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo site_url('assets/scss/admin/') ?>style.min.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?php echo site_url('assets/img/admin/') ?>favicon.png" />
</head>

<body>
<div class="container-scroller">
	<div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
		<div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
			<div class="row w-100">
				<div class="col-lg-4 mx-auto">
					<div class="auto-form-wrapper">
						<form action="#">
                            <?php echo $this->session->flashdata('message'); ?>
                            <?php echo form_open('', array('class' => 'form-horizontal')); ?>
							<div class="form-group">
                                <?php echo form_label('Username', 'identity'); ?>
								<div class="input-group">
                                    <?php echo form_error('identity'); ?>
                                    <?php echo form_input('identity', '', 'class="form-control" placeholder="Username" '); ?>
									<?php
									echo '<div class="input-group-append">';
									echo '<span class="input-group-text">';
                                    echo '<i class="mdi mdi-check-circle-outline"></i>';
                                    echo '</span>';
									echo '</div>'
									?>
								</div>
							</div>
							<div class="form-group">
                                <?php echo form_label('Password', 'password'); ?>
								<div class="input-group">
                                    <?php echo form_error('password'); ?>
                                    <?php echo form_password('password', '', 'class="form-control" placeholder="*********" '); ?>
                                    <?php
                                    echo '<div class="input-group-append">';
                                    echo '<span class="input-group-text">';
                                    echo '<i class="mdi mdi-check-circle-outline"></i>';
                                    echo '</span>';
                                    echo '</div>'
                                    ?>
								</div>
							</div>

							<div class="form-group">
                                <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary btn-lg btn-block"'); ?>
							</div>

							<div class="form-group d-flex justify-content-between">
								<div class="form-group">
									<label>
                                        <?php echo form_checkbox('remember', '1', FALSE); ?> Remember me
									</label>
								</div>
								<a href="#" class="text-small forgot-password text-black">Forgot Password</a>
							</div>

                            <?php echo form_close(); ?>



							<div class="form-group">
								<button class="btn btn-block g-login">
									<img class="mr-3" src="<?php echo site_url('assets/img/admin/') ?>file-icons/icon-google.svg" alt="">Log in with Google
								</button>
							</div>
							<div class="text-block text-center my-3">
								<span class="text-small font-weight-semibold">Not a member ?</span>
								<a href="register.html" class="text-black text-small">Create new account</a>
							</div>
						</form>
					</div>
					<ul class="auth-footer">
						<li>
							<a href="#">Conditions</a>
						</li>
						<li>
							<a href="#">Help</a>
						</li>
						<li>
							<a href="#">Terms</a>
						</li>
					</ul>
					<p class="footer-text text-center">2018 Mato Creative.</p>
				</div>
			</div>
		</div>
		<!-- content-wrapper ends -->
	</div>
	<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?php echo site_url('assets/vendors/') ?>js/vendor.bundle.base.js"></script>
<script src="<?php echo site_url('assets/vendors/') ?>js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="<?php echo site_url('assets/js/admin/') ?>off-canvas.js"></script>
<script src="<?php echo site_url('assets/js/admin/') ?>misc.js"></script>

<!-- iCheck -->
<script src="<?php echo site_url('assets/lib/') ?>iCheck/js/icheck.min.js"></script>
<!-- endinject -->

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>

</html>

<!-- <h1><?php echo lang('login_heading'); ?></h1>
<p><?php echo lang('login_subheading'); ?></p>

<div id="infoMessage"><?php echo $message; ?></div>

<?php echo form_open("auth/login"); ?>

<p>
  <?php echo lang('login_identity_label', 'identity'); ?>
  <?php echo form_input($identity); ?>
</p>

<p>
  <?php echo lang('login_password_label', 'password'); ?>
  <?php echo form_input($password); ?>
</p>

<p>
  <?php echo lang('login_remember_label', 'remember'); ?>
  <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
</p>


<p><?php echo form_submit('submit', lang('login_submit_btn')); ?></p>

<?php echo form_close(); ?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="<?= base_url('public') ?>/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('public') ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('public') ?>/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('public') ?>/assets/css/layout.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('public') ?>/assets/css/components.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('public') ?>/assets/css/colors.min.css" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script src="<?= base_url('public') ?>/global_assets/js/main/jquery.min.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/main/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/plugins/loaders/blockui.min.js"></script>
  <!-- /core JS files -->

  <!-- Theme JS files -->
  <script src="<?= base_url('public') ?>/global_assets/js/plugins/forms/validation/validate.min.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

  <script src="<?= base_url('public') ?>/assets/js/app.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/demo_pages/login_validation.js"></script>
  <!-- /theme JS files -->

</head>

<body>

  <!-- Page content -->
  <div class="page-content" style="background:url(<?= base_url('public') ?>/global_assets/images/login_cover.jpg) no-repeat;background-size:cover">

    <!-- Main content -->
    <div class="content-wrapper">

      <!-- Content area -->
      <div class="content d-flex justify-content-center align-items-center">

        <!-- Login form -->
        <!-- <form class="login-form" action="index.html"> -->
        <?= form_open("auth/login", ["class" => "login-form"]); ?>
        <div class="card mb-0">
          <div class="card-body">
            <div class="text-center mb-3">
              <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
              <h5 class="mb-0">Login to your account</h5>
              <span class="d-block text-muted">Enter your credentials below</span>
            </div>

            <div class="form-group form-group-feedback form-group-feedback-left">
              <!-- <input type="email" class="form-control" placeholder="Username"> -->
              <?= form_input($identity); ?>
              <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
              </div>
            </div>

            <div class="form-group form-group-feedback form-group-feedback-left">
              <!-- <input type="password" class="form-control" placeholder="Password"> -->
              <?php echo form_input($password); ?>
              <div class="form-control-feedback">
                <i class="icon-lock2 text-muted"></i>
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
            </div>

            <div class="text-center">
              <a href="login_password_recover.html">Forgot password?</a>
            </div>
          </div>
        </div>
        </form>
        <!-- /login form -->


        <!-- Login form -->

        <!-- /login form -->


        <!-- Registration form -->

        <!-- /registration form -->


        <!-- Unlock form -->

        <!-- /unlock form -->


        <!-- Password recovery form -->

        <!-- /password recovery form -->


        <!-- Tabbed form -->

        <!-- /tabbed recovery form -->


        <!-- Validation form -->

        <!-- /validation form -->

      </div>
      <!-- /content area -->

    </div>
    <!-- /main content -->

  </div>
  <!-- /page content -->

</body>

</html>
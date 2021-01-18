
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>DMS</title>

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
        <?= form_open("login", ["class" => "login-form"]); ?>
        <input type="hidden" name="method" value="login">
        <div class="card mb-0">
          <div class="card-body">
            <div class="text-center mb-3">
              <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
              <h5 class="mb-0">Masuk ke akun anda</h5>
              <span class="d-block text-muted">Masukkan kredensial Anda di bawah ini</span>
            </div>
            <?php if (isset($message)) { ?>
              <div class="form-group form-group-feedback form-group-feedback-left">
                <span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> <?php echo $message; ?></span>
              </div>
            <?php } ?>
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
              <button type="submit" class="btn btn-primary btn-block">Masuk <i class="icon-circle-right2 ml-2"></i></button>
            </div>

            <div class="form-group">
              <a href="#" class="btn btn-light btn-block" data-toggle="modal" data-target="#modal-registration">Daftar</a>
            </div>

            <div class="text-center">
              <a href="login_password_recover.html">Forgot password?</a>
            </div>
          </div>
        </div>
        </form>
      </div>
      <!-- /content area -->

    </div>
    <!-- /main content -->

  </div>
  <!-- /page content -->

  <div id="modal-registration" class="modal fade" tabindex="-1">
    <!-- <div id="modal-registration" class="modal fade show" tabindex="-1" style="display: block;"> -->
    <div class="modal-dialog modal-sm">
      <div class="modal-content">

        <!-- Form -->
        <form class="modal-body" action="<?= base_url('login')?>/register" method="POST">
          <input type="hidden" name="method" value="daftar">
          <div class="text-center mb-3">
            <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
            <h5 class="mb-0">Buat Akun Anda</h5>
            <span class="d-block text-muted">Semua kolom waijb di isi</span>
          </div>

          <div class="form-group form-group-feedback form-group-feedback-right">
            <input type="text" class="form-control" name="identity" placeholder="Masukan username" required>
            <div class="form-control-feedback">
              <i class="icon-user-plus text-muted"></i>
            </div>
          </div>

          <div class="form-group form-group-feedback form-group-feedback-right">
            <input type="text" class="form-control" name="first_name" placeholder="Masukan Nama Lengkap" required>
            <div class="form-control-feedback">
              <i class="icon-user-check text-muted"></i>
            </div>
          </div>

          <div class="form-group form-group-feedback form-group-feedback-right">
            <input type="number" class="form-control" name="phone" placeholder="Nomor Telephone (WA)" required>
            <div class="form-control-feedback">
              <i class="icon-phone2 text-muted"></i>
            </div>
          </div>

          <div class="form-group form-group-feedback form-group-feedback-right">
            <input type="email" class="form-control" name="email" placeholder="Masukan email anda" required>
            <div class="form-control-feedback">
              <i class="icon-mention text-muted"></i>
            </div>
          </div>

          <div class="form-group form-group-feedback form-group-feedback-right">
            <input type="password" class="form-control" name="password" placeholder="Buat password" required>
            <div class="form-control-feedback">
              <i class="icon-user-lock text-muted"></i>
            </div>
          </div>

          <div class="form-group form-group-feedback form-group-feedback-right">
            <input type="password" class="form-control" name="password_confirm" placeholder="Ulangi password" required>
            <div class="form-control-feedback">
              <i class="icon-user-lock text-muted"></i>
            </div>
          </div>
          
          <button type="submit" class="btn bg-teal-400 btn-block">Daftar <i class="icon-circle-right2 ml-2"></i></button>
        </form>
        <!-- /form -->

      </div>
    </div>
  </div>

  <!-- <script> window.onload = $("#modal-registration").modal('show') </script> -->
</body>

</html>
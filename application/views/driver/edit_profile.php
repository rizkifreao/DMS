<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="<?= base_url('public/global_assets/css/icons/icomoon/styles.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('public/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('public/assets/css/bootstrap_limitless.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('public/assets/css/layout.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('public/assets/css/components.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('public/assets/css/colors.min.css') ?>" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script src="<?= base_url('public/global_assets/js/main/jquery.min.js') ?>"></script>
  <script src="<?= base_url('public/global_assets/js/main/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('public/global_assets/js/plugins/loaders/blockui.min.js') ?>"></script>
  <!-- /core JS files -->

  <!-- Theme JS files -->
  <script src="<?= base_url('public/global_assets/js/plugins/visualization/d3/d3.min.js') ?>"></script>
  <script src="<?= base_url('public/global_assets/js/plugins/visualization/d3/d3_tooltip.js') ?>"></script>
  <script src="<?= base_url('public/global_assets/js/plugins/forms/styling/switchery.min.js') ?>"></script>
  <script src="<?= base_url('public/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') ?>"></script>
  <script src="<?= base_url('public/global_assets/js/plugins/ui/moment/moment.min.js') ?>"></script>
  <script src="<?= base_url('public/global_assets/js/plugins/pickers/daterangepicker.js') ?>"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/plugins/forms/selects/select2.min.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/plugins/notifications/jgrowl.min.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/plugins/notifications/noty.min.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/plugins/pickers/anytime.min.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/plugins/pickers/pickadate/picker.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/plugins/pickers/pickadate/picker.date.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/plugins/pickers/pickadate/picker.time.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/plugins/pickers/pickadate/legacy.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

  <script src="<?= base_url('public/assets/js/app.js') ?>"></script>
  <!-- <script src="<?= base_url('public/global_assets/js/demo_pages/dashboard.js') ?>"></script> -->
  <script src="<?= base_url('public') ?>/global_assets/js/demo_pages/datatables_basic.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/demo_pages/picker_date.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/demo_pages/form_inputs.js"></script>
  <!-- /theme JS files -->

</head>

<body class="bg-slate-800">

  <!-- Page content -->
  <div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

      <!-- Content area -->
      <div class="content d-flex justify-content-center align-items-center">

        <!-- Registration form -->
        <form action="<?= base_url() ?>Users/index" class="flex-fill" method="POST">
          <input type="hidden" name="d_id" id="d_id" value="<?php echo (isset($drivers)) ? $drivers->d_id : '' ?>">
          <input type="hidden" name="d_is_active" id="d_is_active" value="1">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="card mb-0">
                <div class="card-body">
                  <div class="text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                      <img class="rounded-circle" src="<?= base_url('public') ?>/global_assets/images/placeholders/User-Avatar-Transparent.png" width="auto" height="160" alt="">
                      <div class="card-img-actions-overlay card-img rounded-circle">
                        <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                          <i class="icon-question7"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="text-center mb-3">
                    <h5 class="mb-0">Hallo <?= $user->first_name ?></h5>
                    <span class="d-block text-muted">Silahkan lengkapi profil anda untuk melanjutkan</span>
                  </div>

                  <div class="row">
                    <div class="col-md-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Umur<span class="form-required">*</span></label>
                        <input type="text" name="d_age" value="<?php echo (isset($drivers)) ? $drivers->d_age : '' ?>" class="form-control" placeholder="Umur" required>
                      </div>
                    </div>

                    <div class="col-md-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">No SIM<span class="form-required">*</span></label>
                        <input type="text" name="d_licenseno" value="<?php echo (isset($drivers)) ? $drivers->d_licenseno : '' ?>" class="form-control" placeholder="Nomor SIM" required>
                      </div>
                    </div>

                    <div class="col-md-6 col-md-3">
                      <div class="form-group">
                        <label>Tgl Expire SIM<span class="form-required">*</label>
                        <div class="input-group">
                          <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-calendar22"></i></span>
                          </span>
                          <input type="text" class="form-control daterange-single" name="d_license_expdate" required>
                        </div>
                        <!-- <input type="text" name="d_license_expdate" value="<?php echo (isset($drivers)) ? $drivers->d_license_expdate : '' ?>" class="form-control datepickerpastdisable" placeholder="License Expiry Date"> -->
                      </div>
                    </div>

                    <div class="col-md-6 col-md-3">
                      <div class="form-group">
                        <label>Tanggal Registrasi<span class="form-required">*</label>
                        <div class="input-group">
                          <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-calendar22"></i></span>
                          </span>
                          <input type="text" class="form-control daterange-single" name="d_doj" value="<?php echo (isset($drivers)) ? $drivers->d_doj : '' ?>" class="form-control datepicker" placeholder="Date of Joining" required>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Reference/Notes</label>
                        <input type="text" name="d_ref" value="<?php echo (isset($drivers)) ? $drivers->d_ref : '' ?>" class="form-control" placeholder="Reference or Notes" required>
                      </div>
                    </div>

                    <div class="col-md-6 col-md-6">
                      <div class="form-group">
                        <label class="form-label">Alamat<span class="form-required">*</span></label>
                        <textarea class="form-control" autocomplete="off" placeholder="Address" name="d_address" required><?php echo (isset($drivers)) ? $drivers->d_address : '' ?></textarea>

                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-floppy-disk"></i></b> Simpan</button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- /registration form -->

      </div>
      <!-- /content area -->


      <!-- Footer -->
      <div class="navbar navbar-expand-lg navbar-light">
        <div class="text-center d-lg-none w-100">
          <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            Footer
          </button>
        </div>

        <div class="navbar-collapse collapse" id="navbar-footer">
          <span class="navbar-text">
            &copy; 2020. <a href="#">Drivers Management Sistem</a> by <a href="https://github.com/rizkifreao" target="_blank">Developers</a>
          </span>
        </div>
      </div>
      <!-- /footer -->

    </div>
    <!-- /main content -->

  </div>
  <!-- /page content -->

</body>

</html>
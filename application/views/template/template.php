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

  <script src="<?= base_url('public/assets/js/app.js') ?>"></script>
  <!-- <script src="<?= base_url('public/global_assets/js/demo_pages/dashboard.js') ?>"></script> -->
  <script src="<?= base_url('public') ?>/global_assets/js/demo_pages/datatables_basic.js"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/demo_pages/picker_date.js"></script>
  <!-- /theme JS files -->

</head>

<body>
  <script>
    Noty.overrideDefaults({
      theme: 'limitless',
      layout: 'topRight',
      type: 'alert',
      timeout: 2500
    });
  </script>

  <?php $successMessage = $this->session->flashdata('successmessage');
  $warningmessage = $this->session->flashdata('warningmessage');
  echo $warningmessage;
  if (isset($successMessage)) {
    echo "<script> new Noty({
                text: '$successMessage',
                type: 'success'
            }).show();</script>";
  }

  if (isset($warningmessage)) {
    echo "<script> new Noty({
      type: 'warning',
      text: '" . trim(preg_replace('/\s\s+/', ' ', $warningmessage)) . "' 
      }).show();</script>";
  }
  ?>
  <!-- Main navbar -->
  <?php
  if (isset($_header)) {
    echo (isset($_header) ? $_header : '');
  }
  ?>
  <!-- /main navbar -->


  <!-- Page content -->
  <div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

      <!-- Sidebar mobile toggler -->
      <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
          <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
          <i class="icon-screen-full"></i>
          <i class="icon-screen-normal"></i>
        </a>
      </div>
      <!-- /sidebar mobile toggler -->


      <!-- Sidebar content -->
      <?php
      if (isset($_sidebar)) {
        echo (isset($_sidebar) ? $_sidebar : '');
      }
      ?>
      <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

      <!-- Content area -->
      <?php
      if (isset($_content)) {
        echo (isset($_content) ? $_content : '');
      }
      ?>

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
            &copy; 2020. <a href="#">Drivers Management Sistem</a> by <a href="#" target="_blank">Developers</a>
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
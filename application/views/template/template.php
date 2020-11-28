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

  <script src="<?= base_url('public/assets/js/app.js') ?>"></script>
  <script src="<?= base_url('public/global_assets/js/demo_pages/dashboard.js') ?>"></script>
  <script src="<?= base_url('public') ?>/global_assets/js/demo_pages/datatables_basic.js"></script>
  <!-- /theme JS files -->

</head>

<body>

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
    <?php
    if (isset($_content)) {
      echo (isset($_content) ? $_content : '');
    }
    ?>
    <!-- /main content -->

  </div>
  <!-- /page content -->

</body>

</html>
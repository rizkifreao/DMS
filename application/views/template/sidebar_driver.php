<div class="sidebar-content">

  <!-- User menu -->
  <div class="sidebar-user">
    <div class="card-body">
      <div class="media">
        <div class="mr-3">
          <a href="#"><img src="<?= base_url('public') ?>/global_assets/images/placeholders/User-Avatar-Transparent.png" width="auto" height="38" class="rounded-circle" alt=""></a>
        </div>

        <div class="media-body">
          <div class="media-title font-weight-semibold"><?= $this->ion_auth->user()->row()->first_name ?></div>
          <div class="font-size-xs opacity-50">
            <i class="icon-pin font-size-sm"></i> &nbsp;Bandung
          </div>
        </div>

        <div class="ml-3 align-self-center">
          <a href="#" class="text-white"><i class="icon-cog3"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- /user menu -->


  <!-- Main navigation -->
  <div class="card card-sidebar-mobile">
    <ul class="nav nav-sidebar" data-nav-type="accordion">

      <!-- Main -->
      <li class="nav-item-header">
        <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
      </li>
      <li class="nav-item">
        <a href="<?= base_url() ?>" class="nav-link">
          <i class="icon-home4"></i>
          <span>
            Dashboard
            <span class="d-block font-weight-normal opacity-50">Drivers</span>
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('wo') ?>" class="nav-link">
          <i class="icon-copy"></i>
          <span>
            Workorder
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('wo') ?>" class="nav-link">
          <i class="icon-stack"></i>
          <span>
            Laporan
          </span>
        </a>
      </li>
      <!-- /main -->
    </ul>
  </div>
  <!-- /main navigation -->

</div>
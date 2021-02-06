<div class="sidebar-content">

  <!-- User menu -->
  <div class="sidebar-user">
    <div class="card-body">
      <div class="media">
        <div class="mr-3">
          <a href="#"><img src="<?= base_url('public') ?>/global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
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
        <a href="<?=base_url('dashboard')?>" class="nav-link <?= ($this->uri->segment(1) == 'dashboard') ? 'active' : '' ?>">
          <i class="icon-home4"></i>
          <span>
            Dashboard
            <span class="d-block font-weight-normal opacity-50"></span>
          </span>
        </a>
      </li>
      <li class="nav-item nav-item-submenu">
        <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Kendaraan</span></a>

        <ul class="nav nav-group-sub" data-submenu-title="Layouts">
          <li class="nav-item"><a href="<?= base_url('kendaraan') ?>" class="nav-link">Managemen Kendaraan</a></li>
          <li class="nav-item"><a href="<?= base_url('kendaraan/create') ?>" class="nav-link">Tambah Data</a></li>
        </ul>
      </li>

      <li class="nav-item nav-item-submenu ">
        <a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Driver</span></a>

        <ul class="nav nav-group-sub" data-submenu-title="Themes">
          <li class="nav-item"><a href="<?= base_url('drivers') ?>" class="nav-link">Managemen Driver</a></li>
          <li class="nav-item"><a href="<?= base_url('drivers/adddrivers') ?>" class="nav-link">Tambah Data</a></li>
        </ul>
      </li>
      <li class="nav-item nav-item-submenu">
        <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Pengiriman Barang</span></a>

        <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
          <li class="nav-item"><a href="<?= base_url('Trips') ?>" class="nav-link">Manajemen Pengiriman</a></li>
          <li class="nav-item"><a href="<?= base_url('Trips/addtrips') ?>" class="nav-link">Buat Pengiriman</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="<?=base_url('laporan')?>" class="nav-link">
          <i class="icon-list-unordered"></i>
          <span>Laporan</span>
          <span class="badge bg-blue-400 align-self-center ml-auto">2.2</span>
        </a>
      </li>
      <!-- /main -->
    </ul>
  </div>
  <!-- /main navigation -->

</div>
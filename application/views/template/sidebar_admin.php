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
        <a href="index.html" class="nav-link <?= ($this->uri->segment(1) == 'dashboard') ? 'active' : '' ?>">
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
        <a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Themes</span></a>

        <ul class="nav nav-group-sub" data-submenu-title="Themes">
          <li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
          <li class="nav-item"><a href="../../../LTR/material/full/index.html" class="nav-link">Material</a></li>
          <li class="nav-item"><a href="../../../LTR/dark/full/index.html" class="nav-link disabled">Dark <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
          <li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
        </ul>
      </li>
      <li class="nav-item nav-item-submenu">
        <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>

        <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
          <li class="nav-item"><a href="../seed/layout_nav_horizontal.html" class="nav-link">Horizontal navigation</a></li>
          <li class="nav-item"><a href="../seed/sidebar_none.html" class="nav-link">No sidebar</a></li>
          <li class="nav-item"><a href="../seed/sidebar_main.html" class="nav-link">1 sidebar</a></li>
          <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link">2 sidebars</a>
            <ul class="nav nav-group-sub">
              <li class="nav-item"><a href="../seed/sidebar_secondary.html" class="nav-link">Secondary sidebar</a></li>
              <li class="nav-item"><a href="../seed/sidebar_right.html" class="nav-link">Right sidebar</a></li>
            </ul>
          </li>
          <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link">3 sidebars</a>
            <ul class="nav nav-group-sub">
              <li class="nav-item"><a href="../seed/sidebar_right_hidden.html" class="nav-link">Right sidebar hidden</a></li>
              <li class="nav-item"><a href="../seed/sidebar_right_visible.html" class="nav-link">Right sidebar visible</a></li>
            </ul>
          </li>
          <li class="nav-item nav-item-submenu">
            <a href="#" class="nav-link">Content sidebars</a>
            <ul class="nav nav-group-sub">
              <li class="nav-item"><a href="../seed/sidebar_content_left.html" class="nav-link">Left sidebar</a></li>
              <li class="nav-item"><a href="../seed/sidebar_content_right.html" class="nav-link">Right sidebar</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="../seed/layout_boxed.html" class="nav-link">Boxed layout</a></li>
          <li class="nav-item-divider"></li>
          <li class="nav-item"><a href="../seed/navbar_fixed_main.html" class="nav-link">Fixed main navbar</a></li>
          <li class="nav-item"><a href="../seed/navbar_fixed_secondary.html" class="nav-link">Fixed secondary navbar</a></li>
          <li class="nav-item"><a href="../seed/navbar_fixed_both.html" class="nav-link">Both navbars fixed</a></li>
          <li class="nav-item"><a href="../seed/layout_fixed.html" class="nav-link">Fixed layout</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="changelog.html" class="nav-link">
          <i class="icon-list-unordered"></i>
          <span>Changelog</span>
          <span class="badge bg-blue-400 align-self-center ml-auto">2.2</span>
        </a>
      </li>
      <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link"><i class="icon-width"></i> <span>RTL version</span></a></li>
      <!-- /main -->
    </ul>
  </div>
  <!-- /main navigation -->

</div>
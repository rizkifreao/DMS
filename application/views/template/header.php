<div class="navbar navbar-expand-md navbar-dark">
  <div class="navbar-brand" style="font-size: 15px;">
    <a href="<?= base_url('/') ?>" class="d-inline-block" style="color: inherit;">
      <!-- <img src="<?= base_url('public') ?>/global_assets/images/logo_light.png" alt=""> -->
      D M S
    </a>
  </div>

  <div class="d-md-none">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
      <i class="icon-tree5"></i>
    </button>
    <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
      <i class="icon-paragraph-justify3"></i>
    </button>
  </div>

  <div class="collapse navbar-collapse" id="navbar-mobile">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
          <i class="icon-paragraph-justify3"></i>
        </a>
      </li>
    </ul>

    <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
          <i class="icon-bubbles4"></i>
          <span class="d-md-none ml-2">Messages</span>
          <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
        </a>

        <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
          <div class="dropdown-content-header">
            <span class="font-weight-semibold">Messages</span>
            <a href="#" class="text-default"><i class="icon-compose"></i></a>
          </div>

          <div class="dropdown-content-body dropdown-scrollable">
            <ul class="media-list">
              <li class="media">
                <div class="mr-3 position-relative">
                  <img src="<?= base_url('public') ?>/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                </div>

                <div class="media-body">
                  <div class="media-title">
                    <a href="#">
                      <span class="font-weight-semibold">James Alexander</span>
                      <span class="text-muted float-right font-size-sm">04:58</span>
                    </a>
                  </div>

                  <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                </div>
              </li>

              <li class="media">
                <div class="mr-3 position-relative">
                  <img src="<?= base_url('public') ?>/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                </div>

                <div class="media-body">
                  <div class="media-title">
                    <a href="#">
                      <span class="font-weight-semibold">Margo Baker</span>
                      <span class="text-muted float-right font-size-sm">12:16</span>
                    </a>
                  </div>

                  <span class="text-muted">That was something he was unable to do because...</span>
                </div>
              </li>

              <li class="media">
                <div class="mr-3">
                  <img src="<?= base_url('public') ?>/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                </div>
                <div class="media-body">
                  <div class="media-title">
                    <a href="#">
                      <span class="font-weight-semibold">Jeremy Victorino</span>
                      <span class="text-muted float-right font-size-sm">22:48</span>
                    </a>
                  </div>

                  <span class="text-muted">But that would be extremely strained and suspicious...</span>
                </div>
              </li>

              <li class="media">
                <div class="mr-3">
                  <img src="<?= base_url('public') ?>/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                </div>
                <div class="media-body">
                  <div class="media-title">
                    <a href="#">
                      <span class="font-weight-semibold">Beatrix Diaz</span>
                      <span class="text-muted float-right font-size-sm">Tue</span>
                    </a>
                  </div>

                  <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                </div>
              </li>

              <li class="media">
                <div class="mr-3">
                  <img src="<?= base_url('public') ?>/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                </div>
                <div class="media-body">
                  <div class="media-title">
                    <a href="#">
                      <span class="font-weight-semibold">Richard Vango</span>
                      <span class="text-muted float-right font-size-sm">Mon</span>
                    </a>
                  </div>

                  <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                </div>
              </li>
            </ul>
          </div>

          <div class="dropdown-content-footer justify-content-center p-0">
            <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
          </div>
        </div>
      </li>

      <li class="nav-item dropdown dropdown-user">
        <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
          <img src="<?= base_url('public') ?>/global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
          <span><?= $this->ion_auth->user()->row()->first_name ?></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right">
          <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
          <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
          <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
          <a href="<?= base_url('logout') ?>" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
        </div>
      </li>
    </ul>
  </div>
</div>
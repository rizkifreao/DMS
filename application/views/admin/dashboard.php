      <!-- Page header -->
      <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
          <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold"><?= $header_name ?></span></h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
          </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
          <div class="d-flex">
            <div class="breadcrumb">
              <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
              <a href="datatable_basic.html" class="breadcrumb-item"><?= $header_name ?></a>
              <span class="breadcrumb-item active">Basic</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
          </div>

          <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
              <a href="#" class="breadcrumb-elements-item">
                <i class="icon-comment-discussion mr-2"></i>
                Support
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- /page header -->

      <div class="content">
        <div class="row">
          <div class="col-xl-12">

            <!-- Progress counters -->
            <div class="row">
              <div class="col-sm-2">
                <div class="card text-center">
                  <div class="card-body">
                    <h1 class="mb-0"><?= ($dashboard['tot_vehicles'] != '') ? $dashboard['tot_vehicles'] : '0' ?></h1>
                    <div class="font-size-sm text-muted">Total Kendaraan</div>
                  </div>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="card text-center">
                  <div class="card-body">
                    <h1 class="mb-0"><?= ($dashboard['tot_drivers'] != '') ? $dashboard['tot_drivers'] : '0' ?></h1>
                    <div class="font-size-sm text-muted">Total Supir</div>
                  </div>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="card text-center">
                  <div class="card-body">
                    <h1 class="mb-0"><?= ($dashboard['tot_today_trips'] != '') ? $dashboard['tot_today_trips'] : '0' ?></h1>
                    <div class="font-size-sm text-muted">Trips hari ini</div>
                  </div>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="card text-center">
                  <div class="card-body">
                    <h1 class="mb-0">8</h1>
                    <div class="font-size-sm text-muted">64% average</div>
                  </div>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="card text-center">
                  <div class="card-body">
                    <h1 class="mb-0">8</h1>
                    <div class="font-size-sm text-muted">64% average</div>
                  </div>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="card text-center">
                  <div class="card-body">
                    <h1 class="mb-0">8</h1>
                    <div class="font-size-sm text-muted">64% average</div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
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
                    <div class="font-size-sm text-muted">Pengiriman hari ini</div>
                  </div>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="card text-center">
                  <div class="card-body">
                    <h1 class="mb-0"><?= ($dashboard['tot_trips'] != '') ? $dashboard['tot_trips'] : '0' ?></h1>
                    <div class="font-size-sm text-muted">Total Pengiriman</div>
                  </div>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="card text-center">
                  <div class="card-body">
                    <h1 class="mb-0"><?= ($dashboard['tot_trips_comp'] != '') ? $dashboard['tot_trips_comp'] : '0' ?></h1>
                    <div class="font-size-sm text-muted">Pengiriman Selesai</div>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-2">
                <div class="card text-center">
                  <div class="card-body">
                    <h1 class="mb-0"><?= ($dashboard['tot_trips_go'] != '') ? $dashboard['tot_trips_go'] : '0' ?></h1>
                    <div class="font-size-sm text-muted">Pengiriman Berjalan</div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">

            <!-- Members online -->
            <div class="card bg-teal-400">
              <div class="card-body">
                <div class="d-flex">
                  <h3 class="font-weight-semibold mb-0">3,450</h3>
                  <span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span>
                </div>

                <div>
                  Members online
                  <div class="font-size-sm opacity-75">489 avg</div>
                </div>
              </div>

              <div class="container-fluid">
                <div id="members-online"></div>
              </div>
            </div>
            <!-- /members online -->

          </div>

          <div class="col-lg-4">

            <!-- Current server load -->
            <div class="card bg-pink-400">
              <div class="card-body">
                <div class="d-flex">
                  <h3 class="font-weight-semibold mb-0">49.4%</h3>
                  <div class="list-icons ml-auto">
                    <div class="list-icons-item dropdown">
                      <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                        <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                        <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                        <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div>
                  Current server load
                  <div class="font-size-sm opacity-75">34.6% avg</div>
                </div>
              </div>

              <div id="server-load"></div>
            </div>
            <!-- /current server load -->

          </div>

          <div class="col-lg-4">

            <!-- Today's revenue -->
            <div class="card bg-blue-400">
              <div class="card-body">
                <div class="d-flex">
                  <h3 class="font-weight-semibold mb-0">$18,390</h3>
                  <div class="list-icons ml-auto">
                    <a class="list-icons-item" data-action="reload"></a>
                  </div>
                </div>

                <div>
                  Today's revenue
                  <div class="font-size-sm opacity-75">$37,578 avg</div>
                </div>
              </div>

              <div id="today-revenue"></div>
            </div>
            <!-- /today's revenue -->

          </div>
        </div>
      </div>
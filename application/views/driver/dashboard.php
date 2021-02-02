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
                    <h1 class="mb-0"><?= $tot_trips ?></h1>
                    <div class="font-size-sm text-muted">Total Trips</div>
                  </div>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="card text-center">
                  <div class="card-body">
                    <h1 class="mb-0"><?= $trip_complete ?></h1>
                    <div class="font-size-sm text-muted">Trips Completed</div>
                  </div>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="card text-center">
                  <div class="card-body">
                    <h1 class="mb-0"><?= $trip_ongoing ?></h1>
                    <div class="font-size-sm text-muted">Trips On Going</div>
                  </div>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="card text-center">
                  <div class="card-body">
                    <h1 class="mb-0"><?= $trip_pending ?></h1>
                    <div class="font-size-sm text-muted">Trips Pending</div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header header-elements-inline">
            <h5 class="card-title">Tabel Data Perjalanan</h5>
            <div class="header-elements">
              <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
              </div>
            </div>
          </div>

          <table class="table datatable-save-state">
            <thead>
              <tr>
                <th class="w-1">NO</th>
                <th>Customer</th>
                <th>Kendaraan</th>
                <th>Type</th>
                <th>Alamat</th>
                <th>Tanggal Kirim</th>
                <th>Trip Status</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $count = 1;
              if ($triplist) {
                foreach ($triplist as $triplists) { ?>
                  <tr>
                    <td> <?php echo output($count);
                          $count++; ?></td>
                    <td> <?php echo ucfirst($triplists['t_customer_id']); ?></td>
                    <td> <?php echo output($triplists['t_vechicle_details']->v_name) . ' - ' . output($triplists['t_vechicle_details']->v_registration_no); ?></td>
                    <td><?php echo ucfirst($triplists['t_type']); ?></td>
                    <td><?= $triplists['t_trip_fromlocation'] ?> &nbsp; <a href="<?= $triplists['t_trip_tolocation'] ?>" data-toggle="tooltip" target="_blank" title="Klik untuk membuka maps"><i class="icon-map5"></i></a></td>
                    <td>tgl kirim</td>
                    <td><span class="badge <?php echo ($triplists['t_trip_status'] == 'Pending') ? 'badge-info' : 'badge-success'; ?> "><?php echo ($triplists['t_trip_status'] == 'Pending') ? 'Pending' : 'Completed'; ?></span></td>
                    <td class="text-center">
                      <!-- <div class="list-icons">
                      <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                          <i class="icon-menu9"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                          <a href="<?php echo base_url(); ?>trips/edittrip/<?php echo output($triplists['t_id']); ?>" class="dropdown-item"><i class="icon-pencil"></i>Ubah</a>
                          <a href="#" class="dropdown-item"><i class="icon-eraser2"></i> Hapus</a>
                        </div>
                      </div>
                    </div> -->
                      <div>
                        <!-- <button href="<?php echo base_url(); ?>wo/proses_trip/<?php echo output($triplists['t_id']); ?>" class="btn btn-sm bg-teal-400"><i class="icon-paperplane mr-2"></i> Proses</button> -->
                        <button id="btn-proses" data-id="<?php echo output($triplists['t_id']); ?>" class="btn btn-sm bg-teal-400""><i class=" icon-paperplane mr-2"></i> Ambil</button>
                      </div>
                    </td>
                  </tr>
              <?php }
              } ?>
            </tbody>
          </table>
        </div>
      </div>

      <div id="proses_wo" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h6 class="modal-title">Proses Pengiriman</h6>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="<?= base_url('wo') ?>/take_wo" class="form-horizontal" method="POST">
              <div class="modal-body">
                <h6 class="font-weight-semibold">Data Pengiriman</h6>

                <input type="hidden" id="wo_id" name="id">
                <input type="hidden" id="koordinat" name="koordinat">

                <div class="form-group row">
                  <label class="col-form-label col-sm-3">Pelanggan</label>
                  <div class="col-sm-9">
                    <input type="text" id="pelanggan" class="form-control" disabled>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-form-label col-sm-3">Kendaraan</label>
                  <div class="col-sm-9">
                    <input type="text" id="kendaraan" class="form-control" disabled>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-form-label col-sm-3">Alamat</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <span class="input-group-text bg-primary border-primary text-white">
                          <a href="https://goo.gl/maps/g9RRhGzAYQBR5SQf6" id="maps" target="_blank" style="color: inherit;" data-toggle="tooltip" title="Klik tanda untuk membuka maps !"><i class=" icon-map5"></i></a>
                        </span>
                      </span>
                      <textarea type="text" class="form-control border-left-0" data-toggle="tooltip" id="alamat" disabled></textarea>
                    </div>
                    <span>Klik icon untuk membuka aplikasi map</span>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-form-label col-sm-3">Tipe Pengiriman</label>
                  <div class="col-sm-9">
                    <input type="text" id="tipe_pengiriman" class="form-control" disabled>
                  </div>
                </div>

              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn bg-info">Proses</button>
              </div>
            </form>

          </div>
        </div>
      </div>

      <script>
        base_url = '<?= base_url() ?>'
        $('#btn-proses').on('click', function() {
          var id = $(this).attr('data-id')
          $.ajax({
            url: base_url + 'wo/get_trip?id=' + id,
            success: function(res) {
              data = JSON.parse(res)
              $("#wo_id").val(id)
              $("#pelanggan").val(data.tripdetails[0].t_customer_id)
              $("#maps").href = data.tripdetails[0].t_trip_tolocation
              $("#kendaraan").val(data.vechicle.v_name)
              $("#alamat").text(data.tripdetails[0].t_trip_fromlocation)
              $("#tipe_pengiriman").val(data.tripdetails[0].t_type)
              $("#koordinat").val(latlong)
              console.log(latlong);
            }
          })
          $('#proses_wo').modal('show')
        });
      </script>
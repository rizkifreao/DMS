<!-- Page header -->
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Data - Trips</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="<?= base_url('dashboard') ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Home</a>
        <!-- <a href="datatable_basic.html" class="breadcrumb-item">Kendaraan</a> -->
        <span class="breadcrumb-item active">Trips</span>
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
  <!-- State saving -->
  <div class="card">
    <div class="card-header header-elements-inline">
      <h5 class="card-title">Tabel Data Perjalanan</h5>
      <div class="header-elements">
        <div class="list-icons">
          <a href="<?php echo base_url(); ?>trips/addtrips" class="btn btn-primary btn-sm">Tambah Trip Baru</a>
          <a class="list-icons-item" data-action="collapse"></a>
          <a class="list-icons-item" data-action="reload"></a>
        </div>
      </div>
    </div>

    <table class="table datatable-save-state">
      <thead>
        <tr>
          <th class="w-1">NO</th>
          <th>Pelanggan</th>
          <th>Kendaraan</th>
          <th>Type</th>
          <th>Supir</th>
          <th>Alamat</th>
          <th>Payment Status</th>
          <th>Trip Status</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $count = 1;
        foreach ($triplist as $triplists) { ?>
          <tr>
            <td> <?php echo output($count);
                  $count++; ?></td>
            <td> <?php echo $triplists['t_customer_id']; ?></td>
            <td> <?php echo output($triplists['t_vechicle_details']->v_name) . '-' . output($triplists['t_vechicle_details']->v_registration_no); ?></td>
            <td><?php echo ucfirst($triplists['t_type']); ?></td>
            <td><?php echo output($triplists['t_driver_details']->d_name); ?></td>
            <td><?= $triplists['t_trip_fromlocation'] ?> &nbsp; <a href="<?= $triplists['t_trip_tolocation'] ?>" data-toggle="tooltip" target="_blank" title="Klik untuk membuka maps"><i class="icon-map5"></i></a></td>
            <td> <span class="badge <?php echo ($triplists['t_trip_paymentstatus'] == 'completed') ? 'badge-success' : 'badge-danger'; ?> "><?php echo ($triplists['t_trip_paymentstatus'] == 'completed') ? 'Completed' : 'Pending'; ?> </span> </td>
            <td><span class="badge <?php echo ($triplists['t_trip_status'] == 'OnGoing') ? 'badge-danger' : 'badge-success'; ?> "><?php echo ($triplists['t_trip_status'] == 'OnGoing') ? 'OnGoing' : 'Completed'; ?></span></td>
            <td class="text-center">
              <div class="list-icons">
                <div class="dropdown">
                  <a href="#" class="list-icons-item" data-toggle="dropdown">
                    <i class="icon-menu9"></i>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="<?php echo base_url(); ?>trips/edittrip/<?php echo output($triplists['t_id']); ?>" class="dropdown-item"><i class="icon-pencil"></i>Ubah</a>
                    <a href="#" class="dropdown-item"><i class="icon-eraser2"></i> Hapus</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <!-- /state saving -->
</div>
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
  <div class="card">
    <div class="card-header header-elements-inline">
      <h5 class="card-title">History Pengiriman</h5>
      <div class="header-elements">
        <div class="list-icons">
          <a class="list-icons-item" data-action="collapse"></a>
          <a class="list-icons-item" data-action="reload"></a>
        </div>
      </div>

    </div>
    <div class="card-body">
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
            <!-- <th class="text-center">Actions</th> -->
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
                <td><?php echo ucfirst($triplists['t_start_date']); ?></td>
                <!-- <td>tgl kirim</td> -->
                <td><span class="badge <?php echo ($triplists['t_trip_status'] == 'Pending') ? 'badge-info' : 'badge-success'; ?> "><?php echo ($triplists['t_trip_status'] == 'Pending') ? 'Pending' : 'Completed'; ?></span></td>
                <!-- <td class="text-center">
                  <div>
                    <button href="<?php echo base_url(); ?>wo/proses_trip/<?php echo output($triplists['t_id']); ?>" class="btn btn-sm bg-teal-400"><i class="icon-paperplane mr-2"></i> Proses</button>
                    <button id="btn-proses" data-id="<?php echo output($triplists['t_id']); ?>" onclick="getDetail(this)" class="btn btn-sm bg-teal-400""><i class=" icon-paperplane mr-2"></i> Ambil</button>
                  </div>
                </td> -->
              </tr>
          <?php }
          } ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
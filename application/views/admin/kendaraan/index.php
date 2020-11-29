<!-- Page header -->
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Data - Kendaraan</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="<?= base_url('dashboard') ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Home</a>
        <!-- <a href="datatable_basic.html" class="breadcrumb-item">Kendaraan</a> -->
        <span class="breadcrumb-item active">Kendaraan</span>
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
      <h5 class="card-title">Tabel Data Kendaraan</h5>
      <div class="header-elements">
        <div class="list-icons">
          <a class="list-icons-item" data-action="collapse"></a>
          <a class="list-icons-item" data-action="reload"></a>
          <a class="list-icons-item" data-action="remove"></a>
        </div>
      </div>
    </div>

    <table class="table datatable-save-state">
      <thead>
        <tr>
          <th>NO</th>
          <th>NAMA KENDARAAN</th>
          <th>NO REGISTRASI</th>
          <th>MODEL</th>
          <th>NO CHASISS</th>
          <th>NO MESIN</th>
          <th>STATUS</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $count = 1;
        foreach ($vehiclelist as $vehiclelists) { ?>
          <tr>
            <td> <?php echo output($count);
                  $count++; ?></td>
            <td> <?php echo output($vehiclelists['v_name']); ?></td>
            <td> <?php echo output($vehiclelists['v_registration_no']); ?></td>
            <td> <?php echo output($vehiclelists['v_model']); ?></td>
            <td><?php echo output($vehiclelists['v_chassis_no']); ?></td>
            <td><?php echo output($vehiclelists['v_engine_no']); ?></td>
            <td> <span class="status-icon <?php echo ($vehiclelists['v_is_active'] == '1') ? 'bg-success' : 'bg-danger'; ?> "></span> <?php echo ($vehiclelists['v_is_active'] == '1') ? 'Active' : 'Inactive'; ?> </td>
            <td class="text-center">
              <div class="list-icons">
                <div class="dropdown">
                  <a href="#" class="list-icons-item" data-toggle="dropdown">
                    <i class="icon-menu9"></i>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                    <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                    <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
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
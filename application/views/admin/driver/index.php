<!-- Page header -->
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Data - Supir</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="<?= base_url('dashboard') ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Home</a>
        <!-- <a href="datatable_basic.html" class="breadcrumb-item">Kendaraan</a> -->
        <span class="breadcrumb-item active">Supir</span>
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
      <h5 class="card-title">Tabel Data Driver</h5>
      <div class="header-elements">
        <div class="list-icons">
          <!-- <a href="<?php echo base_url(); ?>drivers/adddrivers" class="btn btn-primary btn-sm">Tambah Driver Baru</a> -->
          <a class="list-icons-item" data-action="collapse"></a>
          <a class="list-icons-item" data-action="reload"></a>
        </div>
      </div>
    </div>

    <table class="table datatable-save-state">
      <thead>
        <tr>
          <th class="w-1">NO</th>
          <th>NAMA</th>
          <th>HP</th>
          <th>Address</th>
          <th>NO SIM</th>
          <th>TANGGAL EXP</th>
          <th>TANGGAL JOIN</th>
          <th>STATUS</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $count = 1;
        foreach ($driverslist as $val) {
          $user_detail = $this->drivers_model->getDetail($val->company);
        ?>
          <tr>
            <td> <?php echo output($count);
                  $count++; ?></td>
            <td> <?= $val->first_name; ?></td>
            <td> <?= $val->phone; ?></td>
            <td> <?= $user_detail->d_address; ?></td>
            <td> <?= $user_detail->d_licenseno; ?></td>
            <td> <?= $user_detail->d_license_expdate; ?></td>
            <td> <?= $user_detail->d_doj; ?></td>
            <td> <a onclick="updateStat(this)" data-id="<?= $val->id ?>" data-stat="<?= $val->active ?>" href="#"><span class="badge <?php echo ($val->active == '1') ? 'badge-success' : 'badge-danger'; ?> "><?php echo ($val->active == '1') ? 'Aktif' : 'Non Aktif'; ?></span></a> </td>
            <td class="text-center">
              <div class="list-icons">
                <div class="dropdown">
                  <a href="#" class="list-icons-item" data-toggle="dropdown">
                    <i class="icon-menu9"></i>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-pencil"></i>Ubah</a>
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

<script>
  function updateStat(e) {
    var val = $(e).attr('data-id')
    var stat = $(e).attr('data-stat')
    var link = $(this).attr('href')
    var swalInit = swal.mixin({
      buttonsStyling: false,
      confirmButtonClass: 'btn btn-primary',
      cancelButtonClass: 'btn btn-light'
    });
    console.log(stat);
    if (stat == '1') {
      swalInit({
        title: 'Are you sure?',
        text: "Non-aktifkan akun ini !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes !',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        buttonsStyling: false
      }).then(function(result) {
        if (result.value) {
          // swalInit(
          //   'Deleted!',
          //   'Your file has been deleted.',
          //   'success'
          // );
          window.location = base_url + "auth/deactivate/" + val
        }
      });
      // window.location = base_url + "auth/inactive/" + val
    } else {
      window.location = base_url + "auth/activate/" + val
    }
  }
</script>
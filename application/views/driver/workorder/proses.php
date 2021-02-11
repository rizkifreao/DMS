<!-- Page header -->
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Proses Trip</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="<?= base_url('dashboard') ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Home</a>
        <span class="breadcrumb-item active">Proses</span>
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
      <h5 class="card-title">Form Proses Trip</h5>
      <div class="header-elements">
        <div class="list-icons">
          <a class="list-icons-item" data-action="collapse"></a>
          <a class="list-icons-item" data-action="reload"></a>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header header-elements-inline">
        <h5 class="card-title"></h5>
        <div class="header-elements">
          <div class="list-icons">
            <a class="list-icons-item" data-action="collapse"></a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <label class="form-label">Nama Pelanggan</span></label>
            <div class="form-group">
              <input type="text" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_customer_id'] : '' ?>" name="t_customer_id" id="t_customer_id" class="form-control" placeholder="Nama Pelanggan" disabled>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="form-group">
              <label class="form-label">Kendaraan</span></label>
              <input type="text" value="<?= $vechicle->v_name ?>" class="form-control" placeholder="Nama Pelanggan" disabled>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="form-group">
              <label class="form-label">Alamat</span></label>
              <div class="input-group">
                <span class="input-group-prepend">
                  <span class="input-group-text bg-primary border-primary text-white">
                    <a href="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_trip_tolocation'] : '' ?>" target="_blank" style="color: inherit;" data-toggle="tooltip" title="Klik tanda untuk membuka maps !"><i class=" icon-map5"></i></a>
                  </span>
                </span>
                <input type="text" class="form-control border-left-0" data-toggle="tooltip" name="t_trip_fromlocation" id="t_trip_fromlocation" placeholder="Alamat" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_trip_fromlocation'] : '' ?>" disabled>
              </div>
              <span class="form-text text-muted">Klik ikon untuk membuka maps !</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <form method="post" action="<?php echo base_url(); ?>wo/savewo" enctype="multipart/form-data">
      <div class="card-body">
        <h3>Evidence Pengiriman Selesai</h3>
        <div class="row">
          <input type="hidden" name="t_id" id="t_id" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_id'] : '' ?>">

          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Photo Kilometer<span class="form-required">*</span></label>
              <input name="p_km" type="file" accept="image/*" capture="camera" class="form-control-uniform-custom">
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Photo Ukuran Bensin</span></label>
              <input name="p_fuel" type="file" accept="image/*" capture="camera" class="form-control-uniform-custom">
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Struk Pembelian Bensin</span></label>
              <input name="s_fuel" type="file" accept="image/*" capture="camera" class="form-control-uniform-custom">
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Total Pembelian Bensin</span></label>
              <input type="text" name="b_fuel" class="form-control" placeholder="Total Biaya Bensin">
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Biaya Pengeluaran</span></label>
              <input type="text" name="pengeluaran" class="form-control" placeholder="Total Pengeluaran">
            </div>
          </div>
        </div>
        <!-- END CARD BODY -->
        <input type="hidden" name="location" id="lokasi">
        <div class="card-footer d-flex justify-content-between align-items-center bg-teal-400 border-top-0">
          <button type="submit" class="btn bg-transparent text-white border-white border-2"> Batal
            <button type="submit" class="btn btn-outline bg-white text-white border-white border-2"> Simpan
              <i class="icon-paperplane ml-2"></i>
            </button>
        </div>
      </div>
    </form>
  </div>
  <!-- /state saving -->
</div>

<script>
  var x = document.getElementById("demo");
  $("#lokasi").val(latlong)
  // function showPosition(position) {
  //   latlong = position.coords.latitude + "," + position.coords.longitude
  //   console.log("Latitude: " + position.coords.latitude +
  //     "<br>Longitude: " + position.coords.longitude);
  //   $("#koordinat").val(position.coords.latitude + "," + position.coords.longitude)
  //   // x.innerHTML = "Latitude: " + position.coords.latitude +
  //   //   "<br>Longitude: " + position.coords.longitude;
  // }
</script>
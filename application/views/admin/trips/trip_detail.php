<!-- Page header -->
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Detail Pengiriman</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
        <a href="datatable_basic.html" class="breadcrumb-item">Detail Pengiriman</a>
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

<!-- Content area -->
<div class="content">

  <!-- Image grid -->
  <div class="mb-3">
    <h6 class="mb-0 font-weight-semibold">
      Data Pengiriman
    </h6>
    <span class="text-muted d-block">Workorder</span>
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
          <label class="form-label">No Pengiriman</span></label>
          <div class="form-group">
            <input type="text" value="<?php echo (isset($trip)) ? $trip->t_id : '' ?>" name="t_customer_id" id="t_customer_id" class="form-control" placeholder="Nama Pelanggan" disabled>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <label class="form-label">Nama Pelanggan</span></label>
          <div class="form-group">
            <input type="text" value="<?php echo (isset($trip)) ? $trip->t_customer_id : '' ?>" name="t_customer_id" id="t_customer_id" class="form-control" placeholder="Nama Pelanggan" disabled>
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
                  <a href="<?php echo (isset($trip)) ? $trip->t_trip_tolocation : '' ?>" target="_blank" style="color: inherit;" data-toggle="tooltip" title="Klik tanda untuk membuka maps !"><i class=" icon-map5"></i></a>
                </span>
              </span>
              <input type="text" class="form-control border-left-0" data-toggle="tooltip" name="t_trip_fromlocation" id="t_trip_fromlocation" placeholder="Alamat" value="<?php echo (isset($trip)) ? $trip->t_trip_fromlocation : '' ?>" disabled>
            </div>
            <span class="form-text text-muted">Klik ikon untuk membuka maps !</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php if ($det_trip) { ?>
    <?php $link_p_fuel = base_url('public')."/img/trips_".$trip->t_id."/".$det_trip->p_fuel ?>
    <?php $link_s_fuel = base_url('public')."/img/trips_".$trip->t_id."/".$det_trip->s_fuel ?>
    <?php $link_p_km = base_url('public')."/img/trips_".$trip->t_id."/".$det_trip->p_km ?>
    <div class="row">
      <div class="col-sm-6 col-xl-3">
        <div class="card">
          <div class="card-img-actions mx-1 mt-1">
            <img class="card-img img-fluid" src="<?= $link_p_fuel ?>" alt="">
            <div class="card-img-actions-overlay card-img">
              <a href="<?= $link_p_fuel ?>" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
                <i class="icon-plus3"></i>
              </a>

              <!-- <a href="<?= base_url('public') ?>/img/trips_4/4-Bukti_Bensin.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
              <i class="icon-link"></i>
            </a> -->
            </div>
          </div>

          <div class="card-body">
            <div class="d-flex align-items-start flex-nowrap">
              <div>
                <div class="font-weight-semibold mr-2">Photo Bensin</div>
                <span class="font-size-sm text-muted">Size: 432kb</span>
              </div>

              <div class="list-icons list-icons-extended ml-auto">
                <a href="<?= $link_p_fuel?>" download class="list-icons-item"><i class="icon-download top-0"></i></a>
                <!-- <a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card">
          <div class="card-img-actions mx-1 mt-1">
            <img class="card-img img-fluid" src="<?= $link_s_fuel ?>" alt="">
            <div class="card-img-actions-overlay card-img">
              <a href="<?= $link_s_fuel ?>" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
                <i class="icon-plus3"></i>
              </a>

              <!-- <a href="<?= base_url('public') ?>/img/trips_4/4-Bukti_Bensin.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
              <i class="icon-link"></i>
            </a> -->
            </div>
          </div>

          <div class="card-body">
            <div class="d-flex align-items-start flex-nowrap">
              <div>
                <div class="font-weight-semibold mr-2">Photo Struk Bensin</div>
                <span class="font-size-sm text-muted">Size: 332kb</span>
              </div>

              <div class="list-icons list-icons-extended ml-auto">
                <a href="<?= $link_s_fuel?>" download class="list-icons-item"><i class="icon-download top-0"></i></a>
                <!-- <a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card">
          <div class="card-img-actions mx-1 mt-1">
            <img class="card-img img-fluid" src="<?= $link_p_km ?>" alt="">
            <div class="card-img-actions-overlay card-img">
              <a href="<?= $link_p_km ?>" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
                <i class="icon-plus3"></i>
              </a>

              <!-- <a href="<?= base_url('public') ?>/img/trips_4/4-Bukti_Bensin.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
              <i class="icon-link"></i>
            </a> -->
            </div>
          </div>

          <div class="card-body">
            <div class="d-flex align-items-start flex-nowrap">
              <div>
                <div class="font-weight-semibold mr-2">Photo Kilometer</div>
                <span class="font-size-sm text-muted">Size: 632kb</span>
              </div>

              <div class="list-icons list-icons-extended ml-auto">
                <a href="<?= $link_p_km?>" download class="list-icons-item"><i class="icon-download top-0"></i></a>
                <!-- <a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } else { ?>
    Tidak Ada data
  <?php } ?>


</div>
<!-- /content area -->
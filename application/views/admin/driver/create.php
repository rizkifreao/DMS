<!-- Page header -->
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold"><?php echo (isset($vehicledetails)) ? 'Edit' : 'Tambah' ?> Data Drivers</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="<?= base_url('dashboard') ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Home</a>
        <a href="<?= base_url('drivers') ?>" class="breadcrumb-item">Drivers</a>
        <span class="breadcrumb-item active"><?php echo (isset($vehicledetails)) ? 'Edit' : 'Create' ?></span>
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
      <h5 class="card-title">Form <?php echo (isset($driverdetails)) ? 'Edit' : 'Tambah' ?> Data Driver</h5>
      <div class="header-elements">
        <div class="list-icons">
          <a class="list-icons-item" data-action="collapse"></a>
          <a class="list-icons-item" data-action="reload"></a>
        </div>
      </div>
    </div>

    <form method="post" id="vehicle_add" action="<?php echo base_url(); ?>drivers/<?php echo (isset($driverdetails)) ? 'updatedriver' : 'insertdriver'; ?>">
      <div class="card-body">
        <div class="row">
          <input type="hidden" name="d_id" id="d_id" value="<?php echo (isset($driverdetails)) ? $driverdetails[0]['d_id'] : '' ?>">

          <div class="col-sm-6 col-md-3">
            <label class="form-label">Nama Driver<span class="form-required">*</span></label>
            <div class="form-group">
              <input type="text" name="d_name" id="d_name" class="form-control" placeholder="Driver Name" value="<?php echo (isset($driverdetails)) ? $driverdetails[0]['d_name'] : '' ?>">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">No Telp<span class="form-required">*</span></label>
              <input type="text" name="d_mobile" value="<?php echo (isset($driverdetails)) ? $driverdetails[0]['d_mobile'] : '' ?>" class="form-control" placeholder="Mobile">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Umur<span class="form-required">*</span></label>
              <input type="text" name="d_age" value="<?php echo (isset($driverdetails)) ? $driverdetails[0]['d_age'] : '' ?>" class="form-control" placeholder="Age">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">No SIM<span class="form-required">*</span></label>
              <input type="text" name="d_licenseno" value="<?php echo (isset($driverdetails)) ? $driverdetails[0]['d_licenseno'] : '' ?>" class="form-control" placeholder="License No">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label>Tgl Expire SIM<span class="form-required">*</label>
              <div class="input-group">
                <span class="input-group-prepend">
                  <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="d_license_expdate" value="<?php echo (isset($driverdetails)) ? $driverdetails[0]['d_license_expdate'] : '' ?>">
              </div>
              <!-- <input type="text" name="d_license_expdate" value="<?php echo (isset($driverdetails)) ? $driverdetails[0]['d_license_expdate'] : '' ?>" class="form-control datepickerpastdisable" placeholder="License Expiry Date"> -->
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Total Mengendarai<span class="form-required">*</span></label>
              <input type="text" name="d_total_exp" value="<?php echo (isset($driverdetails)) ? $driverdetails[0]['d_total_exp'] : '' ?>" class="form-control" placeholder="Total Experiance">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label>Tanggal Registrasi<span class="form-required">*</label>
              <div class="input-group">
                <span class="input-group-prepend">
                  <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="d_doj" value="<?php echo (isset($driverdetails)) ? $driverdetails[0]['d_doj'] : '' ?>" class="form-control datepicker" placeholder="Date of Joining">
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Reference/Notes</label>
              <input type="text" name="d_ref" value="<?php echo (isset($driverdetails)) ? $driverdetails[0]['d_ref'] : '' ?>" class="form-control" placeholder="Reference or Notes">
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Alamat<span class="form-required">*</span></label>
              <textarea class="form-control" autocomplete="off" placeholder="Address" name="d_address"><?php echo (isset($driverdetails)) ? $driverdetails[0]['d_address'] : '' ?></textarea>

            </div>
          </div>
        </div>
      </div>
      <input type="hidden" id="d_created_by" name="d_created_by" value="<?php echo output($this->session->userdata['user_id']); ?>">
      <input type="hidden" id="d_created_date" name="d_created_date" value="<?php echo date('Y-m-d h:i:s'); ?>">
      <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary"> <?php echo (isset($driverdetails)) ? 'Update Driver' : 'Add Driver' ?>
          <i class="icon-paperplane ml-2"></i>
        </button>
      </div>
    </form>
  </div>
  <!-- /state saving -->
</div>
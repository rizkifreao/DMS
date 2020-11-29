<!-- Page header -->
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold"><?php echo (isset($vehicledetails)) ? 'Edit' : 'Tambah' ?> Data Kendaraan</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="<?= base_url('dashboard') ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Home</a>
        <a href="<?= base_url('kendaraan') ?>" class="breadcrumb-item">Kendaraan</a>
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
      <h5 class="card-title">Form <?php echo (isset($vehicledetails)) ? 'Edit' : 'Tambah' ?> Data</h5>
      <div class="header-elements">
        <div class="list-icons">
          <a class="list-icons-item" data-action="collapse"></a>
          <a class="list-icons-item" data-action="reload"></a>
        </div>
      </div>
    </div>

    <form method="post" id="vehicle_add" action="<?php echo base_url(); ?>kendaraan/<?php echo (isset($vehicledetails)) ? 'updatevehicle' : 'insertvehicle'; ?>">
      <div class="card-body">
        <div class="row">
          <input type="hidden" name="v_id" id="v_id" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_id'] : '' ?>">

          <div class="col-sm-6 col-md-4">
            <label class="form-label">Nomor Registrasi</label>
            <div class="form-group">
              <input type="text" name="v_registration_no" id="v_registration_no" class="form-control" placeholder="Registration Number" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_registration_no'] : '' ?>">
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <label class="form-label">Nama Kendaraan</label>
            <div class="form-group">
              <input type="text" name="v_name" id="v_name" class="form-control" placeholder="Vehicle Name" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_name'] : '' ?>">
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="form-group">
              <label class="form-label">Model</label>
              <input type="text" name="v_model" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_model'] : '' ?>" class="form-control" placeholder="Model">
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="form-group">
              <label class="form-label">Nomor Chassis</label>
              <input type="text" name="v_chassis_no" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_chassis_no'] : '' ?>" class="form-control" placeholder="Chassis No">
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="form-group">
              <label class="form-label">Nomor Mesin</label>
              <input type="text" name="v_engine_no" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_engine_no'] : '' ?>" class="form-control" placeholder="Engine No">
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="form-group">
              <label class="form-label">Manufaktur</label>
              <input type="text" name="v_manufactured_by" value="<?php echo (isset($vehicledetails)) ? $vehicledetails[0]['v_manufactured_by'] : '' ?>" class="form-control" placeholder="Manufactured By">
            </div>
          </div>
        </div>
      </div>
      <input type="hidden" id="v_created_by" name="v_created_by" value="<?php echo output($this->session->userdata['user_id']); ?>">
      <input type="hidden" id="v_created_date" name="v_created_date" value="<?php echo date('Y-m-d h:i:s'); ?>">
      <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary"> <?php echo (isset($vehicledetails)) ? 'Update Vehicle' : 'Add Vehicle' ?>
          <i class="icon-paperplane ml-2"></i>
        </button>
      </div>
    </form>
  </div>
  <!-- /state saving -->
</div>
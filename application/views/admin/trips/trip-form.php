<!-- Page header -->
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold"><?php echo (isset($vehicledetails)) ? 'Edit' : 'Tambah' ?> Jadwal Pengiriman</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="<?= base_url('dashboard') ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Home</a>
        <a href="<?= base_url('drivers') ?>" class="breadcrumb-item">Trips</a>
        <span class="breadcrumb-item active"><?php echo (isset($tripdetails)) ? 'Edit' : 'Create' ?></span>
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
      <h5 class="card-title">Form <?php echo (isset($tripdetails)) ? 'Edit' : 'Tambah' ?> Jadwal Pengiriman Barang</h5>
      <div class="header-elements">
        <div class="list-icons">
          <a class="list-icons-item" data-action="collapse"></a>
          <a class="list-icons-item" data-action="reload"></a>
        </div>
      </div>
    </div>

    <form method="post" id="vehicle_add" action="<?php echo base_url(); ?>trips/<?php echo (isset($tripdetails)) ? 'updatetrips' : 'inserttrips'; ?>" autocomplete="off">
      <div class="card-body">
        <div class="row">
          <input type="hidden" name="t_id" id="t_id" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_id'] : '' ?>">

          <div class="col-sm-6 col-md-3">
            <label class="form-label">Nama Pelanggan<span class="form-required">*</span></label>
            <div class="form-group">
              <input type="text" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_customer_id'] : '' ?>" name="t_customer_id" id="t_customer_id" class="form-control" required placeholder="Nama Pelanggan">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Kendaraan<span class="form-required">*</span></label>
              <select id="t_vechicle" class="form-control" required name="t_vechicle">
                <option value="">Pilih Kendaraan</option>
                <?php foreach ($vechiclelist as $key => $vechiclelists) { ?>
                  <option <?php if ((isset($tripdetails)) && $tripdetails[0]['t_vechicle'] == $vechiclelists['v_id']) {
                            echo 'selected';
                          } ?> value="<?php echo output($vechiclelists['v_id']) ?>"><?php echo output($vechiclelists['v_name']) . ' - ' . output($vechiclelists['v_registration_no']); ?></option>
                <?php  } ?>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Supir<span class="form-required">*</span></label>
              <select id="t_driver" class="form-control" required name="t_driver">
                <option value="">Pilih Supir</option>
                <?php foreach ($driverlist as $key => $driverlists) { ?>
                  <option <?php if ((isset($tripdetails)) && $tripdetails[0]['t_driver'] == $driverlists->id) {
                            echo 'selected';
                          } ?> value="<?php echo output($driverlists->id) ?>"><?php echo output($driverlists->first_name); ?></option>
                <?php  } ?>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Trip Type<span class="form-required">*</span></label>
              <select id="t_type" class="form-control" required name="t_type">
                <option value="">Select Trip Type</option>
                <option <?php if ((isset($tripdetails)) && $tripdetails[0]['t_type'] == 'singletrip') {
                          echo 'selected';
                        } ?> value="singletrip">Single Trip</option>
                <option <?php if ((isset($tripdetails)) && $tripdetails[0]['t_type'] == 'roundtrip') {
                          echo 'selected';
                        } ?> value="roundtrip">Round Trip</option>
              </select>
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Alamat</label>
              <input type="text" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_trip_fromlocation'] : '' ?>" name="t_trip_fromlocation" id="t_trip_fromlocation" class="form-control" required placeholder="Alamat">
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Link Maps<span class="form-required">*</span></label>
              <div class="input-group">
                <span class="input-group-prepend">
                  <span class="input-group-text bg-primary border-primary text-white">
                    <a href="https://maps.google.com" target="_blank" style="color: inherit;" data-toggle="tooltip" title="Maps Here !"><i class=" icon-pin-alt"></i></a>
                  </span>
                </span>
                <input type="text" class="form-control  border-left-0" data-toggle="tooltip" title="Klik tanda untuk membuka maps !" name="t_trip_tolocation" id="t_trip_tolocation" placeholder="Link alamat" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_trip_tolocation'] : '' ?>">
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Tanggal Kirim<span class="form-required">*</span></label>
              <div class="input-group">
                <span class="input-group-prepend">
                  <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" required name="t_start_date" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_start_date'] : '' ?>">
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Biaya Transport<span class="form-required">*</span></label>
              <input type="text" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_trip_amount'] : '' ?>" name="t_trip_amount" value="" class="form-control" required placeholder="Total Amount">
            </div>
          </div>


          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Payment Status</label>
              <select name="t_trip_paymentstatus" id="t_trip_paymentstatus" class="form-control" required>
                <option value="">Payment Status</option>
                <option <?php if ((isset($tripdetails)) && $tripdetails[0]['t_trip_paymentstatus'] == 'completed') {
                          echo 'selected';
                        } ?> value="completed">completed</option>
                <option <?php if ((isset($tripdetails)) && $tripdetails[0]['t_trip_paymentstatus'] == 'pending') {
                          echo 'selected';
                        } ?> value="pending">pending</option>
              </select>

            </div>
          </div>
        </div>

        <?php if (isset($tripdetails)) { ?>
          <h6>Trip Expenses</h6>
          <div class="row">
            <div class="col-sm-6 col-md-3 ">
              <div class="form-group">
                <input type="text" class="form-control" required id="e_expense_type" name="e_expense_type[]" value="<?php echo (isset($trip_expense) && !empty($trip_expense)) ? $trip_expense[0]['e_expense_type'] : '' ?>" placeholder="Expense Type">
              </div>
            </div>
            <div class="col-sm-6 col-md-3 ">
              <div class="form-group">
                <input type="text" class="form-control" required id="e_expense_desc" name="e_expense_desc[]" value="<?php echo (isset($trip_expense) && !empty($trip_expense)) ? $trip_expense[0]['e_expense_desc'] : '' ?>" placeholder="Expense description">
              </div>
            </div>
            <div class="col-sm-3 col-md-3">
              <div class="form-group">
                <input type="text" class="form-control" required id="e_expense_amount" name="e_expense_amount[]" value="<?php echo (isset($trip_expense) && !empty($trip_expense)) ? $trip_expense[0]['e_expense_amount'] : '' ?>" placeholder="Value">
              </div>
            </div>
            <div class="col-sm-3 col-md-3">
              <div class="input-group-btn">
                <button class="btn btn-success" type="button" onclick="expense_fields();"> <span class="fe fe-plus" aria-hidden="true"></span> </button>
              </div>
            </div>
          </div>
          <?php $trip_expense_all = array();
          if (isset($trip_expense)) {
            $i = 1;
            array_shift($trip_expense);
            foreach ($trip_expense as $trip_expenses) {
          ?>
              <div class="removeclass<?php echo output($i) ?>">
                <div class="row ">
                  <div class="col-sm-6 col-md-3 ">
                    <div class="form-group">
                      <input type="text" class="form-control" required id="e_expense_type<?php echo output($i) ?>" name="e_expense_type[]" value="<?php echo output($trip_expenses['e_expense_type']); ?>" placeholder="Expense Type">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3 ">
                    <div class="form-group">
                      <input type="text" class="form-control" required id="e_expense_desc<?php echo output($i) ?>" name="e_expense_desc[]" value="<?php echo output($trip_expenses['e_expense_desc']); ?>" placeholder="Expense description">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <input type="text" class="form-control" required id="e_expense_amount<?php echo output($i) ?>" name="e_expense_amount[]" value="<?php echo output($trip_expenses['e_expense_amount']); ?>" placeholder="Value">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="input-group-btn">
                      <button class="btn btn-danger" type="button" onclick="remove_expense_fields(<?php echo output($i) ?>);"> <span class="fe fe-minus" aria-hidden="true"></span> </button>
                    </div>
                  </div>
                </div>
              </div>
        <?php $i++;
            }
          }
        } ?>
      </div>
      <!-- END CARD BODY -->
      <input type="hidden" name="t_created_by" id="t_created_by" value="<?= $this->session->get_userdata()['user_id'] ?>">
      <input type="hidden" id="t_created_date" name="t_created_date" value="<?php echo date('Y-m-d h:i:s'); ?>">
      <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary"> Simpan
          <i class="icon-paperplane ml-2"></i>
        </button>
      </div>
    </form>
  </div>
  <!-- /state saving -->
</div>
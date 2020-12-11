<!-- Page header -->
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold"><?php echo (isset($vehicledetails)) ? 'Edit' : 'Tambah' ?> Data Perjalanan</span></h4>
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
      <h5 class="card-title">Form <?php echo (isset($tripdetails)) ? 'Edit' : 'Tambah' ?> Data Driver</h5>
      <div class="header-elements">
        <div class="list-icons">
          <a class="list-icons-item" data-action="collapse"></a>
          <a class="list-icons-item" data-action="reload"></a>
        </div>
      </div>
    </div>

    <form method="post" id="vehicle_add" action="<?php echo base_url(); ?>drivers/<?php echo (isset($tripdetails)) ? 'updatedriver' : 'insertdriver'; ?>">
      <div class="card-body">
        <div class="row">
          <input type="hidden" name="t_id" id="t_id" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_id'] : '' ?>">

          <div class="col-sm-6 col-md-3">
            <label class="form-label">Customer Name<span class="form-required">*</span></label>
            <div class="form-group">
              <select id="t_customer_id" class="form-control" name="t_customer_id">
                <option value="">Select Customer</option>
                <?php foreach ($customerlist as $key => $customerlists) { ?>
                  <option <?php if ((isset($tripdetails)) && $tripdetails[0]['t_customer_id'] == $customerlists['c_id']) {
                            echo 'selected';
                          } ?> value="<?php echo output($customerlists['c_id']) ?>"><?php echo output($customerlists['c_name']) ?></option>
                <?php  } ?>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Vechicle<span class="form-required">*</span></label>
              <select id="t_vechicle" class="form-control" name="t_vechicle">
                <option value="">Select Vechicle</option>
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
              <label class="form-label">Driver<span class="form-required">*</span></label>
              <select id="t_driver" class="form-control" name="t_driver">
                <option value="">Select Driver</option>
                <?php foreach ($driverlist as $key => $driverlists) { ?>
                  <option <?php if ((isset($tripdetails)) && $tripdetails[0]['t_driver'] == $driverlists['d_id']) {
                            echo 'selected';
                          } ?> value="<?php echo output($driverlists['d_id']) ?>"><?php echo output($driverlists['d_name']); ?></option>
                <?php  } ?>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Trip Type<span class="form-required">*</span></label>
              <select id="t_type" class="form-control" name="t_type">
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
              <label class="form-label">Trip Start Location<span class="form-required">*</span></label>
              <input type="text" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_trip_fromlocation'] : '' ?>" name="t_trip_fromlocation" id="t_trip_fromlocation" class="form-control" placeholder="Trip Start Location">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Trip End Location<span class="form-required">*</span></label>
              <input type="text" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_trip_tolocation'] : '' ?>" name="t_trip_tolocation" id="t_trip_tolocation" class="form-control" placeholder="Trip End Location">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Approx Total KM<span class="form-required">*</span></label>
              <input type="text" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_totaldistance'] : '' ?>" readonly="true" name="t_totaldistance" id="t_totaldistance" class="form-control" placeholder="Approx Total KM">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Trip Start Date<span class="form-required">*</span></label>
              <input type="text" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_start_date'] : '' ?>" name="t_start_date" value="" class="form-control datepicker" placeholder="Trip Start Date">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Trip End Date<span class="form-required">*</span></label>
              <input type="text" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_end_date'] : '' ?>" name="t_end_date" value="" class="form-control datepicker" placeholder="Trip End Date">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Total Amount<span class="form-required">*</span></label>
              <input type="text" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_trip_amount'] : '' ?>" name="t_trip_amount" value="" class="form-control" placeholder="Total Amount">
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Trip Status</label>
              <select name="t_trip_status" id="t_trip_status" class="form-control">
                <option value="">Trip Status</option>
                <option <?php if ((isset($tripdetails)) && $tripdetails[0]['t_trip_status'] == 'Completed') {
                          echo 'selected';
                        } ?> value="Completed">Completed</option>
                <option <?php if ((isset($tripdetails)) && $tripdetails[0]['t_trip_status'] == 'OnGoing') {
                          echo 'selected';
                        } ?> value="OnGoing">OnGoing</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="form-group">
              <label class="form-label">Payment Status</label>
              <select name="t_trip_paymentstatus" id="t_trip_paymentstatus" class="form-control">
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
          <div class="col-sm-6 col-md-3 t_trip_pendingamount" style="display: <?php echo ((isset($tripdetails)) && $tripdetails[0]['t_trip_paymentstatus'] == 'pending') ? 'block' : 'none' ?>">
            <div class="form-group">
              <label class="form-label">Pending Amount<span class="form-required">*</span></label>
              <input type="text" value="<?php echo (isset($tripdetails)) ? $tripdetails[0]['t_trip_pendingamount'] : '' ?>" name="t_trip_pendingamount" value="" class="form-control" placeholder="Total Pending Amount">
            </div>
          </div>
        </div>

      <?php if (isset($tripdetails)) { ?>
        <h6>Trip Expenses</h6>
        <div class="row">
          <div class="col-sm-6 col-md-3 ">
            <div class="form-group">
              <input type="text" class="form-control" id="e_expense_type" name="e_expense_type[]" value="<?php echo (isset($trip_expense) && !empty($trip_expense)) ? $trip_expense[0]['e_expense_type'] : '' ?>" placeholder="Expense Type">
            </div>
          </div>
          <div class="col-sm-6 col-md-3 ">
            <div class="form-group">
              <input type="text" class="form-control" id="e_expense_desc" name="e_expense_desc[]" value="<?php echo (isset($trip_expense) && !empty($trip_expense)) ? $trip_expense[0]['e_expense_desc'] : '' ?>" placeholder="Expense description">
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="form-group">
              <input type="text" class="form-control" id="e_expense_amount" name="e_expense_amount[]" value="<?php echo (isset($trip_expense) && !empty($trip_expense)) ? $trip_expense[0]['e_expense_amount'] : '' ?>" placeholder="Value">
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
                    <input type="text" class="form-control" id="e_expense_type<?php echo output($i) ?>" name="e_expense_type[]" value="<?php echo output($trip_expenses['e_expense_type']); ?>" placeholder="Expense Type">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 ">
                  <div class="form-group">
                    <input type="text" class="form-control" id="e_expense_desc<?php echo output($i) ?>" name="e_expense_desc[]" value="<?php echo output($trip_expenses['e_expense_desc']); ?>" placeholder="Expense description">
                  </div>
                </div>
                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <input type="text" class="form-control" id="e_expense_amount<?php echo output($i) ?>" name="e_expense_amount[]" value="<?php echo output($trip_expenses['e_expense_amount']); ?>" placeholder="Value">
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
      <input type="hidden" id="d_created_by" name="d_created_by" value="<?php echo output($this->session->userdata['user_id']); ?>">
      <input type="hidden" id="d_created_date" name="d_created_date" value="<?php echo date('Y-m-d h:i:s'); ?>">
      <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary"> <?php echo (isset($tripdetails)) ? 'Update Driver' : 'Add Driver' ?>
          <i class="icon-paperplane ml-2"></i>
        </button>
      </div>
    </form>
  </div>
  <!-- /state saving -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Clinic Management</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url()?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100 mx-auto">
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Desk Management</h2>
            <div class="auto-form-wrapper">
              <h3 style="text-align: center;">Login Portal</h3><br/>
              <?php if($this->session->flashdata('loginfail') != "") { ?>
              <div class="text-center text-danger"><?php echo $this->session->flashdata('loginfail')?></div>
              <?php } ?>
              <form id="sign_in" method="post" action="<?php echo base_url('login')?>">
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="email_id" placeholder="Email-ID" required autofocus>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Sign In</button>
                </div>
              </form>
            </div>
            <p class="footer-text text-center text-dark">All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?=base_url()?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?=base_url()?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?=base_url()?>assets/js/off-canvas.js"></script>
  <script src="<?=base_url()?>assets/js/hoverable-collapse.js"></script>
  <script src="<?=base_url()?>assets/js/misc.js"></script>
  <script src="<?=base_url()?>assets/js/settings.js"></script>
  <script src="<?=base_url()?>assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
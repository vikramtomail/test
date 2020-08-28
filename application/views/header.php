<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Chroma Admin Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url()?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/vendors/icheck/skins/all.css">

  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" />
  
  <script src="<?=base_url()?>assets/js/jquery-3.4.1.min.js"></script>

  <style type="text/css">
    .nav .nav-item.dropdown .navbar-dropdown, .navbar-nav .nav-item.dropdown .navbar-dropdown {
    /*padding: 0 0 0px;*/
    top: calc(68px - 5px);
  }

  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-success">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="<?=base_url()?>assets/#" data-toggle="dropdown" aria-expanded="false">
              <div class="dropdown-toggle-wrapper">
                <div class="inner">
                  <div class="inner">
                    <span class="profile-text font-weight-bold"><?php echo $this->session->name ?></span>
                    <small class="profile-text small"><?php echo $this->session->email_id ?></small>
                  </div>
                  <div class="inner">
                    <div class="icon-wrapper">
                      <i class="mdi mdi-chevron-down"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item" href="<?=base_url()?>login/logout">
                Sign Out
              </a>              
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas sidebar-dark" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>dashboard">
              <i class="menu-icon icon-diamond"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>dashboard/ticket_list">
              <i class="menu-icon icon-user"></i>
              <span class="menu-title">Ticket List</span>
            </a>
          </li>
        </ul>
      </nav>



      
      
        
        
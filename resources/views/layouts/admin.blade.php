<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="src/assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="src/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="src/assets/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="src/asssets/images/favicon.ico" />
  </head>
  <body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper">
        <a href="/admin/admin">
          <img class="logo" src="src/assets/images/logo.svg" alt="">
          <img class="logo-mini" src="src/assets/images/logo_mini.svg" alt="">
        </a>
      </div>

      </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
      <!-- partial:partials/_sidebar.html -->
      <div class="sidebar">
        <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="src/assets/images/profile/male/image_1.png" alt="profile image">
          </div>
          <div class="info-wrapper">
            <p class="user-name">Lailatul Ulwiyah </p>
            
          </div>
        </div>
        <ul class="navigation-menu">
          <li class="nav-category-divider">MAIN</li>
          <li>
            <a href="admin">
              <span class="link-title">Dashboard</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li>
            <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">Schedule</span>
              <i class="mdi mdi-flask link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="sample-pages">
              <li class="active">
                <a href="{{('/schedulehaji')}}"><i class="menu-icon fa fa-book"></i>Schedule Haji</a>
              </li>
              <li>
                <a href="scheduleumroh" target="_blank">Schedule Umroh</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">Gallery</span>
              <i class="mdi mdi-bullseye link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="ui-elements">
              <li>
                <a href="pages/ui-components/buttons.html">Haji</a>
              </li>
              <li>
                <a href="pages/ui-components/tables.html">Umroh</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="/inputagenda">
              <span class="link-title">Pengguna</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- partial -->
      <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="content-viewport">
            <div class="row">
              <div class="col-12 py-5">
                <h4>Dashboard</h4>
                <p class="text-gray">Kelompok 7<br>Lailatul Ulwiyah</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p>30%</p>
                      <p>+06.2%</p>
                    </div>
                    <p class="text-black">Traffic</p>
                    <div class="wrapper w-50 mt-4">
                      <canvas height="45" id="stat-line_1"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p>43%</p>
                      <p>+15.7%</p>
                    </div>
                    <p class="text-black">Conversion</p>
                    <div class="wrapper w-50 mt-4">
                      <canvas height="45" id="stat-line_2"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p>23%</p>
                      <p>+02.7%</p>
                    </div>
                    <p class="text-black">Bounce Rate</p>
                    <div class="wrapper w-50 mt-4">
                      <canvas height="45" id="stat-line_3"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-6 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="d-flex justify-content-between">
                      <p>75%</p>
                      <p>- 53.34%</p>
                    </div>
                    <p class="text-black">Marketing</p>
                    <div class="wrapper w-50 mt-4">
                      <canvas height="45" id="stat-line_4"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 equel-grid">
                <div class="grid">
                  <div class="grid-body d-flex flex-column h-100">
                    <div class="wrapper">
                      <div class="d-flex justify-content-between">
                        <div class="split-header">
                          <img class="img-ss mt-1 mb-1 mr-2" src="src/assets/images/social-icons/instagram.svg" alt="instagram">
                          <p class="card-title">Followers Growth</p>
                        </div>
                        <div class="wrapper">
                          <button class="btn action-btn btn-xs component-flat pr-0" type="button"><i class="mdi mdi-access-point text-muted mdi-2x"></i></button>
                          <button class="btn action-btn btn-xs component-flat pr-0" type="button"><i class="mdi mdi-cloud-download-outline text-muted mdi-2x"></i></button>
                        </div>
                      </div>
                      <div class="d-flex align-items-end pt-2 mb-4">
                        <h4>16.2K</h4>
                        <p class="ml-2 text-muted">New Followers</p>
                      </div>
                    </div>
                    <div class="mt-auto">
                      <canvas class="curved-mode" id="followers-bar-chart" height="220"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 equel-grid">
                <div class="grid">
                  <div class="grid-body">
                    <p class="card-title">Campaign</p>
                    <div id="radial-chart"></div>
                    <h4 class="text-center">$23,350.00</h4>
                    <p class="text-center text-muted">Used balance this billing cycle</p>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-5 col-md-6 col-sm-12 equel-grid">
                <div class="grid">
                  <div class="grid-body">
                    <div class="split-header">
                      <p class="card-title">Available Balance</p>
                      <span class="btn action-btn btn-xs component-flat" data-toggle="tooltip" data-placement="left" title="Available balance since the last week">
                        <i class="mdi mdi-information-outline text-muted mdi-2x"></i>
                      </span>
                    </div>
                    <div class="d-flex align-items-end mt-2">
                      <h3>26.00453100</h3>
                      <p class="ml-1 font-weight-bold">BTC</p>
                    </div>
                    <div class="d-flex mt-2">
                      <div class="wrapper d-flex pr-4">
                        <small class="text-success font-weight-medium mr-2">USD</small>
                        <small class="text-gray">$103,342.50</small>
                      </div>
                      <div class="wrapper d-flex">
                        <small class="text-primary font-weight-medium mr-2">EUR</small>
                        <small class="text-gray">$91,105.00</small>
                      </div>
                    </div>
                    <div class="d-flex flex-row mt-4 mb-4">
                      <button class="btn btn-outline-light text-gray component-flat w-50 mr-2" type="button">SEND</button>
                      <button class="btn btn-primary w-50 ml-2" type="button">RECEIVE</button>
                    </div>
                    <div class="d-flex mt-5 mb-3">
                      <small class="mb-0 text-primary">Recent Transaction (3)</small>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2">
                      <p class="text-black">Received Bitcoin</p>
                      <p class="text-gray">+0.00005462 BTC</p>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2">
                      <p class="text-black">Sent Bitcoin</p>
                      <p class="text-gray">-0.00001446 BTC</p>
                    </div>
                    <div class="d-flex justify-content-between pt-2">
                      <p class="text-black">Sent Bitcoin</p>
                      <p class="text-gray">-0.00003573 BTC</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-12 equel-grid">
                <div class="grid widget-revenue-card">
                  <div class="grid-body d-flex flex-column h-100">
                    <div class="split-header">
                      <p class="card-title">Server Load</p>
                      <div class="content-wrapper v-centered">
                        <small class="text-muted">2h ago</small>
                        <span class="btn action-btn btn-refresh btn-xs component-flat">
                          <i class="mdi mdi-autorenew text-muted mdi-2x"></i>
                        </span>
                      </div>
                    </div>
                    <div class="mt-auto">
                      <canvas id="cpu-performance" height="80"></canvas>
                      <h3 class="font-weight-medium mt-4">69.05%</h3>
                      <p class="text-gray">Storage is getting full</p>
                      <div class="w-50">
                        <div class="d-flex justify-content-between text-muted mt-3">
                          <small>Usage</small> <small>35.62 GB / 2TB</small>
                        </div>
                        <div class="progress progress-slim mt-2">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 equel-grid">
                <div class="grid">
                  <div class="grid-body py-3">
                    <p class="card-title ml-n1">Order History</p>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover table-sm">
                      <thead>
                        <tr class="solid-header">
                          <th colspan="2" class="pl-4">Customer</th>
                          <th>Order No</th>
                          <th>Purchased On</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="pr-0 pl-4">
                            <img class="profile-img img-sm" src="src/assets/images/profile/male/image_4.png" alt="profile image">
                          </td>
                          <td class="pl-md-0">
                            <small class="text-black font-weight-medium d-block">Barbara Curtis</small>
                            <span class="text-gray">
                              <span class="status-indicator rounded-indicator small bg-primary"></span>Account Deactivated </span>
                          </td>
                          <td>
                            <small>8523537435</small>
                          </td>
                          <td> Just Now </td>
                        </tr>
                        <tr>
                          <td class="pr-0 pl-4">
                            <img class="profile-img img-sm" src="src/assets/images/profile/male/image_3.png" alt="profile image">
                          </td>
                          <td class="pl-md-0">
                            <small class="text-black font-weight-medium d-block">Charlie Hawkins</small>
                            <span class="text-gray">
                              <span class="status-indicator rounded-indicator small bg-success"></span>Email Verified </span>
                          </td>
                          <td>
                            <small>9537537436</small>
                          </td>
                          <td> Mar 04, 2018 11:37am </td>
                        </tr>
                        <tr>
                          <td class="pr-0 pl-4">
                            <img class="profile-img img-sm" src="src/assets/images/profile/female/image_2.png" alt="profile image">
                          </td>
                          <td class="pl-md-0">
                            <small class="text-black font-weight-medium d-block">Nina Bates</small>
                            <span class="text-gray">
                              <span class="status-indicator rounded-indicator small bg-warning"></span>Payment On Hold </span>
                          </td>
                          <td>
                            <small>7533567437</small>
                          </td>
                          <td> Mar 13, 2018 9:41am </td>
                        </tr>
                        <tr>
                          <td class="pr-0 pl-4">
                            <img class="profile-img img-sm" src="src/assets/images/profile/male/image_10.png" alt="profile image">
                          </td>
                          <td class="pl-md-0">
                            <small class="text-black font-weight-medium d-block">Hester Richards</small>
                            <span class="text-gray">
                              <span class="status-indicator rounded-indicator small bg-success"></span>Email Verified </span>
                          </td>
                          <td>
                            <small>5673467743</small>
                          </td>
                          <td> Feb 21, 2018 8:34am </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <a class="border-top px-3 py-2 d-block text-gray" href="#">
                    <small class="font-weight-medium"><i class="mdi mdi-chevron-down mr-2"></i>View All Order History</small>
                  </a>
                </div>
              </div>  
              </div>
            </div>
          </div>
        </div>
        <!-- content viewport ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="row">
            <div class="col-sm-6 text-center text-sm-right order-sm-1">
              <ul class="text-gray">
                <li><a href="#">Terms of use</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
              <small class="text-muted d-block">Copyright © 2020. All kelompok 7</small>
              <small class="text-gray mt-2">Handcrafted With Fauzi Abdillah Al Fatah</small>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="src/assets/vendors/js/core.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="src/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="src/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="src/assets/js/charts/chartjs.addon.js"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="src/assets/js/template.js"></script>
    <script src="src/assets/js/dashboard.js"></script>
    <!-- endbuild -->
  </body>
</html>
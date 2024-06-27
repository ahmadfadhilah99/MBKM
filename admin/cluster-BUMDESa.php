<?php
    include_once('../config.php');
    
    $info = $_GET['type'];

    $data = mysqli_query($mysqli, "SELECT * FROM `tbl_cluster` WHERE `type_cluster`='$info'");

    $type = ["Kakao", "Pendidikan", "Perikanan", "Peternakan", "Kesehatan", "Stunting", "BUMDESa", "Dokumentasi"];

    $no=0;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>MBKM Membangun Desa</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css" />
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css" />
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css" />
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css" />
    
    
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />
  </head>
  <body>
  <?php
        session_start();

        if ($_SESSION['role'] == '') {
            header("location:auth/login.php?pesan=gagal");
        } 

    ?>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo mr-5" href="index.html">
            <img src="../images/carousel/Logo PKN.png" class="mr-2" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="../images/logo-mini.svg" alt="logo" />
          </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                  <span class="input-group-text" id="search">
                    <i class="icon-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" id="navbar-search-input" placeholder="Cari Disini" aria-label="search" aria-describedby="search" />
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="ti-info-alt mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">Just now</p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="ti-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">Private message</p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="ti-user mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">2 days ago</p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="icon-home"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="icon-envelope"></i>
              </a>
            </li>
            <li class="nav-item">
              
            <li class="nav-item">
              <a class="nav-link" href="auth/logout.php"  onclick="return confirm('Apakah anda ingin logout?')" >
              <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-flex">
              
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="ti-settings"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme">
              <div class="img-ss rounded-circle bg-light border mr-3"></div>
              Light
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
              <div class="img-ss rounded-circle bg-dark border mr-3"></div>
              Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
        
        <div id="right-sidebar" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
            </li>
          </ul>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item ">
              <a class="nav-link " href="admin.php">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <?php
               for($i=0; $i < count($type); $i++){
            ?>
            <li class="nav-item" >
              <a class="nav-link" href="cluster-<?=$type[$i] ?>.php?type=<?=$type[$i] ?>">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title"><?=($type[$i]!="BUMDESa" and $type[$i]!="Dokumentasi")? "Cluster":""?> <?=$type[$i] ?></span>
              </a>
            </li>
            <?php
                }
            ?>
            <!-- <li class="nav-item">
            <a class="nav-link" href="cluster-Pendidikan.php">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Cluster Pendidikan</span>
              </a>
            </li> -->

          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">
                      Cluster <?= $_GET['type']?> <br /><br />
                    </h3>
                  </div>
                  <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
                      <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                        <button class="btn btn-sm btn-light bg-white" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          <i class="mdi mdi-calendar"></i> <?=date('l, d-M-Y');?>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                                
            <?php if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == 'berhasiladd') {
            ?>
                <div class="alert alert-success" role="alert">
                    Data berhasil ditambahkan!
                </div>    
            <?php } if ($_GET['pesan'] == 'berhasiledit') { ?>
                <div class="alert alert-warning" role="alert">
                    Data berhasil diubah!
                </div>    
            <?php } if ($_GET['pesan'] == 'berhasildel') { ?>
                <div class="alert alert-secondary" role="alert">
                    Data berhasil dihapus!
                </div>    
            <?php }} ?>

            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card tale-bg p-3">
                 <a href="tambah.php?type=<?= $_GET['type']?>" class="mb-3 btn btn-primary"><b>Tambah</b></a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Menu</th>
                                    <th class="text-center"></th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Gambar</th>
                                    <th class="text-center">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($cluster = mysqli_fetch_array($data)) {
                                        $no++; 
                                ?>
                                <tr>
                                    <td class="text-center"><?=$no; ?></td>
                                    <td class="text-center"><?=$cluster['type_cluster'] ?></td>
                                    <td class="text-center"><?=$cluster['menu_cluster'] ?></td>
                                    <td class="text-center"><?=$cluster['sub_menu_cluster'] ?></td>
                                    <td ><?=$cluster['desc_cluster'] ?></td>
                                    <td><img src="../images/cluster/<?=$cluster['image_cluster'] ?>"  alt="" height="80" width="80" style="border-radius: 0; width:80px; height:80px; object-fit:cover;"> </td>
                                    <td style="max-width: 150px;">
                                        <a href="edit.php?id=<?=$cluster['id_cluster']?>&type=<?=$cluster['type_cluster'] ?>" class="btn btn-warning"><b>edit</b></a>
                                        <a href="delete.php?id=<?=$cluster['id_cluster']?>&type=<?=$cluster['type_cluster'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')" ><b>delete</b><a>
                                        
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div>
   

    <!-- plugins:js -->
    <script src="../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../vendors/chart.js/Chart.min.js"></script>
    <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="../js/dataTables.select.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../js/off-canvas.js"></script>
    <script src="../js/hoverable-collapse.js"></script>
    <script src="../js/template.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../js/dashboard.js"></script>
    <script src="../js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>

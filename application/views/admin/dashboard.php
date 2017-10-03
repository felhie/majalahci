<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/')?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/')?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/')?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/')?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/')?>dist/css/skins/skin-blue.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A's</b>Life</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Atmajaya's</b>Life</span>
      </a>
      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li>
                      <!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- User Image -->
                          <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <!-- Message title and timestamp -->
                        <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                        <!-- The message -->
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- /.messages-menu -->
            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li>
                      <!-- start notification -->
                      <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks Menu -->
            <li class="dropdown tasks-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- Inner menu: contains the tasks -->
                  <ul class="menu">
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <!-- Task title and progress text -->
                        <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                        <!-- The progress bar -->
                        <div class="progress xs">
                          <!-- Change the css width attribute to simulate progress -->
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Navigasi Utama</li>
          <!-- Optionally, you can add icons to the links -->
          <li><a href="#"><i class="fa fa-dashboard "></i> <span>Dashboard</span></a></li>
          <li class="treeview active menu-open">
            <a href="#"><i class="fa fa-files-o"></i> <span>Artikel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
            <ul class="treeview-menu">
              <li>
                <a href="#"><i class="fa fa-pencil"></i> <span>Tambah Artikel</span>
                </a>
              </li>
              <li><a href="#"><i class="fa fa-check-square-o text-green"></i> <span>Artikel Disetujui</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-green">12</small>
                  </span>
                </a></li>
              <li><a href="#"><i class="fa fa-hourglass-2 text-yellow"></i> <span>Artikel Menunggu</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-yellow">12</small>
                  </span>
                </a></li>
              <li><a href="#"><i class="fa fa-times text-red"></i> <span>Artikel Ditolak</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-red">12</small>
                  </span>
                </a></li>
            </ul>
          </li>
          
          <li class="treeview active menu-open">
            <a href="#"><i class="fa fa-users"></i> <span>Jurnalis</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
            <ul class="treeview-menu">
              <li>
                <a href="#"><i class="fa fa-plus"></i> <span>Tambah Jurnalis</span>
                </a>
              </li>
              <li><a href="#"><i class="fa fa-check-square-o text-green"></i> <span>Lihat Jurnalis</span>
                </a></li>
              <li><a href="#"><i class="fa fa-hourglass-2 text-yellow"></i> <span>Cetak Kartu Jurnalis</span>
                </a></li>
            </ul>
          </li>

          <li class="treeview active menu-open">
            <a href="#"><i class="fa fa-users"></i> <span>Anggota Atmajaya's Life</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
            <ul class="treeview-menu">
              <li>
                <a href="#"><i class="fa fa-plus"></i> <span>Tambah Jurnalis</span>
                </a>
              </li>
              <li><a href="#"><i class="fa fa-check-square-o text-green"></i> <span>Lihat Jurnalis</span>
                </a></li>
              <li><a href="#"><i class="fa fa-hourglass-2 text-yellow"></i> <span>Cetak Kartu Anggota</span>
                </a></li>
            </ul>
          </li>

          <li class="active"><a href="#"><i class="fa fa-book"></i> <span>Catatan masuk anggota</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        Dashboard
        <small>Dashboard A'S LIFE</small>
      </h1>
        <!-- <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
          <li class="active">Here</li>
        </ol> -->
      </section>
      <!-- Main content -->
      <section class="content container-fluid">
        <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <!-- Application buttons -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Jalan Pintas</h3>
            </div>
            <div class="box-body">
              <a class="btn btn-app">
                <i class="fa fa-edit"></i> Tambah Artikel
              </a>
              <a class="btn btn-app">
                <i class="fa fa-play"></i> Tambah Jurnalis
              </a>
              <a class="btn btn-app">
                <i class="fa fa-user-plus"></i> Tambah Anggota
              </a>
              <a class="btn btn-app">
                <i class="fa  fa-print"></i> Cetak Kartu Anggota
              </a>
              <a class="btn btn-app">
                <i class="fa fa-qrcode"></i> Hasilkan QR Code Anggota
              </a>
              <a class="btn btn-app">
                <span class="badge bg-yellow">3</span>
                <i class="fa fa-bullhorn"></i> Catatan masuk
              </a>
              <a class="btn btn-app">
                <span class="badge bg-green">300</span>
                <i class="fa fa-barcode"></i> Products
              </a>
              <a class="btn btn-app">
                <span class="badge bg-purple">891</span>
                <i class="fa fa-users"></i> Users
              </a>
              <a class="btn btn-app">
                <span class="badge bg-teal">67</span>
                <i class="fa fa-inbox"></i> Orders
              </a>
              <!-- <a class="btn btn-app">
                <span class="badge bg-aqua">12</span>
                <i class="fa fa-envelope"></i> Inbox
              </a> -->
              <!-- <a class="btn btn-app">
                <span class="badge bg-red">531</span>
                <i class="fa fa-heart-o"></i> Likes
              </a> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
          

        <!-- Info boxes -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <!-- atas -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Artikel</span>
                  <span class="info-box-number">100</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Anggota</span>
                  <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Jurnalis</span>
                  <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-hourglass-2"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Konten</span>
                  <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-comments"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Komentar</span>
                  <span class="info-box-number">100</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-olive"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Penulis</span>
                  <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-remove"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Artikel Ditolak</span>
                  <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-hourglass-2"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Artikel Menunggu Persetujuan</span>
                  <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>
          </div>
          <!-- /.row -->
          <!-- end of atas -->
          <div class="row">
            <div class="col-md-4">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Anggota Aktif Terakhir</h3>
                  <!-- <div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user1-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Alexander Pierce</a>
                      <span class="users-list-date">Today</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user8-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date">Yesterday</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user7-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user6-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">John</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user2-160x160.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Alexander</a>
                      <span class="users-list-date">13 Jan</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user5-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Sarah</a>
                      <span class="users-list-date">14 Jan</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user4-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Nora</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user3-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Nadia</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
            
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Artikel Populer</h3>
                  <div class="box-tools">
                    <!-- <div class="input-group input-group-sm" style="width: 150px;">
                      <input name="table_search" class="form-control pull-right" placeholder="Search" type="text">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div> -->
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody>
                      <tr>
                        <th>ID</th>
                        <th>Artikel</th>
                        <th>Date</th>
                        <th>Hit</th>
                      </tr>
                      <tr>
                        <td>183</td>
                        <td>John Doe</td>
                        <td>11-7-2014</td>
                        <td>111</td>
                      </tr>
                      <tr>
                        <td>219</td>
                        <td>Alexander Pierce</td>
                        <td>11-7-2014</td>
                        <td>99</td>
                      </tr>
                      <tr>
                        <td>657</td>
                        <td>Bob Doe</td>
                        <td>11-7-2014</td>
                        <td>88</td>
                      </tr>
                      <tr>
                        <td>175</td>
                        <td>Mike Doe</td>
                        <td>11-7-2014</td>
                        <td>77</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
            </div> <!-- end of col-4 -->

            <div class="col-md-4">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Jurnalis Aktif Terakhir</h3>
                  <!-- <div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user1-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Alexander Pierce</a>
                      <span class="users-list-date">Today</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user8-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date">Yesterday</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user7-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user6-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">John</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user2-160x160.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Alexander</a>
                      <span class="users-list-date">13 Jan</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user5-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Sarah</a>
                      <span class="users-list-date">14 Jan</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user4-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Nora</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                    <li>
                      <img src="<?php echo base_url('assets/adminlte/')?>dist/img/user3-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Nadia</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->

          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
        Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->
  <!-- REQUIRED JS SCRIPTS -->
  <!-- jQuery 3 -->
  <script src="<?php echo base_url('assets/adminlte/')?>bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url('assets/adminlte/')?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('assets/adminlte/')?>dist/js/adminlte.min.js"></script>
  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>
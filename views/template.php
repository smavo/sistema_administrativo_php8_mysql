<?php 
session_start();

/*=============================================
Capturar las rutas de la URL
=============================================*/

$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);

/*=============================================
Limpiar la Url de variables GET
=============================================*/
foreach ($routesArray as $key => $value) {

  $value = explode("?", $value)[0];
  $routesArray[$key] = $value;
  
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Fixed Sidebar</title>

  <link rel="icon" href="views/assets/img/template/icono.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="views/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/assets/plugins/adminlte/css/adminlte.min.css">
   <!-- Template CSS -->
  <link rel="stylesheet" href="views/assets/custom/template/template.css">

  <!-- jQuery -->
  <script src="views/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="views/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="views/assets/plugins/adminlte/js/adminlte.min.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">


<!-- Site wrapper -->
<div class="wrapper">
  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-warning navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
       
        <a class="nav-link" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>

      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        
        <a class="nav-link"  href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
       
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" role="button">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-warning elevation-4">
    
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link navbar-warning">
      <img src="views/assets/img/template/logo_light.png" style="opacity: .8">
     <!--  <span class="brand-text font-weight-light">AdminLTE 3</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="/" class="nav-link <?php if (empty($routesArray)): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="admins" class="nav-link <?php if ($routesArray[1] == "admins"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Admins
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/users" class="nav-link <?php if ($routesArray[1] == "users"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/stores" class="nav-link <?php if ($routesArray[1] == "stores"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Stores
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/categories" class="nav-link <?php if ($routesArray[1] == "categories"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Categories
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/subcategories" class="nav-link <?php if ($routesArray[1] == "subcategories"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sub-Categories
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/products" class="nav-link <?php if ($routesArray[1] == "products"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Products
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/orders" class="nav-link <?php if ($routesArray[1] == "orders"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-shopping-basket"></i>
              <p>
                Orders
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/sales" class="nav-link <?php if ($routesArray[1] == "sales"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Sales
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/disputes" class="nav-link <?php if ($routesArray[1] == "disputes"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-comment-alt"></i>
              <p>
                Disputes
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/messages" class="nav-link <?php if ($routesArray[1] == "messages"): ?>active<?php endif ?>">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Messages
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <?php

    if(!empty($routesArray[1])){

      if($routesArray[1] == "admins" || 
         $routesArray[1] == "users" ||
         $routesArray[1] == "stores" ||
         $routesArray[1] == "categories" ||
         $routesArray[1] == "subcategories" ||
         $routesArray[1] == "products" ||
         $routesArray[1] == "orders" ||
         $routesArray[1] == "sales" ||
         $routesArray[1] == "disputes" ||
         $routesArray[1] == "messages"){

        include "views/pages/".$routesArray[1]."/".$routesArray[1].".php";

      }else{

         

      }

    }else{


      
    }

    ?>
    <!-- Content Header (Page header) -->
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; <?php echo date("Y") ?></strong> All rights reserved.
    </footer>

</div>
<!-- ./wrapper -->

</body>
</html>

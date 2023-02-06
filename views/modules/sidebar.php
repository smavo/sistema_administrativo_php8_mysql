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

          <?php if ($_SESSION["admin"]->picture_user == null): ?>

                <img src="<?php echo TemplateController::srcImg()?>views/img/users/default/default.png" class="img-circle elevation-2" alt="User Image">

          <?php else: ?>

              <img src="<?php echo TemplateController::srcImg()?>views/img/users/<?php echo $_SESSION["admin"]->id_user ?>/<?php echo $_SESSION["admin"]->picture_user ?>" class="img-circle elevation-2" alt="User Image">
          <?php endif ?>   
                 
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["admin"]->displayname_user ?></a>
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
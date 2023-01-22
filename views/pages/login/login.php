<div class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="views/assets/img/template/logo_light.png" style="opacity: .8">
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form method="post" class="needs-validation" novalidate>

          <div class="input-group mb-3">
            
            <input 
            type="email" class="form-control" placeholder="Email"  name="loginEmail"  onchange=""
            required>

            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>

            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>

          </div>

          <div class="input-group mb-3">
            
            <input type="password" class="form-control" 
            placeholder="Password" name="loginPassword" required>

            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>

            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>

          </div>

            <?php 

                require_once "controllers/admins.controller.php";

                $login = new AdminsController();
                $login->login();

            ?>

          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" >
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>

            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn bg-black btn-block">Sign In</button>
            </div>

            <!-- /.col -->
          </div>
        </form>

        <!-- /.social-auth-links -->
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

<!-- jQuery -->
</div>

<script src="views/assets/custom/forms/forms.js"></script>
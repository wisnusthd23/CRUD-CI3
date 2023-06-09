<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html" class="header-text"><b>Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">LOGIN</p>
      <?= $this->session->flashdata('flash'); ?>

      <form action="<?= base_url('auth'); ?>" method="post">
        <div class="input-group mb-1">
          <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="<?= set_value('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
        <div class="input-group mb-1">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
        <div class="row">
          <div class="col-6">
              <a href="<?= base_url('user') ?>" type="submit" class="btn btn-primary btn-block">User View</a>
          </div>
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Lupa Password</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url('auth/registrasi'); ?>" class="text-center">Register</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
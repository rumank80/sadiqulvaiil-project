<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h2><?php echo trans('login'); ?></h2>
    </div>
    <div class="card-body">
      <?php echo form_open(site_url('login_post')); ?>
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control <?php echo form_invalid('username');?>" value="<?php echo old('username'); ?>" placeholder="<?php echo placeholder('enter_username'); ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('username', '<div class="error mb-3">', '</div>'); ?>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control <?php echo form_invalid('password');?>" value="<?php echo old('password'); ?>" placeholder="<?php echo placeholder('enter_password'); ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('password', '<div class="error mb-3">', '</div>'); ?>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block"><?php echo trans('sign_in'); ?></button>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close(); ?>
      <!-- /.social-auth-links -->
      <?php 
      if (site_config('registration') == "on") {?>
      <p class="mb-0">
        <a href="<?php echo site_url('register'); ?>" class="text-center"><?php echo trans('register_a_new_membership'); ?></a>
      </p>
    <?php } ?>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
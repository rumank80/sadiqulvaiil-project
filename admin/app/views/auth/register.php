<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h2><?php echo trans('register'); ?></h2>
    </div>
    <div class="card-body">
      <?php echo form_open(site_url('register_post')); ?>
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
        <div class="input-group mb-3">
          <input type="password" name="cpassword" class="form-control <?php echo form_invalid('cpassword');?>" value="<?php echo old('cpassword'); ?>" placeholder="<?php echo placeholder('confirm_password'); ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('cpassword', '<div class="error mb-3">', '</div>'); ?>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block"><?php echo trans('sign_up'); ?></button>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close(); ?>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
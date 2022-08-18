<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

<?php
foreach ($users as $user) :
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo trans('edit_user'); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>"><?php echo trans('dashboard'); ?></a></li>
                        <li class="breadcrumb-item active"><?php echo trans('edit_user'); ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><?php echo trans('edit_user'); ?></h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->

                <?php
                $hidden = array('user_id' => html_escape($user->id));
                echo form_open(site_url('admin/edit_user_post'), '', $hidden); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="username"><?php echo trans('username'); ?></label>
                                <input type="text" class="form-control <?php echo form_invalid('username');?>" name="username" value="<?php echo html_escape($user->username); ?>" required>
                                <?php echo form_error('username', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="user-role"><?php echo trans('user_role'); ?></label>
                                <select class="form-control" name="user_role">
                                    <option value="<?php echo html_escape('user'); ?>" <?php echo ($user->user_role === 'user' ? 'selected' : ''); ?>><?php echo html_escape(trans('user')); ?></option>
                                    <option value="<?php echo html_escape('admin'); ?>" <?php echo ($user->user_role === 'admin' ? 'selected' : ''); ?>><?php echo html_escape(trans('admin')); ?></option>
                                </select>
                                <?php echo form_error('user_role', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="password"><?php echo trans('change_password'); ?></label>
                                <input type="password" class="form-control <?php echo form_invalid('password');?>" name="password" value="<?php echo old('password');  ?>" placeholder="<?php echo placeholder('enter_password'); ?>">
                                <?php echo form_error('password', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><?php echo trans('edit_user'); ?></button>
                    </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php endforeach; ?>
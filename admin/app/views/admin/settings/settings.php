<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo trans('settings'); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>"><?php echo trans('dashboard'); ?></a></li>
                        <li class="breadcrumb-item active"><?php echo trans('settings'); ?></li>
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
                    <h3 class="card-title"><?php echo trans('settings'); ?></h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <?php echo form_open(site_url('admin/settings_post')); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="sitename"><?php echo trans('sitename'); ?></label>
                                <input type="text" class="form-control <?php echo form_invalid('sitename');?>" name="sitename" value="<?php echo site_config('sitename');?>" required>
                                <?php echo form_error('sitename', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="registration"><?php echo trans('registration'); ?></label>
                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" name="registration" id="customSwitch3" <?php echo (site_config('registration') == "on" ? 'checked="On"' : ''); ?>>
                                    <label class="custom-control-label" for="customSwitch3"></label>
                                </div>
                            </div>
                            <?php echo form_error('registration', '<div class="error">', '</div>'); ?>
                            <div class="form-group col-sm-6">
                                <label for="onesignal_app_id"><?php echo trans('onesignal_app_id'); ?></label>
                                <input type="text" class="form-control <?php echo form_invalid('onesignal_app_id');?>" name="onesignal_app_id" value="<?php echo site_config('onesignal_app_id');?>" required>
                                <?php echo form_error('onesignal_app_id', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="onesignal_api_key"><?php echo trans('onesignal_api_key'); ?></label>
                                <input type="text" class="form-control <?php echo form_invalid('onesignal_api_key');?>" name="onesignal_api_key" value="<?php echo site_config('onesignal_api_key');?>" required>
                                <?php echo form_error('onesignal_api_key', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><?php echo trans('update_settings'); ?></button>
                    </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
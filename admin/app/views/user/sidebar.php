<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('user/dashboard');?>" class="brand-link">
        <img src="<?php echo base_url( 'assets/admin/img/logo.png' ); ?>" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">User Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

                <!-- dashboard-->
                <li class="nav-item">
                    <a href="<?php echo site_url('user/dashboard');?>" class="nav-link <?php echo ($page == "dashboard") ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            <?php echo trans('dashboard'); ?>
                        </p>
                    </a>
                </li>
                <!-- /dashboard-->

                <!--website-->
                <li class="nav-item">
                    <a href="<?php echo site_url('user/website_list');?>" class="nav-link <?php echo ($page == 'website/website_list') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            <?php echo trans('websites'); ?>
                        </p>
                    </a>
                </li>
                <!--/website-->

                <!--informations-->
                <li class="nav-item">
                    <a href="<?php echo site_url('user/informations');?>" class="nav-link <?php echo ($page == 'informations/informations') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-indent"></i>
                        <p>
                            <?php echo trans('informations'); ?>
                        </p>
                    </a>
                </li>
                <!--/informations-->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

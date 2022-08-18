<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
         <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="<?php echo base_url( 'assets/admin/img/user.jpg' ); ?>" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?php echo $this->session->userdata('rt_session_username'); ?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="<?php echo base_url( 'assets/admin/img/user.jpg' ); ?>" class="img-circle elevation-2" alt="User Image">

            <p>
             <?php echo $this->session->userdata('rt_session_username'); ?>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="<?php echo base_url( 'admin/logout' ); ?>" class="btn btn-default btn-flat float-right"><?php echo trans('logout'); ?></a>
          </li>
        </ul>
      </li>

    </ul>
</nav>
<!-- /.navbar -->

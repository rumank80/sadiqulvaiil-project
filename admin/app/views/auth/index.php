<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $page_title;?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url( 'assets/admin/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url( 'assets/admin/plugins/toastr/toastr.min.css' );?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url( 'assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url( 'assets/admin/css/adminlte.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url( 'assets/admin/css/custom.css'); ?>">
</head>
<body class="hold-transition <?php echo ($page == 'register') ? 'register-page' : 'login-page'; ?>">

  <?php 
    	// check page is not empty
		if ( ! empty(($page)) ) 
		{
			// get page name and load page
			$this->load->view("auth/{$page}");
		}
		else
		{
			// if page not found show 404 page
			$this->load->view('auth/404');
		}
	?>
		
<!-- jQuery -->
<script src="<?php echo base_url( 'assets/admin/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Toastr -->
<script src="<?php echo base_url( 'assets/admin/plugins/toastr/toastr.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url( 'assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url( 'assets/admin/js/adminlte.min.js'); ?>"></script>
<?php if ($this->session->flashdata('success_message') != ""):?>
<script>toastr.success('<?php echo $this->session->flashdata('success_message'); ?>')</script>
<?php endif;?>
<?php if ($this->session->flashdata('error_message') != ""):?>
<script>toastr.error('<?php echo $this->session->flashdata('error_message'); ?>')</script>
<?php endif;?>
<?php if ($this->session->flashdata('info_message') != ""):?>
<script>toastr.warning('<?php echo $this->session->flashdata('info_message'); ?>')</script>
<?php endif;?>
</body>
</html>

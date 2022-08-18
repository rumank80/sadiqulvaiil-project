<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $page_title; ?></title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/fontawesome-free/css/all.min.css'); ?>">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- SweetAlert2 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'); ?>">
	<!-- Toastr -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/toastr/toastr.min.css'); ?>">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/adminlte.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/custom.css'); ?>">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/daterangepicker/daterangepicker.css'); ?>">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/summernote/summernote-bs4.min.css'); ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<?php $this->load->view('user/sidebar'); ?>
		<?php $this->load->view('user/navbar'); ?>
		<?php
		// get page name and load page
		$this->load->view("user/{$page}");
		?>
		<footer class="main-footer">
			<strong>Copyright &copy; <?php echo date('Y'); ?>.</strong>
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 1.0
			</div>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="<?php echo base_url('assets/admin/plugins/jquery/jquery.min.js'); ?>"></script>
	<!-- SweetAlert2 -->
	<script src="<?php echo base_url('assets/admin/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
	<!-- Toastr -->
	<script src="<?php echo base_url('assets/admin/plugins/toastr/toastr.min.js'); ?>"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url('assets/admin/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<!-- DataTables  & Plugins -->
	<script src="<?php echo base_url('assets/admin/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
	<!-- daterangepicker -->
	<script src="<?php echo base_url('assets/admin/plugins/moment/moment.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?php echo base_url('assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
	<!-- Summernote -->
	<script src="<?php echo base_url('assets/admin/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
	<!-- overlayScrollbars -->
	<script src="<?php echo base_url('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
	<!-- App -->
	<script src="<?php echo base_url('assets/admin/js/app.js'); ?>"></script>
	<!-- Dashboard -->
	<script src="<?php echo base_url('assets/admin/js/pages/dashboard.js'); ?>"></script>

	<script>
		$(function() {
			// Summernote
			$('#summernote').summernote()

			// CodeMirror
			CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
				mode: "htmlmixed",
				theme: "monokai"
			});
		})

		//Date picker
		$('#reservationdate').datetimepicker({
			format: 'L'
		});

		// toast

		var Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
		})


		// datatable

		$(document).ready(function() {
			$('#table').DataTable();
		});
	</script>
	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async> </script>
	<script>
		var OneSignal = window.OneSignal || [];
		OneSignal.push(["init", {
			appId: "<?php echo site_config('onesignal_app_id'); ?>"
		}]);

		function subscribe() {

			OneSignal.push(["registerForPushNotifications"]);
			event.preventDefault();
		}

		function unsubscribe() {
			OneSignal.setSubscription(true);
		}

		var OneSignal = OneSignal || [];
		OneSignal.push(function() {
			/* These examples are all valid */
			// Occurs when the user's subscription changes to a new value.
			OneSignal.on('subscriptionChange', function(isSubscribed) {
				console.log("The user's subscription state is now:", isSubscribed);
				OneSignal.sendTag("user_id", "<?php echo user()->id; ?>", function(tagsSent) {
					// Callback called when tags have finished sending
					console.log("Tags have finished sending!");
				});
			});

			var isPushSupported = OneSignal.isPushNotificationsSupported();
			if (isPushSupported) {
				// Push notifications are supported
				OneSignal.isPushNotificationsEnabled().then(function(isEnabled) {
					if (isEnabled) {
						console.log("Push notifications are enabled!");

					} else {
						OneSignal.showHttpPrompt();
						console.log("Push notifications are not enabled yet.");
					}
				});

			} else {
				console.log("Push notifications are not supported.");
			}
		});
	</script>
	<?php if ($this->session->flashdata('success_message') != "") : ?>
		<script>
			toastr.success('<?php echo $this->session->flashdata('success_message'); ?>')
		</script>
	<?php endif; ?>
	<?php if ($this->session->flashdata('error_message') != "") : ?>
		<script>
			toastr.error('<?php echo $this->session->flashdata('error_message'); ?>')
		</script>
	<?php endif; ?>
	<?php if ($this->session->flashdata('info_message') != "") : ?>
		<script>
			toastr.warning('<?php echo $this->session->flashdata('info_message'); ?>')
		</script>
	<?php endif; ?>
</body>

</html>
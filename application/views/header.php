<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sistem Informasi Kenaikan Pangkat Polda Sumsel">
	<meta name="keywords" content="Cek Jadwal UKP Polda Sumsel, Cek UKP Polri, UKP Polda Sumsel, Subbag Pangkat Polda Sumsel, Sikepang, Sistem Informasi Kenaikan Pangkat">
	<meta name="author" content="SubbagPangkat BagBinkar Ro SDM Polda Sumsel">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= isset($title_window) ? $title_window : 'SIKEPANG - Sistem Informasi Kenaikan Pangkat' ?></title>

	<link rel="shortcut icon" href="<?= base_url(); ?>assets/images/logo_sdm_beranda.png" type="image/x-icon" />

	<!-- Tell the browser to be responsive to screen width -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">

	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

	<!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css"> -->

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/adminlte.min.css?v=3.2.0">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

	<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

	<script src="<?= base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>

	<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script src="<?= base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>

	<script src="<?= base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>

	<!-- <script src="<?= base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->

	<script src="<?= base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>

	<script src="<?= base_url(); ?>assets/plugins/moment/moment.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>

	<script src="<?= base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

	<script src="<?= base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>

	<script src="<?= base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

	<script src="<?= base_url(); ?>assets/js/adminlte.js?v=3.2.0"></script>

	<!-- <script src="<?= base_url(); ?>assets/js/demo.js"></script> -->

	<!-- <script src="<?= base_url(); ?>assets/js/pages/dashboard.js"></script> -->

	<script src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

</head>
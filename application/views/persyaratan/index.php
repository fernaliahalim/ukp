<style>
	a img:hover {
		width: 22%;
	}
</style>

<div class="content-wrapper">

	<div class="content-header">
		<div class="container-fluid">
			<div class="col-sm-12">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item">
						<a href="<?= base_url(); ?>">Home</a>
					</li>
					<li class="breadcrumb-item active">Persyaratan</li>
				</ol>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12" style="text-align:center;">
					<img src="<?= base_url(); ?>assets/images/Lambang_Polda_Sumsel.png" width="7%" />
					<img src="<?= base_url(); ?>assets/images/logo_sdm_beranda.png" width="8%" />
					<h1 style="font-weight: bold;">SUBBAGPANGKAT BAGBINKAR ROSDM POLDA SUMSEL</h1>
					<h4 style="font-weight: bold;">PERSYARATAN ADMINISTRASI UKP</h4>
					<strong> Silahkan pilih menu dibawah ini sesuai dengan Jenis UKP Anda! </strong><br /><br />

					<div id="home_section">
						<a href="<?= base_url(); ?>persyaratan/knp" data-toggle="tooltip" data-placement="top" title="Persyaratan Administrasi Kenaikan Pangkat"><img src="<?= base_url(); ?>assets/images/PERSYARATAN_KNP.png" width="19%" /></a>
						<a id="persyaratanbygol" data-toggle="tooltip" data-placement="top" title="Persyaratan Administrasi Kenaikan Pangkat Berdasarkan Golongan Pangkat"><img src="<?= base_url(); ?>assets/images/PERSYARATAN_BY_GOL_PANGKAT.png" width="19%" /></a>
					</div>

					<div id="sub_section">
						<a href="<?= base_url(); ?>persyaratan/perwira" data-toggle="tooltip" data-placement="top" title="Persyaratan Administrasi UKP Perwira"><img src="<?= base_url(); ?>assets/images/PERSYARATAN_PERWIRA.png" width="19%" /></a>
						<a href="<?= base_url(); ?>persyaratan/bintara" data-toggle="tooltip" data-placement="top" title="Persyaratan Administrasi UKP Bintara dan Tamtama"><img src="<?= base_url(); ?>assets/images/PERSYARATAN_BINTARA.png" width="19%" /></a>
						<a href="<?= base_url(); ?>persyaratan/pengabdian" data-toggle="tooltip" data-placement="top" title="Persyaratan Administrasi UKP Pengabdian"><img src="<?= base_url(); ?>assets/images/PERSYARATAN_PENGABDIAN.png" width="19%" /></a>
						<a href="<?= base_url(); ?>persyaratan/pns" data-toggle="tooltip" data-placement="top" title="Persyaratan Administrasi UKP PNS"><img src="<?= base_url(); ?>assets/images/PERSYARATAN_PNSPOLRI.png" width="19%" /></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<script>
	$(document).ready(function() {
		$('#sub_section').hide();

		$('#persyaratanbygol').click(function() {
			$('#home_section').hide();
			$('#sub_section').show();
		});
	});
</script>
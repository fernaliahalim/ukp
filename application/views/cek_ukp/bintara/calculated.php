<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h3 class="m-0">CEK UKP <strong><?= $header; ?></strong></h3>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">
							<a href="<?= base_url(); ?>">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?= base_url(); ?>polri">Cek Jadwal UKP</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?= base_url(); ?>bintara">Bintara</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?= base_url(); ?>bintara/<?= $method; ?>"><?= $header; ?></a>
						</li>
						<li class="breadcrumb-item active">Detail UKP</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="card card-default col-sm-12" style="text-align:center;">
					<div class="card-body col-sm-12">
						<br />
						<h2>KENAIKAN PANGKAT ANDA DARI <strong><?= $header; ?></strong></h2>
						<h3>Jenis Kenaikan Pangkat (<span style="color: #673AB7; font-weight: bold;"><?= $ketjeniskp; ?></span>)</h3><br />
						<h4>TMT Pangkat Terakhir Anda = <strong><?= $tmt; ?></strong></h4><br /><br />

						<h4><strong>Anda dapat mengusulkan Kenaikan Pangkat dari <?= $header; ?> untuk TMT :</strong></h4>
						<div class="row">
							<div class="col-sm-3"><br /></div>
							<div class="info-box bg-success col-sm-6">
								<div class="info-box-content">
									<span class="info-box-number" style="font-size: 40px;"><i class="far fa-bookmark"> &nbsp;</i> <?= $tmtkp; ?></span>
								</div>
							</div>
							<div class="col-sm-3"><br /></div>
						</div>
						<br />

						<h4>Masa Kenaikan Pangkat Anda Masih = <strong><?= $sisa_tmtkp; ?></strong></h4>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

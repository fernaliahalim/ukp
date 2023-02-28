<style>
	.col-form-label {
		font-size: 14pt;
	}
</style>

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
							<a href="<?= base_url(); ?>perwira">Perwira</a>
						</li>
						<li class="breadcrumb-item active"><?= $header; ?></li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-warning">
						<div class="card-header">
							<h2 style="font-weight: bold;"><?= $header; ?></h2>
						</div>
						<form class="form-horizontal" method="post" action="<?= base_url(); ?>perwira/calculate">
							<div class="card-body">
								<div class="form-group row">
									<label for="inputTMT" class="col-sm-12 col-form-label">(MDP) Masukkan TMT Perwira/TMT Surut Jika Memiliki Masa Dinas Surut <span style="color: #D32F2F;">(contoh. 01-07-2017)</span></label>
									<div class="col-sm-12">
										<input type="text" name="header" value="<?= $header; ?>" hidden />
										<input type="text" name="method" value="<?= $method; ?>" hidden />
										<input class="form-control form-control-lg" type="date" name="tmt_perwira" placeholder="Tahun-Bulan-Hari (2018-07-01)" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputTMT" class="col-sm-12 col-form-label">(MDDP) Masukkan TMT Pangkat Terakhir Anda <span style="color: #D32F2F;">(contoh. 01-07-2017)</span></label>
									<div class="col-sm-12">
										<input class="form-control form-control-lg" type="date" name="tmt" placeholder="Tahun-Bulan-Hari (2018-07-01)" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputJenisKP" class="col-sm-12 col-form-label">Masukkan Jenis Kenaikan Pangkat</label>
									<div class="col-sm-12">
										<select class="form-control form-control-lg" id="jenis_kp" name="jenis_kp" required>
											<option value="0" var="Reguler">--Silahkan Pilih Jenis Kenaikan Pangkat--</option>
											<?php for ($i = 0; $i < count($namakp); $i++) { ?>
												<option value="<?= $idkp[$i]; ?>" mdp="<?= $mdp[$i]; ?>" mddp="<?= $mddp[$i]; ?>"><?= $namakp[$i] . ' - ' . $detailkp[$i]; ?></option>
											<?php } ?>
										</select>
										<input type="text" id="ketjeniskp" name="ketjeniskp" value="Reguler" hidden />
										<input type="text" id="mdp" name="mdp" value="0" hidden />
										<input type="text" id="mddp" name="mddp" value="0" hidden />
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-lg btn-warning float-right">Cek</button>
							</div>
						</form>
					</div>

					<div class="card">
						<div class="card-header">
							<h3 class="card-title">KETERANGAN JENIS KENAIKAN PANGKAT</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>

						</div>

						<div class="card-body table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Jenis Kenaikan Pangkat</th>
										<th>Detail Jenis Kenaikan Pangkat</th>
										<th>MDP</th>
										<th>MDDP</th>
									</tr>
								</thead>
								<tbody>
									<?php for ($i = 0; $i < count($namakp); $i++) { ?>
										<tr>
											<td style="color: #D32F2F; font-weight: bold;"><?= $namakp[$i]; ?></td>
											<td><?= $detailkp[$i]; ?></td>
											<td><?= $mdp[$i]; ?> Tahun</td>
											<td><?= $mddp[$i]; ?> Tahun</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<script>
	$(document).ready(function() {
		$('#jenis_kp').change(function() {
			var jenis_kp = $('#jenis_kp option:selected').text();
			var mdp = $('#jenis_kp option:selected').attr('mdp');
			var mddp = $('#jenis_kp option:selected').attr('mddp');

			$('#ketjeniskp').val(jenis_kp);
			$('#mdp').val(mdp);
			$('#mddp').val(mddp);
		});
	});
</script>

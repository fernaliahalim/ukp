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
							<a href="<?= base_url(); ?>tamtama">Tamtama</a>
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
					<div class="card card-success">
						<div class="card-header">
							<h2 style="font-weight: bold;"><?= $header; ?></h2>
						</div>
						<form class="form-horizontal" method="post" action="<?= base_url(); ?>tamtama/calculate">
							<div class="card-body">
								<div class="form-group row">
									<label for="inputTMT" class="col-sm-12 col-form-label">Masukkan TMT <?= $golpngkat; ?> <span style="color: #D32F2F;">(contoh. 01-07-2017)</span></label>
									<div class="col-sm-12">
										<input type="text" name="mddp" value="<?= $mddp; ?>" hidden />
										<input type="text" name="header" value="<?= $header; ?>" hidden />
										<input type="text" name="method" value="<?= $method; ?>" hidden />
										<input class="form-control form-control-lg" type="date" name="tmt" placeholder="Tahun-Bulan-Hari (2018-07-01)" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputJenisKP" class="col-sm-12 col-form-label">Masukkan Jenis Kenaikan Pangkat</label>
									<div class="col-sm-12">
										<select class="form-control form-control-lg" id="jenis_kp" name="jenis_kp" required>
											<option value="0" var="Reguler">--Silahkan Pilih Jenis Kenaikan Pangkat--</option>
											<option value="0" var="Reguler">Reguler (MDDP <?= $mddp; ?>th)</option>
											<option value="36" var="Percepatan 1 - S1+S2+S3">Percepatan 1 - S1+S2+S3 (MDDP <?= $mddp - 3; ?>th)</option>
											<option value="24" var="Percepatan 2 - S1+S2/S2+S3">Percepatan 2 - S1+S2 atau S2+S3 (MDDP <?= $mddp - 2; ?>th)</option>
											<option value="12" var="Percepatan 3 - S1/S2/S3">Percepatan 3 - S1 atau S2 atau S3 (MDDP <?= $mddp - 1; ?>th)</option>
											<option value="42" var="Percepatan 4 - S1+S2+S3+Dikbangspers/Dikjur">Percepatan 4 - S1+S2+S3+Dikbangspers atau Dikjur (MDDP <?= $mddp - 3.5; ?>th)</option>
											<option value="30" var="Percepatan 5 - S1+S2+Dikbangspers/Dikjur">Percepatan 5 - S1+S2+Dikbangspers atau Dikjur (MDDP <?= $mddp - 2.5; ?>th)</option>
											<option value="18" var="Percepatan 6 - S1/S2/S3+Dikbangspers/Dikjur">Percepatan 6 - S1 atau S2 atau S3 + Dikbangspers atau Dikjur (MDDP <?= $mddp - 1.5; ?>th)</option>
											<option value="6" var="Percepatan 7 - Dikbangspers/Dikjur">Percepatan 7 - Dikbangspers atau Dikjur (MDDP <?= $mddp - 0.5; ?>th)</option>

											<option value="42" var="Percepatan 8 - S1+S2+S3+OPSPOL">Percepatan 8 - S1+S2+S3+OPSPOL (MDDP <?= $mddp - 3.5; ?>th)</option>
											<option value="30" var="Percepatan 9 - S1+S2+OPSPOL">Percepatan 9 - S1+S2+OPSPOL (MDDP <?= $mddp - 2.5; ?>th)</option>
											<option value="18" var="Percepatan 10 - S1 atau S2 atau S3 + OPSPOL">Percepatan 10 - S1 atau S2 atau S3 + OPSPOL (MDDP <?= $mddp - 1.5; ?>th)</option>
											<option value="6" var="Percepatan 11 - Penugasan Luar">Percepatan 11 - OPSPOL (MDDP <?= $mddp - 0.5; ?>th)</option>
										</select>
										<input type="text" id="ketjeniskp" name="ketjeniskp" value="Reguler" hidden />
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-lg btn-success float-right">Cek</button>
							</div>
						</form>
					</div>

					<div class="card">
						<div class="card-header">
							<h3 class="card-title">KETERANGAN</h3>
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
										<th>MDDP</th>
										<th>Keterangan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="color: #D32F2F; font-weight: bold;">Reguler</td>
										<td>-</td>
										<td><?= $mddp; ?> Tahun</td>
										<td>Tidak ada pengurangan MDDP</td>
									</tr>
									<tr>
										<td style="color: #D32F2F; font-weight: bold;">Percepatan 1</td>
										<td><strong>S1+S2+S3</strong></td>
										<td><?= $mddp - 3; ?> Tahun</td>
										<td>3 Tahun pengurangan MDDP</td>
									</tr>
									<tr>
										<td style="color: #D32F2F; font-weight: bold;">Percepatan 2</td>
										<td><strong>S1+S2</strong> atau <strong>S2+S3</strong></td>
										<td><?= $mddp - 2; ?> Tahun</td>
										<td>2 Tahun pengurangan MDDP</td>
									</tr>
									<tr>
										<td style="color: #D32F2F; font-weight: bold;">Percepatan 3</td>
										<td><strong>S1/S2/S3</strong></td>
										<td><?= $mddp - 1; ?> Tahun</td>
										<td>1 Tahun pengurangan MDDP</td>
									</tr>
									<tr>
										<td style="color: #D32F2F; font-weight: bold;">Percepatan 4</td>
										<td><strong>S1+S2+S3+Dikbangspers</strong> atau <strong>Dikjur</strong></td>
										<td><?= $mddp - 3.5; ?> Tahun</td>
										<td>3 Tahun 6 Bulan pengurangan MDDP</td>
									</tr>
									<tr>
										<td style="color: #D32F2F; font-weight: bold;">Percepatan 5</td>
										<td><strong>S1+S2+Dikbangspers</strong> atau <strong>Dikjur</strong></td>
										<td><?= $mddp - 2.5; ?> Tahun</td>
										<td>2 Tahun 6 Bulan pengurangan MDDP</td>
									</tr>
									<tr>
										<td style="color: #D32F2F; font-weight: bold;">Percepatan 6</td>
										<td><strong>S1</strong> atau <strong>S2</strong> atau <strong>S3+Dikbangspers</strong> atau <strong>Dikjur</strong></td>
										<td><?= $mddp - 1.5; ?> Tahun</td>
										<td>1 Tahun 6 Bulan pengurangan MDDP</td>
									</tr>
									<tr>
										<td style="color: #D32F2F; font-weight: bold;">Percepatan 7</td>
										<td><strong>Dikbangspers</strong> atau <strong>Dikjur</strong></td>
										<td><?= $mddp - 0.5; ?> Tahun</td>
										<td>6 Bulan pengurangan MDDP</td>
									</tr>
									<tr>
										<td style="color: #D32F2F; font-weight: bold;">Percepatan 8</td>
										<td><strong>S1+S2+S3+OPSPOL</strong></td>
										<td><?= $mddp - 3.5; ?> Tahun</td>
										<td>3 Tahun 6 Bulan pengurangan MDDP</td>
									</tr>
									<tr>
										<td style="color: #D32F2F; font-weight: bold;">Percepatan 9</td>
										<td><strong>S1+S2+OPSPOL</strong></td>
										<td><?= $mddp - 2.5; ?> Tahun</td>
										<td>2 Tahun 6 Bulan pengurangan MDDP</td>
									</tr>
									<tr>
										<td style="color: #D32F2F; font-weight: bold;">Percepatan 10</td>
										<td><strong>S1 atau S2 atau S3 + OPSPOL</strong></td>
										<td><?= $mddp - 0.5; ?> Tahun</td>
										<td>1 Tahun 6 Bulan pengurangan MDDP</td>
									</tr>
									<tr>
										<td style="color: #D32F2F; font-weight: bold;">Percepatan 11</td>
										<td><strong>OPSPOL</strong></td>
										<td><?= $mddp - 0.5; ?> Tahun</td>
										<td>6 Bulan pengurangan MDDP</td>
									</tr>
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

			$('#ketjeniskp').val(jenis_kp);
		});
	});
</script>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= $title; ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('user/C_beranda') ?>">Beranda</a></li>
						<li class="breadcrumb-item active"><?= $title; ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
		<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

	</section>
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body table-responsive p-0">
						<table class="table table-hover">
							<thead>
								<tr class="text-center">
									<th>No</th>
									<th>Suhu</th>
									<th>Ph</th>
									<th>TDS</th>
									<th>Hasil</th>
									<th>Grade</th>
									<th>Tanggal</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
									foreach ($hasil as $ha):
										$id = $ha->id_hasil
								?>
								<tr>
									<td class="text-center"><?= $no; ?></td>
									<td class="text-center"><?= $ha->suhu; ?></td>
									<td class="text-center"><?= $ha->ph; ?></td>
									<td class="text-center"><?= $ha->tds; ?></td>
									<td class="text-center"><?= $ha->hasil_perhitungan; ?></td>
									<td class="text-center"><?= $ha->grade; ?></td>
									<td class="text-center"><?= $ha->tanggal; ?></td>
								</tr>
								<?php $no++; ?>
								<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr class="text-center">
									<th>No</th>
									<th>Suhu</th>
									<th>Ph</th>
									<th>TDS</th>
									<th>Hasil</th>
									<th>Grade</th>
									<th>Tanggal</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- modal hapus -->
<?php foreach ($hasil as $ha):
	$id 	= $ha->id_hasil;
	$grade 	= $ha->grade;
	?>
<form action="<?php echo base_url() . 'user/C_riwayat/hapus' ?>" method="post">
	<div class="modal fade" id="modalHapus<?= $id; ?>" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h4 class="modal-title">Hapus</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body justify-content-center">
					<div>
						<h5>Apakah Anda yakin untuk menghapus data dengan grade <b><?= $grade ?></b> ini?</h5>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-default" data-dismiss="modal">Tutup</button>
					<input type="hidden" name="delete_id" value="<?= $id; ?>" required>
					<button type="submit" class="btn btn-danger">Hapus</button>
				</div>
			</div>
		</div>
	</div>
</form>
<?php endforeach; ?>
<!-- modal hapus end -->

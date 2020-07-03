<!-- [button] -->
<button class="btn btn-primary my-3" data-toggle="modal" data-target="#modalCreate">
	Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="CreateModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-success text-white">
				<h5 class="modal-title" id="CreateModal">TAMBAH DATA SISWA</h5>
					<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button> 
				</div>
				<div class="modal-body">
					<h2><?= esc('Tambah Data'); ?></h2>
					
					<?php $validation = \Config\Services::validation(); ?>
					
					<form action="<?= base_url('siswa/create') ?>" method="post">
					
						<?= csrf_field() ?>
						
						<div class="mb-3">
							<label>Nama</label>
							<input name="nama" class="form-control <?= $validation->hasError('nama') ? 'is-invalid' : '' ?>" value="<?= old('nama') ?>"/>
							<div class="invalid-feedback">
								<?= $validation->getError('nama') ?>
							</div>
						</div>
						
						<div class="mb-3">
							<label>Kelas</label>
							<input name="kelas" class="form-control <?= $validation->hasError('kelas') ? 'is-invalid' : '' ?>" value="<?= old('kelas') ?>"/>
							<div class="invalid-feedback">
								<?= $validation->getError('kelas') ?>
							</div>
						</div>
						
						<div class="mb-3">
							<label>Alamat</label>
							<textarea name="alamat" rows="3" class="form-control <?= $validation->hasError('alamat') ? 'is-invalid' : '' ?>"><?= old('alamat') ?></textarea>
							<div class="invalid-feedback">
								<?= $validation->getError('alamat') ?>
							</div>
						</div>
					
				</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-success">
					Simpan
				</button>
			</form>
			</div>
		</div>
	</div>
</div>
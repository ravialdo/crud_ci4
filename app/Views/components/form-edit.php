<?php $validation = \Config\Services::validation() ?>

<form action="<?= base_url('siswa/update/'. $siswa['id']) ?>" method="post">
	
	<?= csrf_field() ?>
						
	<div class="mb-3">
		<label>Nama</label>
		<input name="nama" class="form-control <?= $validation->hasError('nama') ? 'is-invalid' : '' ?>" value="<?= $siswa['nama'] ?>"/>
		<div class="invalid-feedback">
			<?= $validation->getError('nama') ?>
		</div>
	</div>
						
	<div class="mb-3">
		<label>Kelas</label>
		<input name="kelas" class="form-control <?= $validation->hasError('kelas') ? 'is-invalid' : '' ?>" value="<?= $siswa['kelas'] ?>"/>
		<div class="invalid-feedback">
			<?= $validation->getError('kelas') ?>
		</div>
	</div>
						
	<div class="mb-3">
		<label>Alamat</label>
		<textarea name="alamat" rows="3" class="form-control <?= $validation->hasError('alamat') ? 'is-invalid' : '' ?>"><?= $siswa['alamat'] ?></textarea>
		<div class="invalid-feedback">
			<?= $validation->getError('alamat') ?>
		</div>
	</div>
						
	<a href="<?= base_url('/siswa') ?>" class="btn btn-dark">
		Kembali
	</a>
	
	<button type="submit" class="btn btn-primary">
		Edit
	</button>
</form>
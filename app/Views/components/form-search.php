<form action="<?= base_url('siswa/search') ?>" method="get">
	<div class="input-group mb-3">
		<input type="text" name="q" class="form-control" value="<?= empty($q) ? '' : $q ?>" placeholder="cari data berdasarkan nama">
		<button class="btn btn-outline-primary">Cari</button>
	</div>
</form>
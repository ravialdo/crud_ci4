<?php $this->extend('layouts/layout.php') ?>

<?php $this->section('content') ?>

	<div class="container">
		<div class="row">
			<div class="col">
				
				<div class="card shadow-lg">
					<div class="card-header">
						CRUD Data Siswa Menggunakan Framework CodeIgniter 4
					</div>
					<div class="card-body">
						
						<h2><?= esc('Edit Data'); ?></h2>
					
						<?= $this->include('components/form-edit.php') ?>
					
					</div>
				</div>
				
			</div>
		</div>
	</div>

<?php $this->endSection() ?>
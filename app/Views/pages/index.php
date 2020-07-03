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
						
						<?= $this->include('components/alert.php') ?>
						
						<?= $this->include('components/modal-create-data.php') ?>
					
						<?= $this->include('components/form-search.php') ?>
						
						<?= $this->include('components/table.php') ?>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>

<?php $this->endSection() ?>
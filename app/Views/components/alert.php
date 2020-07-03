<?php if(session('success') != null) : ?>
	<div class="alert alert-success text-center shadow">
		<?= session('success') ?>
	</div>
<?php elseif(session('danger') != null) : ?>
	<div class="alert alert-danger text-center shadow">
		<?= session('danger') ?>
	</div>
<?php endif; ?>
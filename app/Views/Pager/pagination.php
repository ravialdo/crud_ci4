<?php if($count_siswa > 5): ?>

<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation example">
	<ul class="pagination justify-content-center">
	
	<?php if ($pager->hasPrevious()) : ?>
		<li class="page-item">
			<a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
	<?php endif ?>
	
	<?php foreach ($pager->links() as $link) : ?>
		<li class="page-item <?= $link['active'] ? 'active' : '' ?>">
			<a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a>
		</li>
	<?php endforeach ?>
		
	<?php if ($pager->hasNext()) : ?>
		<li class="page-item">
			<a class="page-link" href="<?= $pager->getNext() ?>" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	<?php endif ?>
		
	</ul>
</nav>
<?php endif; ?>
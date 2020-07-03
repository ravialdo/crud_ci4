<div class="table-responsive-sm">
	<table class="table table-striped align-middle">
		<thead>
			<tr>
				<th scope="col">NO</th>
				<th scope="col">Nama</th>
				<th scope="col">Kelas</th>
				<th scope="col">Alamat</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach($siswa as $key) : ?>
				<tr>
					<th scope="row"> <?= $i++ ?> </th>
					<td class="text-capitalize"> <?= $key['nama'] ?> </td>
					<td> <?= $key['kelas'] ?> </td>
					<td> <?= $key['alamat'] ?> </td>
					<td>
						<a href="<?= base_url('siswa/edit/'. $key['id'])?>" class="btn btn-sm btn-primary mt-1">
							Edit
						</a>
									
						<!-- [button] -->
						<button class="btn btn-danger btn-sm mt-1" data-toggle="modal" data-target="#modalDelete<?= $i ?>">
							Hapus
						</button>

						<!-- Modal -->
						<div class="modal fade" id="modalDelete<?= $i ?>" tabindex="-1" aria-labelledby="deleteModal<?= $i ?>" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header bg-danger text-white">
										<h5 class="modal-title" id="deleteModal<?= $i ?>">PERINGATAN!</h5>
											<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button> 
										</div>
										<div class="modal-body">
											<p>Yakin ingin menghapus data siswa?</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
											<a href="<?= base_url('siswa/delete/'. $key['id'])?>" class="btn btn-danger">
												Hapus
											</a>	
										</div>
									</div>
								</div>
							</div>				
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php if(count($siswa) == 0) : ?>
		<p class="text-center">Tidak ada data</p>
	<?php endif; ?>
</div>

<?= $pager->links ()?>
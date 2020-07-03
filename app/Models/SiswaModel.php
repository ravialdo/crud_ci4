<?php namespace App\Models;

use CodeIgniter\Model;
	
class SiswaModel extends Model {
	
	protected $table = 'siswa';
	
	protected $useTimestamps = true;
	
	protected $allowedFields = [
		'nama', 'kelas', 'alamat'
	];
	
	public function getSiswa($id = false){
		if($id ==  false){
				return $this->findAll();
			}		
			return $this->where('id', $id);
	}
}
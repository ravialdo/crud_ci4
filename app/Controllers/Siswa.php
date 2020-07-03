<?php namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
	protected $siswaModel;
	
	public function __construct(){
		$this->siswaModel = new SiswaModel;
		helper('form', 'url');
	}
	
	public function index()
	{
		$data = [
			'siswa' => $this->siswaModel->paginate(5),
			'pager' => $this->siswaModel->pager,
			'count_siswa' => $this->siswaModel->countAll()
		];
		return view('pages/index', $data);
	}
	
	public function create(){
		
		if(!$this->validate([
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh kosong'
				]
			],
			'kelas' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh kosong'
				]
			],
			'alamat' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh kosong'
				]
			]
		])){
			return redirect()->to('/siswa')->withInput()->with('danger', 'Terjadi kesalahan ketika menambahkan data!');
		}
		
		$this->siswaModel->insert([
			'nama' => $this->request->getVar('nama'),
			'kelas' => $this->request->getVar('kelas'),
			'alamat' => $this->request->getVar('alamat')
		]);
		
		return redirect()->back()->with('success', 'Data telah di simpan!');
	}
	
	public function delete($id){
		$data = $this->siswaModel->getSiswa($id)->first();
		
		if(empty($data)){
				throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Siswa Tidak Ditemukan!');
			}
			
		$this->siswaModel->delete(['id' => $id]);
		return redirect()->back()->with('success', 'Data telah di hapus!');
	}
	
	public function edit($id){
		$data = [
			'siswa' => $this->siswaModel->getSiswa($id)->first()
		];
		
		if(empty($data['siswa'])){
				throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Siswa Tidak Ditemukan!');
			}
			
		return view('pages/edit', $data);
	}

	public function update($id){
		
		if(!$this->validate([
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh kosong'
				]
			],
			'kelas' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh kosong'
				]
			],
			'alamat' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh kosong'
				]
			]
		])){
			$data = [
				'siswa' =>$this->siswaModel->getSiswa($id)->first()
			];
	
			 return view('pages/edit', $data);
		}
		
		$edit = $this->siswaModel->getSiswa($id);
		$edit->builder->update([
			'nama' => $this->request->getVar('nama'),
			'kelas' => $this->request->getVar('kelas'),
			'alamat' => $this->request->getVar('alamat')
		]);
		return redirect()->to('/')->with('success', 'Data telah di edit!');
	}
	
	public function search(){
		$q = $this->request->getVar('q');
		$data = [
			'siswa' => $this->siswaModel->orLike('nama', $q)->paginate(5),
			'pager' => $this->siswaModel->pager,
			'count_siswa' => $this->siswaModel->countAll(),
			'q' => $q
		];
		
		return view('pages/index', $data);
	}
	
}

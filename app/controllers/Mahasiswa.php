<?php

class Mahasiswa extends Controller
{
	public function index(){
		$data['judul'] = 'daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->GetAllMahasiswa();
		$this->view('template/header',$data);
		$this->view('Mahasiswa/index',$data);
		$this->view('template/footer');
	}

	public function detail($id){

		$data['judul'] = 'detail Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
		$this->view('template/header',$data);
		$this->view('Mahasiswa/detail',$data);
		$this->view('template/footer');
	}
	public function tambah(){
		if( $this->model('Mahasiswa_model')->TambahDataMahasiswa($_POST) > 0){
			Flasher::setFlash('berhasil','ditambahkan','success');
			header('Location:'.BASEURL.'/mahasiswa');
			exit;
		}else{
			Flasher::setFlash('gagal','ditambahkan','danger');
			header('Location:'.BASEURL.'/mahasiswa');
			exit;
		}
	}
}
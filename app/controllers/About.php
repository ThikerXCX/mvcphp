<?php 

class About extends Controller
{	
	// controller untuk index about
	public function index($nama = 'muhamad rifki', $umur = 19, $pekerjaan = 'mahasiswa')
	{	$data['nama'] = $nama;
		$data['umur'] = $umur;
		$data['pekerjaan'] = $pekerjaan;
		$data['judul'] = 'about me';
		$this->view('template/header',$data);
		$this->view('about/index',$data);
		$this->view('template/footer');
	}

	// controller untuk page about
	public function page()
	{
		$data['judul'] = 'pages';
		$this->view('template/header',$data);
		$this->view('about/page');
		$this->view('template/footer');
	}
}

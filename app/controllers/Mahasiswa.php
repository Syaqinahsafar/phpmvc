<?php

class Mahasiswa extends Controller {
	public function index()
	{
		$data['title'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

		$this->view('templates/header', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{
		$data['title'] = 'Detail Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);

		$this->view('templates/header', $data);
		$this->view('mahasiswa/detail', $data);
		$this->view('templates/footer');
	}

	public function add()
	{
		if( $this->model('Mahasiswa_model')->addMahasiswaData($_POST) > 0 ) {
			Flasher::setFlash('has been', 'added', 'success');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}

	}

	public function delete($id)
	{
		if( $this->model('Mahasiswa_model')->deleteMahasiswaData($id) > 0 ) {
			Flasher::setFlash('already', 'deleted', 'success');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}

	}

	public function getedit()
	{
		echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
	}

	public function edit()
	{
		if( $this->model('Mahasiswa_model')->editMahasiswaData($_POST) > 0 ) {
			Flasher::setFlash('has been', 'edited', 'success');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		} else {
			Flasher::setFlash('gagal', 'edited', 'danger');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}

	public function search()
	{
		$data['title'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->searchDataMahasiswa();

		$this->view('templates/header', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	}

}
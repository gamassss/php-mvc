<?php

class Pegawai extends Controller{
  
  public function index() 
  {
    $data['judul'] = 'Pegawai';
    $data['emp'] = $this->model('Pegawai_model')->getAllPegawai();
    $this->view('templates/header', $data);
    $this->view('pegawai/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id)
  {
    $data['judul'] = 'Detail Pegawai';
    $data['emp'] = $this->model('Pegawai_model')->getPegawaiById($id);
    $this->view('templates/header', $data);
    $this->view('pegawai/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah()
  {
    if( $this->model('Pegawai_model')->tambahDataPegawai($_POST) > 0 ) {
      Flasher::setFlash('Data pegawai', 'berhasil', 'success');
      header('Location: '. BASEURL . 'pegawai');
      exit;
    } else {
      Flasher::setFlash('Data pegawai', 'gagal', 'danger');
      header('Location: '. BASEURL . 'pegawai');
      exit;
    }
  }

  public function ubah()
  {
    
  }

}
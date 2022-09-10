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

}
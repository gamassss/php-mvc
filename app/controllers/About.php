<?php

class About extends Controller {

  public function index($nama = 'gamas', $univ = 'unair', $prodi = 'd3-SI') {
    
    $data["nama"] = $nama;
    $data["univ"] = $univ;
    $data["prodi"] = $prodi;
    $data["judul"] = 'About me';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

  public function page() {
    $data["judul"] = 'Pages';
    $this->view('templates/header',$data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
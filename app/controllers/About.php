<?php

class About extends Controller {

  public function index($nama = 'gamas', $univ = 'unair', $prodi = 'd3-SI') {
    
    $data['nama'] = $nama;
    $data['univ'] = $univ;
    $data['prodi'] = $prodi;
    $this->view('about/index', $data);
  }

  public function page() {
    echo "About/page";
  }
}
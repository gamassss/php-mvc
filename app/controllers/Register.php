<?php

class Register extends Controller {
  public function index() 
  {
    $data["judul"] = 'Sign Up';
    $this->view('register/index');
  }
}
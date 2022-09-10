<?php

class Pegawai_model {

  private $table = 'employees',
          $db;


  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllPegawai()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function getPegawaiById($id)
  {
    $id = intval($id);
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE EMPLOYEE_ID=:EMPLOYEE_ID');
    $this->db->bind('EMPLOYEE_ID', $id);
    return $this->db->single();
  }
}
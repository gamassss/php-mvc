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

  public function tambahDataPegawai($data)
  {
  //   $lname = $data['LAST_NAME'] ?? '';
    $query = "INSERT INTO employees (FIRST_NAME, LAST_NAME, EMAIL, HIRE_DATE, JOB_ID)
              VALUES
              (:FIRST_NAME, :LAST_NAME, :EMAIL, :HIRE_DATE, :JOB_ID)";

    $this->db->query($query);

    $this->db->bind('FIRST_NAME', $data["FIRST_NAME"]);
    $this->db->bind('LAST_NAME', $data["LAST_NAME"]);
    $this->db->bind('EMAIL', $data["EMAIL"]);
    $this->db->bind('HIRE_DATE', $data["HIRE_DATE"]);
    $this->db->bind('JOB_ID', $data["JOB_ID"]);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
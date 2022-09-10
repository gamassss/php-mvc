<?php

class Pegawai_model {

  private $dbh, $stmt;

  public function __construct()
  {
    //data source name
    $dsn = 'mysql:host=localhost;dbname=phpdasar';

    try {
      $this->dbh = new PDO($dsn, 'root', 'root');
    } catch(PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllPegawai()
  {
    $this->stmt =  $this->dbh->prepare('SELECT * FROM pegawai');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
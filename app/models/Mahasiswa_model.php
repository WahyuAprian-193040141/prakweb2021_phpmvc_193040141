<?php

class Mahasiswa_model
{
  private $dbh; // database handler
  private $stmt;

  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  // private $mhs = [
  //   [
  //     "nama" => "Wahyu Aprian",
  //     "nrp" => "193040141",
  //     "email" => "wahyu@mail.unpas.ac.id",
  //     "jurusan" => "Teknik Informatika"
  //   ],
  //   [
  //     "nama" => "Doddy",
  //     "nrp" => "193040111",
  //     "email" => "doddy@mail.unpas.ac.id",
  //     "jurusan" => "Teknik Mesin"
  //   ],
  //   [
  //     "nama" => "Doang",
  //     "nrp" => "193040001",
  //     "email" => "doang@mail.unpas.ac.id",
  //     "jurusan" => "Teknik Industri"
  //   ]
  // ];

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

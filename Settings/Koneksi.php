<?php
namespace Settings;
use \PDO;

class Koneksi{

  private $dbhost = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname = "tesdb";
  protected $db;

  public function __construct(){
    if (!$this->db) {
      try {
          $konek = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->username, $this->password);
          $konek->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        echo "Koneksi Gagal " . $e->getMessage();
      }
      $this->db = $konek;

    }
  }

}

 ?>

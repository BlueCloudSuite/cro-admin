<?php
  class DBService {
    private $host;
    private $user;
    private $pass;
    private $db;

    public function __construct() {
      $this->host = DB_HOST;
      $this->user = DB_USER;
      $this->pass = DB_PASS;
      $this->db = DB_NAME;
    }

    public function query($sql, ...$params) {
      $stmt = mysqli_prepare($this->getConnection(), $sql);
      mysqli_stmt_bind_param($stmt, ...$params);
      return mysqli_fetch_array($stmt);
    }

    public function getConnection() {
      try {
        $conn = mysqli_connect($this->host, $this->user, $this->pass,$this->db);
      } catch (Exception $e){
        header("Location: " . BASE_PATH . "/500"); //set default path
      }
      return $conn;
    }
  }
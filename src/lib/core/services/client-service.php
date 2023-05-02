<?php
  require_once "./service.php";

  class ClientService extends BaseService {
    public function __construct() {
    }

    public function getClients() {
      return $this->dbService->query("SELECT 1;");
    }
  }
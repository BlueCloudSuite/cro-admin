<?php
  class BaseService {
    protected $dbService;
    public function __construct() {
      $this->dbService = new DBService();
    }
  }
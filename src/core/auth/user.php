<?php

class User {
  private $firstName;
  private $lastName;
  private $uuid;

  public function getFullName() {
    return implode(" ", [$this->firstName, $this->lastName]);
  }

  public function getId() {
    return $this->uuid;
  }

  public static function parse($obj) {
    $user = new User();
    $user->firstName = $obj['firstName'];
    $user->lastName = $obj['lastName'];
    return $user;
  }

  public static function currentUser() {
    $user = new User();
    $user->uuid = CURRENT_USER['uuid'];
    $user->firstName = CURRENT_USER['info']['firstName'];
    $user->lastName = CURRENT_USER['info']['lastName'];
    return $user;
  }
}
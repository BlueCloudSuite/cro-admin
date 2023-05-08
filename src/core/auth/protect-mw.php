<?php

class Protect {
  public static function throwForbidden() {
    header("Location: " . BASE_PATH . "/403?path=".CURRENT_PATH);
  }
  public static function allowRole(...$r) {
    if (!in_array(CURRENT_USER["role"], $r)) {
      self::throwForbidden();
    }
  }
}
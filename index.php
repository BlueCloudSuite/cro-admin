<?php
include "./config.php";
define("ASSET_PATH", BASE_PATH . "/assets");
define("IMAGE_PATH", ASSET_PATH . "/images");
define("JS_PATH", ASSET_PATH . "/js");
define("CSS_PATH", ASSET_PATH . "/css");


function main($route)
{
  define("CURRENT_PATH", $route);
  session_start();
  $pathParts = explode('/', $route);
  $current_path = count($pathParts) > 0 ? $pathParts[0] : "";
  $currentUser = isset($_SESSION['currentUser']) ? $_SESSION['currentUser'] : [];
  define("CURRENT_USER", $currentUser);
  $default_route = "/sign-in";

  $logged_in = isset($currentUser['uuid']) ? $currentUser['uuid'] : null;

  if ($logged_in != null) {
    $default_route = "/wizard";
  }

  if (trim($current_path) != "") {
    $isPublic = file_exists("./src/pages/public/$current_path/index.php");
    if ($isPublic) {
      include "./src/pages/public/index.php";
      return;
    }

    if ($logged_in != null) {
      $isValidPath = file_exists("./src/pages/private/$current_path/index.php");
      if (!$isValidPath) {
        header("Location: " . BASE_PATH . "/404?path=$route");
        return;
      }
      include "./src/pages/private/index.php";
      return;
    }
  }
  header("Location: " . BASE_PATH . $default_route); //set default path
}

main($_GET['web_route']);

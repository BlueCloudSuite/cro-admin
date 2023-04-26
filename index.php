<?php
define("BASE_PATH", "/cro-admin");
define("ASSET_PATH", BASE_PATH . "/assets");
define("IMAGE_PATH", ASSET_PATH . "/images");
define("JS_PATH", ASSET_PATH . "/js");
define("CSS_PATH", ASSET_PATH . "/css");


function main($route) {
  $pathParts = explode('/', $route);
  $path = count($pathParts) > 0 ? $pathParts[0] : "";

  if ($path == "") {
    header("Location: " . BASE_PATH . "/wizard"); //set default path
  }

  $isPublic = file_exists("./src/pages/public/$path/index.php");
  
  if ($isPublic) {
    include "./src/pages/public/index.php";
    return;
  }

  $isValidPath = file_exists("./src/pages/private/$path/index.php");
  if (!$isValidPath) {
    header("Location: " . BASE_PATH . "/404?path=$route");
  }

  include "./src/pages/private/index.php";
}

main($_GET['web_route']);
?>

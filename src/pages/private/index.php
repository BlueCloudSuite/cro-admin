<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/style.css" />
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
  <?php include "./src/pages/components/nav.php"; ?>
  <div class="container">
    <div class="row mt-4">
      <?php include "./src/pages/private/$path/index.php" ?>
    </div>
  </div>
  <script src="<?php echo JS_PATH ?>/bootstrap.bundle.min.js"></script>
  <script src="<?php echo JS_PATH ?>/jquery-3.6.4.min.js"></script>
  <script src="<?php echo JS_PATH ?>/jquery.dataTables.min.js"></script>
  <?php 
    $hasScript = file_exists("./src/pages/private/$path/script.php");
    if ($hasScript) include "./src/pages/private/$path/script.php";
  ?>
</body>
</html>
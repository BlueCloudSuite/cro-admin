<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body>
  <div class="container-fluid px-0">
    <?php include "./src/pages/public/$current_path/index.php" ?>
  </div>
  <script src="<?php echo JS_PATH ?>/bootstrap.bundle.min.js"></script>
</body>

</html>
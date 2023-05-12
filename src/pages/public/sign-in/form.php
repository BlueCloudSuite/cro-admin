<?php
$action = isset($_POST["action"]) ? $_POST["action"] : "";
$username = isset($_POST["username"]) ? $_POST["username"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
if ($action == "sign-in") {
  if ($username == "admin" && $password == "admin")
    $_SESSION["currentUser"] = [
      "uuid" => "some-id-here",
      "info" => [
        "firstName" => "Jane",
        "lastName" => "Doe"
      ],
      "role" => $username
    ];
  header("Location: " . BASE_PATH . "/"); //set default path
}
?>

<div class="frm-sign-in p-0 text-center d-flex align-items-center bg-dark">
  <div class="container">
    <img class="mb-5" src="<?php echo IMAGE_PATH ?>/fiaosss.png" alt="Bootstrap" height="80">
    <div class="frm-header">
      <span class="fs-4 text-light">ADMIN LOGIN</span>
    </div>
    <div class="frm-txtfield">
      <form method="POST" action="<?php echo BASE_PATH . "/sign-in" ?>">
        <div class="input-group flex-nowrap">
          <span class="input-group-text bg-dark icon-color" id="addon-wrapping"><i class="bi bi-person-circle"></i></i></span>
          <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap mt-3 mb-2">
          <span class="input-group-text bg-dark icon-color" id="addon-wrapping"><i class="bi bi-key-fill"></i></span>
          <input type="text" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
        </div>
        <input type="hidden" name="action" value="sign-in">
        <button type="submit" value="admin" class="btn btn-dark mt-5">SIGN IN</button>
      </form>
    </div>
  </div>
</div>
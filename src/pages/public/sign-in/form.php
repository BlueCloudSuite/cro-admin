<div class="frm-sign-in p-0 text-center d-flex align-items-center">
  <div class="container">
    <img src="<?php echo IMAGE_PATH ?>/logo.png" alt="Bootstrap" height="80">
    <div class="frm-header my-5">
      <span class="fs-5">LOGIN</span>
    </div>
    <div class="frm-txtfield">
      <form method="POST" action="<?php echo BASE_PATH . "/sign-in" ?>">
        <input type="text" class="form-control my-2" value="admin" name="username" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        <input type="text" class="form-control my-2" value="sign-in" name="action" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        <button type="submit" value="admin" class="btn btn-dark mt-4">ADMIN</button>
      </form>
      <form method="POST" action="<?php echo BASE_PATH . "/sign-in" ?>">
        <input type="text" class="form-control my-2" value="client" name="username" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        <input type="text" class="form-control my-2" value="sign-in" name="action" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        <button type="submit" value="client" class="btn btn-dark mt-4">CLIENT</button>
      </form>
    </div>
  </div>
</div>

<?php
$action = isset($_POST["action"]) ? $_POST["action"] : "";
$username = isset($_POST["username"]) ? $_POST["username"] : "";
if ($action == "sign-in") {
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
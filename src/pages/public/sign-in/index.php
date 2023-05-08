<form method="POST" action="<?php echo BASE_PATH . "/sign-in" ?>">
  <input type="hidden" value="admin" name="username" />
  <input type="hidden" value="sign-in" name="action" />
  <input type="submit" value="admin" />
</form>
<form method="POST" action="<?php echo BASE_PATH . "/sign-in" ?>">
  <input type="hidden" value="client" name="username" />
  <input type="hidden" value="sign-in" name="action" />
  <input type="submit" value="client" />
</form>
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
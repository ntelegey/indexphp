<html>
<body>

<form action="index.php" method="get">
Login: <input type="text" name="login"><br>
Password: <input type="text" name="password"><br>
<input type="submit">
</form>

<php

$login = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $login = test_input($_POST["login"]);
  $password = test_input($_POST["password"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

</body>
</html>

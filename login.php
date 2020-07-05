<?php
session_start();
include_once 'include/class.user.php';
$user = new User();

if (isset($_POST['submit'])) {
    extract($_POST);
    $login = $user->check_login($emailusername, $password);
    if ($login) {
        // Registration Success
        header("location:home.php");
    } else {
        // Registration Failed
        echo 'Wrong username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>OOP Login Module</title>
  <link href="https://unpkg.com/@primer/css/dist/primer.css" rel="stylesheet" />
</head>

<body>
  <div class="container-sm">
    <div class="col-10 p-2 mx-auto">
      <h1 class="h1">Login</h1>
      <form action="" method="post" name="login">
        <div class="form-group">
          <div class="form-group-header">
            <label for="emailusername">Username or Email</label>
          </div>
          <div class="form-group-body">
            <input class="form-control" type="text" id="emailusername" name="emailusername" required />
          </div>
        </div>

        <div class="form-group">
          <div class="form-group-header">
            <label for="password">Password</label>
          </div>
          <div class="form-group-body">
            <input class="form-control" type="password" id="password" name="password" required>
          </div>
        </div>

        <div class="form-group mt-4">
          <div class="form-actions">
            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Login"
              onclick="return(submitlogin());">
          </div>
        </div>

        <div class="form-group">
          <a href="registration.php">Register new user</a>
        </div>
      </form>
    </div>
  </div>
  <script>
  function submitlogin() {
    var form = document.login;
    if (form.emailusername.value == "") {
      alert("Enter email or username.");
      return false;
    } else if (form.password.value == "") {
      alert("Enter password.");
      return false;
    }
  }
  </script>


</body>
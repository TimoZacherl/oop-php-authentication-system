<?php
include_once 'include/class.user.php';
$user = new User();
// Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
if (isset($_POST['submit'])) {
    extract($_POST);
    $register = $user->reg_user($fullname, $uname, $upass, $uemail);
    if ($register) {
        // Registration Success
        echo "<div style='text-align:center'>Registration successful <a href='login.php'>Click here</a> to login</div>";
    } else {
        // Registration Failed
        echo "<div style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link href="https://unpkg.com/@primer/css/dist/primer.css" rel="stylesheet" />
</head>

<body>
  <div class="container-sm">
    <div class="col-10 p-2 mx-auto">
      <h1 class="h1">Registration</h1>
      <form action="" method="post" name="reg">
        <div class="form-group">
          <div class="form-group-header">
            <label for="fullname">Your Name</label>
          </div>
          <div class="form-group-body">
            <input class="form-control" type="text" id="fullname" name="fullname" required>
          </div>
        </div>

        <div class="form-group">
          <div class="form-group-header">
            <label for="uname">Username</label>
          </div>
          <div class="form-group-body">
            <input class="form-control" type="text" id="uname" name="uname" required>
          </div>
        </div>

        <div class="form-group">
          <div class="form-group-header">
            <label for="uemail">Email</label>
          </div>
          <div class="form-group-body">
            <input class="form-control" type="email" id="uemail" name="uemail" required>
          </div>
        </div>

        <div class="form-group">
          <div class="form-group-header">
            <label for="upass">Password</label>
          </div>
          <div class="form-group-body">
            <input class="form-control" type="password" id="upass" name="upass" required>
          </div>
        </div>

        <div class="form-group mt-4">
          <div class="form-actions">
            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Register"
              onclick="return(submitreg());">
          </div>
        </div>

        <div class="form-group">
          <a href="login.php">Already registered? Click Here!</a>
        </div>
      </form>
    </div>
  </div>

  <script>
  function submitreg() {
    var form = document.reg;
    if (form.name.value == "") {
      alert("Enter name.");
      return false;
    } else if (form.uname.value == "") {
      alert("Enter username.");
      return false;
    } else if (form.upass.value == "") {
      alert("Enter password.");
      return false;
    } else if (form.uemail.value == "") {
      alert("Enter email.");
      return false;
    }
  }
  </script>
</body>

</html>
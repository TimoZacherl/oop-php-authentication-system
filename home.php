<?php
session_start();
    include_once 'include/class.user.php';
    $user = new User();

    $uid = $_SESSION['uid'];

    if (!$user->get_session()) {
        header("location:login.php");
    }

    if (isset($_GET['q'])) {
        $user->user_logout();
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link href="https://unpkg.com/@primer/css/dist/primer.css" rel="stylesheet" />
</head>

<body>
  <div class="Header">
    <div class="Header-item Header-item--full"></div>
    <div class="Header-item ml-auto mr-6">
      <a class="Header-link" href="home.php?q=logout">LOGOUT</a>
    </div>
  </div>
  <div class="container-sm">
    <div class="pagehead">
      <h1>
        Hello <?php $user->get_fullname($uid); ?>
      </h1>
    </div>
    <div id="footer"></div>
  </div>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>
    <style>
      .form-group{
        display: flex;
        justify-content: space-around;
      }
      form{
        padding: 40px;
        box-shadow: 0px 0px 10px gray;
      }
      .alert-danger{
        margin: 0;
      }
      .navbar{
        border-radius: 0;
      }
    </style>
</head>
<body>
  <?php
  session_start();

  if (isset($_SESSION['login'])) {
    header('location:dashboard.php');
  }

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user == "ahmed" && $pass == 123) {
      $_SESSION['login'] = "";
      header('location:dashboard.php');
    }else{
      echo '<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> Your username or Password is wrong !!
  </div>
</div>';
    }
  }
  ?>

  <nav class="navbar navbar-inverse">
    <a href="#" class="navbar-brand">Test.com</a>
</nav>
  <div class="form-group">
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <label>Email address:</label>
      <input type="text" class="form-control" placeholder="Enter your username" name="user">
      <label>Password:</label>
      <input type="password" class="form-control" placeholder="Enter your password" name="pass">
      <br>
      <input type="submit" class="btn btn-default">
  </form>
  </div>
</body>
</html>
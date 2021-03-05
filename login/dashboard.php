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
      .navbar{
        border-radius: 0;
      }
    </style>
</head>
<body>
  <?php
    session_start();
    if (!isset($_SESSION['login'])) {
      header('Location:index.php');
    }

  ?>
  <nav class="navbar navbar-inverse">
    <a href="#" class="navbar-brand">Dashboard</a>
    <a href="logout.php" style="float: right; padding: 15px; color: #fff;">Logout</a>
</nav>
</body>
</html>
<?php include 'helpers/check_auth.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Website Testing with Behat</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <nav>
      <div class='nav-containter'>
        Welcome <?= $_SESSION['user']['name'] ?>
        <a href="/logout.php">Log out</a>
      </div>
    </nav>
    <?php include 'helpers/alerts.php'; ?>
    <div class="container">You rock.</div>
  </body>
</html>

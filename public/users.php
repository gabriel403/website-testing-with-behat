<?php include 'helpers/check_auth.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Users - Website Testing with Behat</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <nav class="header">
      <div class='nav-containter'>
        Welcome <?= $_SESSION['user']['name'] ?>
        <a href="/logout.php">Log out</a>
        <a href="/users.php">User Admin</a>
        <a href="/settings.php">Settings</a>
      </div>
    </nav>
    <?php include 'helpers/alerts.php'; ?>
    <div class="container">
      <h1>Bunch of noobs.</h1>
      <ul>
        <li>Noob 1</li>
        <li>Noob 2</li>
      </ul>
    </div>
    <nav class="footer">
      <ul>
        <li><a href="/faq.php">FAQ</a></li>
        <li><a href="/legal.php">legal</a></li>
      </ul>
    </nav>
  </body>
</html>

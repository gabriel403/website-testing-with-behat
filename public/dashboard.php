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
    <nav class="header">
      <div class='nav-containter'>
        Welcome <?= $_SESSION['user']['name'] ?>
        <a href="/logout.php">Log out</a>
        <?php if (authorised('admin')) { ?><a href="/users.php">User Admin</a><?php } ?>
        <a href="/settings.php">Settings</a>
      </div>
    </nav>
    <?php include 'helpers/alerts.php'; ?>
    <div class="container">You rock.</div>
    <nav class="footer">
      <ul>
        <li><a href="/faq.php">FAQ</a></li>
        <li><a href="/legal.php">legal</a></li>
      </ul>
    </nav>
  </body>
</html>

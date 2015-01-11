<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FAQ - Website Testing with Behat</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <nav class="header">
      <div class='nav-containter'>
        <form action="/login.php" method="post">
          <input type="email" name="email" placeholder="email address">
          <input type="password" name="password" placeholder="password">
          <button type="submit">Login</button>
        </form>
      </div>
    </nav>
    <?php include 'helpers/alerts.php'; ?>
    <div class="container">
      <h1>FAQ</h1>
      <ul>
        <li>Some FAQ</li>
        <li>Another FAQ</li>
        <li>Lots of FAQ</li>
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

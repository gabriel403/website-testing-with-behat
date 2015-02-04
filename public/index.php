<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Website Testing with Behat</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="/js/jquery-2.1.3.min.js"></script>
    <script src="/js/awesome.js"></script>
  </head>
  <body>
    <nav class="header">
      <div class='nav-containter'>
        <form action="/login.php" method="post">
          <button id="loginButton" type="submit">Login</button>
        </form>
      </div>
    </nav>
    <?php include 'helpers/alerts.php'; ?>
    <div class="container">Please login or go away.</div>
    <nav class="footer">
      <ul>
        <li><a href="/faq.php">FAQ</a></li>
        <li><a href="/legal.php">legal</a></li>
      </ul>
    </nav>
  </body>
</html>

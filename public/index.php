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
        <form action="/login.php" method="post">
          <input type="email" name="email" placeholder="email address">
          <input type="password" name="password" placeholder="password">
          <button type="submit">Login</button>
        </form>
      </div>
    </nav>
    <?php include 'helpers/alerts.php'; ?>
    <div class="container">Please login or go away.</div>
  </body>
</html>

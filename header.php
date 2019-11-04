
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>

<div class="topnav">
  <div class="login-container">
  <form action="signup.php" method="post">
          <button type="submit" name="signup-btn">Sign Up</button>
  </form>
  </div>
  <div class="login-container">
  <form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
  </form>
  </div>
  <a class="active" href="#">Camagru</a>
  <div class="login-container">
    <form action="includes/login.inc.php.php">
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Password" name="psw">
      <button type="submit">Login</button>
    </form>
  </div>
</div>

<div>
  <div class="img">
      <div class="row">
        <img src="images/logo2.png" alt="logo">
      </div>
      <br><br><br><br>
      <main>
    </main>
  </div>
</div>

</body>
</html>
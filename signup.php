<?php
    require "header.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>

<div class="topnav">
  <a class="active" href="#">Camagru</a>
</div>

<div>
  <div class="img">
      <div class="row">
        <img src="images/logo2.png" alt="logo">
      </div>
  </div>
  <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4 form-div">
                <form action="includes/login.inc.php" method="post">
                    <div class="form-group">
                        <input type="text" name="mailuid" placeholder="Username/E-mail..." class="form-control form-contol-lg">
                    </div>
                    <div class="form-group">
                        <input type="text" name="pwd" placeholder="Password..." class="form-control form-contol-lg">
                    </div>
                        <button type="submit" name="login-submit" class="btn btn-primary btn-block btn-lg">Login</button>
                </form>
                <br>
                <p class="text-center" >Not yet a member? <a href="signup.php" target="_blank">Sign Up</a></p>
        </div>
      </div>
</div>
        
</div>

</body>
</html>
    <main>
        
        
    </main>
<?php
    require "footer.php";
?>
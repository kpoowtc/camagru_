<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link rel="stylesheet" href="styles.css">

<title>Sign In</title>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4 form-div">
      <form id="registerForm" method="post">
        <h3 class="text-center">Sign In</h3>

        <div id="errors"></div>
        
        
        <div class="form-group">
          <label for="username">Username or Email</label>
          <input id="username" type="text" name="username" class="form-control form-control-lg">
        </div><br>
        <div class="form-group">
          <label for="password">Password</label>
          <input id="password" type="password" name="password" class="form-control form-control-lg">
        </div><br>
        <div>
          <button type="submit" name="signin-btn" class="btn btn-primary btn-block btn-lg">Sign In</button>
        </div><br>
        <p>Not a member? <a href="signup.php">Sign Up</a></p>
      </form>
    </div>
  </div>
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
</body>
</html>
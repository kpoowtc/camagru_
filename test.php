<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #157EFA;
  color: white;
}
img {
  display: block;
  margin-top: 100px;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#">Home</a>
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
        </div>
      </div>
</div>
        
</div>

</body>
</html>
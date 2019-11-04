<?php
    require "header.php";
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/stylesheet.css">
    <main>
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4 form-div">
                <form action="includes/signup.inc.php" method="post">
                    <h3 class="text-center">Fill in the form:
                    <div class="form-group">
                        <input type="text" name="uid" placeholder="Username..." class="form-control form-contol-lg">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="E-mail..." class="form-control form-contol-lg">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pwd" placeholder="Password..." class="form-control form-contol-lg">
                    </div>
                    <div class="form-group">
                        <input type="password" name="repeat_pwd" placeholder="Repeat Password..." class="form-control form-contol-lg">
                    </div>
                        <button type="submit" name="signup-submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                </form>
                <br>
        </div>
      </div>
    </main>
<?php
    require "footer.php";
?>
<?php include('DBConnector.php') ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>ArtSpace</title>
  <link rel="icon" type="image/logo" href="img/artspace-logo-2.png">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="body">
      
        <!-- LOGIN FORM -->

        <div class="notify-box"><?php include('error.php'); ?>
        </div>
        
        
        <div class="login-page">
            <div class="form-box">
              <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">login</button>
                <button type="button" class="toggle-btn" onclick="register()">register</button>
              </div>
              
              <form method="post" action="login.php" id="login" class="input-group-1">
                <input type="text" name="username" class="input-field" placeholder="Username" required>

                <input type="password" name="password" id="password" class="input-field" data-toggle="password" placeholder="Enter password" required>
                <label class="login_pass">
                  <input type="checkbox" id="login-toggle" />
                  <i class="fa fa-eye"></i>
                  <i class="fa fa-eye-slash"></i>
                </label>
                <button type="submit" class="submit-btn" name="login_user">log in</button>
              </form>

              <form method="post" action="login.php" id="register" class="input-group-2">
                <input type="text" name="username"class="input-field" placeholder="User ID" required>
                <input type="email" name="email" class="input-field" placeholder="Email address" required>

                <input type="password" name="password_1" id="password_1" class="input-field" data-toggle="password" placeholder="Enter password" required>  
                <label class="register_pass">
                  <input type="checkbox" id="register-toggle-1" />
                  <i class="fa fa-eye"></i>
                  <i class="fa fa-eye-slash"></i>
                </label>

                <input type="password" name="password_2" id="password_2" class="input-field" data-toggle="password" placeholder="Re-enter password" required>  
                <label class="register_pass_1">
                  <input type="checkbox" id="register-toggle-2" />
                  <i class="fa fa-eye"></i>
                  <i class="fa fa-eye-slash"></i>
                </label>

                <button type="submit" class="submit-btn" name="reg_user">register</button>
              </form>
            </div>
        </div>
        
        <!-- LOGO & DESCRIPTION -->
        <div class="welcome">   
            <div class="logo-desc">
                <h1>welcome back to</h1>
                <img src="img/artspace-logo-1.png" alt="">
                <p>
                    ArtSpace is where art<br> 
                    and community thrive.<br>
                    Explore over 350 million pieces <br>
                    of art while connecting to fellow <br>
                    artists and art enthusiasts. <br>
                </p>
            </div>
        </div>
    </div>
    <script src="./login.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <script>
      $(document).ready(function () {
        $('#login-toggle').click(function () {
          $('#password').attr('type', $(this).is(':checked') ? 'text' : 'password');
        });
      });

      $(document).ready(function () {
        $('#register-toggle-1').click(function () {
          $('#password_1').attr('type', $(this).is(':checked') ? 'text' : 'password');
        });
      });

      $(document).ready(function () {
        $('#register-toggle-2').click(function () {
          $('#password_2').attr('type', $(this).is(':checked') ? 'text' : 'password');
        });
      });
    </script>
  </body>


</html>
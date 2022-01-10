<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="https://thumbs.dreamstime.com/b/welcome-icon-logo-word-welcome-dark-background-white-welcome-icon-logo-word-welcome-dark-background-133072545.jpg" alt="">
      </div>
      <div class="back">
        <img class="backImg" src="https://cdn.movertix.com/media/catalog/product/cache/image/640x/s/a/samsung-galaxy-a12-dual-sim-black-64gb-and-4gb-ram-sm-a125f-ds-back_2_2_1_2.jpg" alt="">
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            <form action="logincode.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="pass" placeholder="Enter your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>

    <?php
    session_start();
    include('dbconnection.php');
    global $conn;
    if(isset($_POST["signup"]))
    {
    $name=mysqli_real_escape_string($conn, $_POST["name"]);
    $email=mysqli_real_escape_string($conn, $_POST["email"]);
    $password=mysqli_real_escape_string($conn, $_POST["pass"]);
    $repassword=mysqli_real_escape_string($conn, $_POST["repass"]);
    
    $check_email=mysqli_num_rows(mysqli_query($conn, "SELECT email FROM user WHERE email='$email'"));
    if($password !== $repassword)
    {
      echo "<script>alert('Password did not match')</script>";
    }
    else if ($check_email>0)
    {
      echo "<script>alert('Email already exist')</script>";
    }
    else{ 
    $sql="INSERT INTO ephone(name, password, email) VALUES ('$name', '$password', '$email')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
    echo "<script>alert('Registration sucessfully')</script>";
    }else{
        echo "<script>alert('Registration failed')</script>";
    }
    }
    }
    ?>

      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="login.php" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="pass" placeholder="Enter your password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="repass" placeholder="Enter your password again" required>
              </div>
              <div class="button input-box">
                <input type="submit" name="signup" value="Sumbit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>

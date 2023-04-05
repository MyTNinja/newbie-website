<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="register.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">

        <form action="signin.php" method="post" class="sign-in-form" name="loginForm"
          onsubmit="return validateLoginForm()">
          <h2 class="title">Sign in</h2>

          <div class="input-field" id="lemail">
            <i class="fas fa-envelope" id="i"></i>
            <input type="email" placeholder="Email" name="lemail" value="" maxlength="30" required="" />
            <i class="text-danger fas"> </i>
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="lpass" value="" maxlength="8" required="" />
            <i class="text-danger fas"> </i>
          </div>

          <input type="submit" name="login" value="Login" class="btn solid" />
        </form>

        <form action="signup.php" method="post" class="sign-up-form" name="registerForm"
          onsubmit="return validateRegistrationForm()">
          <h2 class="title">Sign up</h2>
          <div class="input-field" id="rname">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name" name="rname" value="" maxlength="50" required="" />
            <i class="text-danger fas"> </i>
          </div>

          <div class="input-field" id="remail">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="remail" value="" maxlength="30" required="" />
            <i class="text-danger fas"> </i>
          </div>

          <div class="input-field" id="rphone">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Mobile No." name="rphone" value="" maxlength="10" required="" />
            <i class="text-danger fas"> </i>
          </div>

          <div class="input-field" id="rpass">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="rpass" value="" maxlength="8" required="" />
            <i class="text-danger fas"> </i>
          </div>

          <div class="input-field" id="rcpass">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="rcpass" value="" maxlength="8" required="" />
            <i class="text-danger fas"> </i>
          </div>

          <button type="submit" name="signup" class="btn" id="signun">Sign Up</button>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn transparent" id="sign-up-btn">Sign up</button>
        </div>
        <img src="img/sign-up.png" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">Sign in</button>
        </div>
        <img src="img/sign-in.png" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="register.js">
  </script>
</body>

</html>
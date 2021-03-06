<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Connect</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Aclonica|Mansalva|New+Rocker|Rock+Salt&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="./css/connect.css" />
    <link rel="stylesheet" href="./css/stars.css" />
    <link rel="stylesheet" href="./css/style.css"/>
  </head>

  <body>
    <!-- ==========================
            Header
    ============================-->
    <header id="header" style="background-color: rgba(6, 12, 34, 0.98);">
      <div class="container">
        <div id="logo" class="pull-left">
          <h1 style="font-family: 'Rock Salt', cursive;">
            <a href="./index.php">HS<span>R</span></a>
          </h1>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./indian.php">Indian</a></li>
            <li><a href="./foreign.php">Foriegn</a></li>
            <li><a href="./testimonials.php">Testimonials</a></li>
            <li class="connect"><a href="#">Connect with Us</a></li>
          </ul>
        </nav>
      </div>
      <div id="stars"></div>
      <div id="stars2"></div>
      <div id="stars3"></div>
    </header>
    <!-- #header -->

    <!-- ==========================
                Form
        ============================-->
    <section id="form">
      <div class="container1" id="container1">
        <div class="form-container1 sign-up-container1">
          <form action="registration.php" method="POST">
            <h2 style="font-weight: 700;font-size: 5vh;">Create Account</h2>
            <div class="social-container1">
              <a href="https://www.facebook.com/" class="social" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="https://accounts.google.com/signin/v2/identifier?passive=1209600&continue=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&followup=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="social"><i class="fa fa-google-plus" target="_blank"></i></a>
              <a href="https://www.linkedin.com/login" target="_blank" class="social"><i class="fa fa-linkedin"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" placeholder="Name" name="user" required />
            <input type="email" placeholder="Email" name="email" required />
            <input type="password" placeholder="Password" name="password" required />
            <input type="password" placeholder="Confirm Password" name="cpassword" required />
            <button name="register">Sign Up</button>
          </form>
        </div>
        <div class="form-container1 sign-in-container1">
          <form action="validation.php" method="POST">
            <h1>Sign in</h1>
            <div class="social-container1">
              <a href="https://www.facebook.com/" class="social" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="https://accounts.google.com/signin/v2/identifier?passive=1209600&continue=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&followup=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="social" target="_blank"><i class="fa fa-google-plus"></i></a>
              <a href="https://www.linkedin.com/login" target="_blank" class="social"><i class="fa fa-linkedin"></i></a>
            </div>
            <span>or use your account</span>
            <input type="text" placeholder="User_name" name="user" required />
            <input
              type="password"
              placeholder="Password"
              name="password"
              required
            />
            <a href="#">Forgot your password?</a>
            <button type="submit" name="login">Sign In</button>
          </form>
        </div>
        <div class="overlay-container1">
          <div class="overlay">
            <div class="overlay-panel overlay-left">
              <h1>Welcome Back!</h1>
              <p>
                Have an account already? <br />
                please login with your personal info
              </p>
              <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
              <h1>Hey, Foodie!</h1>
              <p>Enter your personal details and start your journey with us</p>
              <button class="ghost" id="signUp">Sign Up</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- #form -->

    <script src="./js/connect.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
      type="text/javascript"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="styles/login-register.css">
    <title>YUM! - Login</title>
  </head>

  <body>

    <div class="bg-image"></div>

    <div class="form-container">
        <div>
            <img class="logo-register" src="./images/Yum!.png" alt="Yum! logo"/>
        </div>

        <div class="title">
            <p>Login</p>
        </div>

        <form id= "login-form" action="./include/logincheck.php" method="post">
            <div class="email-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Enter your email..." required/>
            </div>

            <div class="password-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password..." required/>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn-green btn-left" name="login">Login</button>
                <button type="button" class="btn-red btn-right" onclick="document.location='index.php'">Back</button>
            </div>
        </form>

        <div class="login-link">
            <a class="text-left" href="./register.php">New here? Register now!</a>
            <a class="text-right" href="./forgot-password.php">Forgot password? Click here!</a>
        </div>


    </div>

  </body>

</html>

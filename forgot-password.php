<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="styles/login-register.css">
    <title>YUM! - Forgot password</title>
  </head>

  <body>

    <div class="bg-image"></div>

    <div class="form-container">
        <div>
            <img class="logo-register" src="./images/Yum!.png" alt="Yum! logo"/>
        </div>

        <div class="title">
            <p>Forgot password</p>
        </div>

        <form id= "forgot-password-form" action="./include/forgot-password.handler.php" method="post">
            <div class="email-group">
                <label for="email">Enter your email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email..." required/>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn-green btn-left" name="submit" >Submit</button>
                <button type="button" class="btn-red btn-right" onclick="document.location='login.php'">Back</button>
            </div>
        </form>

    </div>

  </body>

</html>

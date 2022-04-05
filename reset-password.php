<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="styles/login-register.css">
    <script type="text/javascript" src="scripts/register.js" defer></script>
    <title>YUM! - Reset password</title>
  </head>

  <body>

    <div class="bg-image"></div>

    <div class="form-container">
        <div>
            <img class="logo-register" src="./images/Yum!.png" alt="Yum! logo"/>
        </div>

        <div class="title">
            <p>Reset password</p>
        </div>

        <form id= "register-form" action="" method="post">
            <div class="password-group">
                <label for="password">Enter New Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password..." required/>
            </div>

            <div class="password-confirm-group">
                <label for="password_confirm">Confirm New Password</label>
                <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirm your password..." required/>
            </div>

            <button type="submit" class="btn-green btn-left" name="submit">Submit</button>
            <button type="button" class="btn-red btn-right" onclick="document.location='index.php'">Home</button>
        </form>
    </div>

  </body>

</html>

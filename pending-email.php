

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="styles/login-register.css">
    <script type="text/javascript" src="scripts/register.js" defer></script>
    <title>YUM! - Pending Email</title>
  </head>

  <body>

    <div class="bg-image"></div>

    <div class="form-container">
        <label>
			We have sent an email to  <b><?php echo $_GET['email'] ?></b> to help you recover your account. 
        </label>
	    <label>Please login into your email account and click on the link we sent to reset your password</label>
    </div>

  </body>

</html>

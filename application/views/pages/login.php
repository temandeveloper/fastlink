<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="\asset\css\login.css">
  </head>
  <body>
    <div class="loginBox">
      <img src="<?php echo base_url(); ?>asset/images/user.png" class="user">
      <h2>Login</h2>
      <form id="form_login" class="form_active" action="Login" method="post">
        <p>Username</p>
        <input type="text" name="username" placeholder="Masukan Username" required>
        <p>Password</p>
        <input type="password" name="password" placeholder="Masukan Password" required>
        <input type="submit" name="submit" value="Masuk">
      </form>
    </div>
  </body>
</html>

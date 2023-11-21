<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="formstyles.css">
  </head>
  <body>
    <div class="center">
      <h1>Registro</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="password" required>
            <span></span>
            <label>CPF</label>
          </div>
          <div class="txt_field">
            <input type="password" required>
            <span></span>
            <label>Password</label>
          </div>
        <div class="signin_link">
        <input type="submit" value="Registrar">
        <div class="signup_link">
            Already a member? <a href="logar.php">Signin</a>
          </div>
      </form>
    </div>

  </body>
</html>

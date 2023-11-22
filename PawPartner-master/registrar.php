<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="formstyles.css">
  </head>
  <body>
    <div class="center">
      <h1>Cadastro</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Usuário</label>
        </div>
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="number" required>
            <span></span>
            <label>CPF</label>
        </div>
        <div class="txt_field">
          <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
          <span></span>
          <label>Celular</label>
        </div>
          <div class="txt_field">
          <input type="date" required>
          <span></span>
          <label>Data de nascimento</label>
        </div>
        <div>
                    <label>Endereço</label>
                    <select class="custom-select">
                    <option selected>Brasil</option>
                    <option>USA</option>
                    <option>Japão</option>
                    <option>Alemanha</option>
                    <option>Inglaterra</option>
              </select>
          </div>
          <div class="txt_field">
            <input type="password" required>
            <span></span>
            <label>Senha</label>
          </div>
        <div class="signin_link">
        <input type="submit" value="Cadastrar">
        <div class="signup_link">
            Já possui uma conta? <a href="logar.php">Logar</a>
          </div>
      </form>
    </div>

  </body>
</html>

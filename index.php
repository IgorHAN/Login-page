<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">
        <div class="form-box active" id="login-form">
        <form action="processa_usuario.php" method="post">
    <input type="hidden" name="acao" value="login">
    <h2>Login</h2>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit" name="login">Login</button>
    <p>Não tem uma conta?<a href="#" onclick="showForm('register-form')"> <br> Cadastre-se</a></p>
</form>

        </div>
        <div class="form-box" id="register-form">
        <form action="processa_usuario.php" method="post">
    <input type="hidden" name="acao" value="registrar">
    <h2>Registrar-se</h2>
    <input type="name" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <select name="role" required>
        <option value="">---Selecione a opção---</option>
        <option value="user">Usuário</option>
        <option value="adm">Administrador</option>
    </select>
    <button type="submit" name="register">Cadastre-se</button>
    <p>Já tem uma conta?<a href="#" onclick="showForm('login-form')"> <br> Entrar</a></p>
</form>

        </div>

    </div>
    <script src="script.js"></script>
</body>
 
</html>
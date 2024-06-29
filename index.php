<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="ISO-8859-1">
    <meta charset="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/bootstrap/bootstrap.min.css">
    <script src="lib/bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>SA Artefatos de Cimento</title>
</head>

<body>
<!--form action="/processar-formulario" method="post"-->
<div class="img">
<img src="./img/logo blocos e madeiras.png"></img>
</div>
<div class="form">
<form>
    <h3>Login</h3>
    <input type="text" placeholder="Login" id="login"   required>
    <input type="password" placeholder="Senha" id="senha"  required>
    <input type="submit" onclick="logar(); return false">
</form>

<script>
    function logar() {
        var login = document.getElementById('login').value;
        var senha = document.getElementById('senha').value;

        if(login == "admin" && senha == "admin"){
            alert('Seja bem-vindo a página inicial');
            location.href = "home.php";
        }else{
            alert('Usuário ou senha incorretos');
        }
    }
</script>
</div>
</body>
</html>


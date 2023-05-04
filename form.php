
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="logar.php" method="get">

    <div class="titulo">Login Now</div>
        <input type="text" name="email" placeholder="Entre com seu email" class="inp">
        <input type="password" name="senha" placeholder="Entre com sua senha" class="inp">
        <input type="submit" value="LOGIN" name="btn">
        <div class="ch">
        <input type="checkbox" name="lembrar" id="check"  class="check">
        <label for="check">Remember me</label>
    </div>
        <div class="formas">
            <div class="links">
                <a href="">Cadastrar-se</a>
            </div>
            <div class="links2">
                <a href="">Esqueci a senha</a>
            </div>
        </div>
        </form>
</body>
</html>

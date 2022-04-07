<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função empty</title>
</head>
<body>
<form action="" method = "post">
    Usuário: <input name="login" type="text" size="10"><br>
    Senha: <input name="pass" type="password" size="10"><br>
    <input type="submit" value="Acessar">
    <input type="reset" value="Limpar">
</form>

    <?php
        if($_POST){
            $login = $_POST ['login'];
            $pass = $_POST ['pass'];
                if(empty($login) or empty($pass)){
                    print("Preencha o campo usuário ou senha corretamente!");
                }
                else{
                    print("Acesso ao sistema com exito!");
                }
        }
    ?>
</body>
</html>
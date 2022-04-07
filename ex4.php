<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções especificas</title>
</head>
<body>

<form action="" method = "post">
    Valor 1: <input name="a" type="text" size="5"><br>
    Valor 2: <input name="b" type="text" size="5"><br>
    <input type="submit" value="Multiplicar">
    <input type="reset" value="Limpar">
</form>

    <?php
        if($_POST) {
        $v1 = $_POST ['a'];
        $v2 = $_POST ['b'];
            if(is_numeric($v1) and is_numeric($v2)){
                $res = $v1 * $v2;
                print("A multplicação resutou em: $res");
            }
            else{
                print("Valor(es) inválido(s)! Digite outro(s)!");
            }

        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php
        for($fator = 1; $fator <= 10; $fator++){
            print("<br/>Tabuada do número $fator<br/>");
            for($oper = 1; $oper <= 10; $oper++){
            $resultado = $oper * $fator;
            echo"<br/>$fator x $oper = $resultado <br/>";
            }
        }
    ?>
</body>
</html>
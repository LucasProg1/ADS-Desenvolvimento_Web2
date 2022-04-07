<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de Formulários no PHP</title>
</head>
<body>
    <?php   
        $nome=$_GET['nome'];
        $idade=$_GET['idade'];

        if ($nome == "" or $idade == ""){
            print("Valores em branco! Preencha, por favor!");
        }
        else{
            print("Seja bem-vindo <font color='blue'> $nome </font>!");
            print("<br>Você tem  <font color='orange'> $idade </font> anos!");}
    ?>
</body>
</html>
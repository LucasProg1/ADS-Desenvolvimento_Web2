<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
   <?php

    $nota = $_GET['nota'];
    if($nota >= 92 & $nota <= 100){
    print("O Aluno tirou nota: A");
    }
    elseif($nota >= 84 & $nota <= 91){
        print("O Aluno tirou nota: B");
    }
    elseif($nota >= 75 & $nota <= 83){
        print("O Aluno tirou nota: C");
    }
    elseif($nota >= 63 & $nota <= 74){
        print("O Aluno tirou nota: D");
    }
    elseif($nota <= 62){
        print("O Aluno tirou nota: E");
    }
   ?> 
</body>
</html>
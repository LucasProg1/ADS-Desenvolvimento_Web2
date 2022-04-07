<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertendo variáveis</title>
</head>
<body>
    <?php
        $varX = 15;
        $varX = (int) $varX;
        echo $varX. "<br/>";

        $varAB = 3.9;
        $varAB = (float) $varAB;
        echo $varAB. "<br/>";

        $outra = 20;
        $outra = (double) $outra;
        echo $outra. "<br/>";

        $nova = 7.6;
        $nova = (integer) $nova;
        echo $nova. "<br/>";

        $a = 12;
        $b = 13.35;
        $c = (integer) ($a + $b * 1.15);
        $d = (double) ($a + $b * 1.15);
        $e = (boolean) ($a + $b * 1.15);
        echo $c. "<br/>".$d."<br/>". $e,"<br/>";
    ?>
</body>
</html>
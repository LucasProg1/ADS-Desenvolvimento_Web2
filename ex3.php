<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função settype</title>
</head>
<body>
    <?php
        $x = 15;
        settype($x, 'double');
        echo $x. "<br/>";

        $y = 25.3;
        settype($y, 'integer');
        echo $y. "<br/>";

        $z = "boa noite";
        settype($z, 'string');
        echo $z. "<br/>";

        $w = 0;
        settype($w, 'boolean');
        echo $w. "<br/>"; //não imprime nada

        print gettype($x). "<br/>"; //double
        print gettype($y). "<br/>"; //integer
        print gettype($z). "<br/>"; //string
        print gettype($w). "<br/>"; //boolean

        $comp =($x + $y);
        print gettype($comp). "<br/>";

    ?>
</body>
</html>
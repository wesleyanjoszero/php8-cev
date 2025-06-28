<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = hexadecimal 0b = binário 0 = octal 
        $n = 300;
        $n = 0x1A;
        $n = 0b1011;
        $n = 010;
        echo 'O valor da variável é '. $n .'<br>';

        $v = 300;
        $v = 45.2;
        $v = true;
        $v = 'Wesley';
        var_dump($v);
        
        $n = 3e2;
        echo '<br>O valor é '. $n .'<br>';
        var_dump($n);
        
        $n = (integer) 3e2;
        echo '<br>O valor é '. $n .'<br>';
        var_dump($n);

        $v = (float) '950';
        var_dump($v);

        $single = true;
        var_dump($single);
        print '<br>O valor é '. $single .'<br>';

        echo '<br>';
        $a = [6, 2.5, 'Maria', 3, 5];
        var_dump($a);

        class People {
            private string $name;
        }

        $p = new People;
        echo '<br>';
        var_dump($p);
    ?>
</body>
</html>
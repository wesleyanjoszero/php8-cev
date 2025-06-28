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

    ?>
</body>
</html>
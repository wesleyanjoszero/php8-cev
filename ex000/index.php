<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
        echo 'hoje é dia '. date('d') .'<br>';
        echo 'hoje é dia '. date('d/M') .'<br>';
        echo 'hoje é dia '. date('d/M/Y') .'<br>';
        echo 'e a hora atual é '. date('G:i:s') .'<br>';
        echo 'Dia: '. date('d/m/Y') .' Horário '. date('H:i:s') .'<br>';
        echo 'Dia e horário: '. date('d/m/Y H:i:s') .'<br>';
        
        date_default_timezone_set('America/Sao_Paulo');
        echo '<hr>';
        echo 'Dia e horário: '. date('d/m/Y H:i:s') .'<br>';
    ?>
</body>
</html>
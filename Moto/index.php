<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require_once 'Habilitado.php';
    require_once 'Moto.php';

    $p[0] = new Habilitado("Rafael", 21, "M", "A");
    $m[0] = new Moto("XRE", 300, "PRETA", $p[0]);

    $m[0]->colocarCapacete();
    $m[0]->andarMoto();

    echo '<pre>';
    print_r($m);
    echo '</pre>';

    ?>
</body>

</html>
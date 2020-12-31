<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require_once 'Pessoa.php';
    require_once 'Livro.php';

    $p[0] = new Pessoa("Rafael", 21, "M");
    $p[1] = new Pessoa("Gabriela", 18, "F");

    $l[0] = new Livro("A bela e a fera", "Olavo de Carvalho", 300, $p[0]);
    $l[1] = new Livro("Minha Primeira Moto", "Oséias Fernandes", 500, $p[0]);
    $l[2] = new Livro("Receitas Culinárias", "Marciléia Fernandes", 800, $p[1]);


    $l[0]->abrir();
    $l[0]->folhear(80);
    $l[0]->avancarPag();
    $l[0]->detalhes();

    $l[2]->folhear(900);
    $l[2]->detalhes();

    ?>
</body>
</html>
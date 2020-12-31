<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';

        $v[0] = new Video("Aula 01 de POO");
        $v[1] = new Video("Aula 02 de JAVA");
        $v[2] = new Video("Aula 03 de HTML");

        $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
        $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

        $vis[0] = new Visualizacao($g[0], $v[0]);
        $vis[1] = new Visualizacao($g[0], $v[1]);

        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(85);
        

        echo '<pre>';
        print_r($vis);
        echo '</pre>';

    ?>
</body>
</html>
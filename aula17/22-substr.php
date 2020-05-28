<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $site = "Curso em Vídeo";
        $sub = substr($site, 0,5);//busca um pedaço de uma String conforme a posição estabelecida. No caso começa da posição 0 até a posição 5
        echo "$sub";
    ?>
</div>
</body>
</html>
 
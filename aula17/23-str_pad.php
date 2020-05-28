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
       $nome = "Mitsuzaki";
       $novo = str_pad($nome,30,"X",STR_PAD_RIGHT);//SRT_PAD_CENTER; STR_PAD_LEFT
       print("Meu sobrenome $novo é bonito!");
    ?>
</div>
</body>
</html>
 
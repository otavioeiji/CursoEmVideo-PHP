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
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "$frase. <br/>A String foi encontrada na posição $pos.";//verificar a posição de uma string dentro de uma frase
    ?>
</div>
</body>
</html>
 
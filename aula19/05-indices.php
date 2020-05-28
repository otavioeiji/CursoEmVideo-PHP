<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<pre>
    <?php
        $v = array("3", "9", "1", "7", "13");
        print_r($v);
        asort($v);//ordena os valores dentro de um vetor de forma crescente e altera o índice
        print_r($v);
        arsort($v);//ordena os valores dentro de um vetor de forma decrescente e altera o índice
        print_r($v);
    ?>
	</pre>
</div>
</body>
</html>
 
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
        $v = array("A", "J", "M", "X", "K");
        print_r($v);
        array_unshift($v, "B");//insere um valor no primeiro vetor
        print_r($v);
        array_shift($v);//elimina o primeiro vetor
        print_r($v);
    ?>
	</pre>
</div>
</body>
</html>
 
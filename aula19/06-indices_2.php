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
        $v = array(2=>"3", 5=>"9", 0=>"1", 3=>"7", 4=>"13");
        print_r($v);
        ksort($v);//coloca em ordem crescente apenas os índices
        print_r($v);
        krsort($v);//coloca em ordem decrescente apenas os índices
        print_r($v);
    ?>
	</pre>
</div>
</body>
</html>
 
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
        function teste(&$x) { //& - passagem por referência
	        $x += 2;
	        echo "<p>O valor de x é $x.</p>";
        }
        $a = 3;
        teste($a);
        echo "<p>O valor de a é $a.</p>";
    ?>
</div>
</body>
</html>
 
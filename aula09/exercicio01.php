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
        $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
        $idade = date("Y") - $ano;
        
        if($idade >= 18) {
	        $votar = "já pode votar";
	        $dirigir = "já pode dirigir";
        }
        else {
	        $votar = "não pode votar";
	        $dirigir = "não pode dirigir";
        }
        echo "Você nasceu em $ano e tem $idade anos. Com essa idade você $votar e também $dirigir.";
    ?>
    <a href="exercicio01.html">Voltar</a>
</div>
</body>
</html>
 
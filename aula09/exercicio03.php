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
        $n1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
        $n2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
        $m = ($n1 + $n2) / 2;
        
        if($m < 5) {
	        $s = "REPROVADO";
        }
        elseif($m >= 5 && $m <7) {
	        $s = "RECUPERAÇÃO";
        }
        else {
	        $s = "APROVADO";
        }
        echo "Sua média é $m. Situação do aluno: $s";
    ?>
    <a href="exercicio03.html" class="botao">Voltar</a>
</div>
</body>
</html>
 
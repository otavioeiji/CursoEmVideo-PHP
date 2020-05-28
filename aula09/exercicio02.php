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
        
        if($idade < 16) {
	    	$tipoVoto = "não vota";
	    }
	    elseif(($idade >= 16 && $idade < 18) || $idade > 65) {
			$tipoVoto = "voto opcional";
		}
		else {
			$tipoVoto = "voto obrigatório";
		}
	    echo "Você nasceu em $ano e tem $idade anos. Para essa idade, $tipoVoto.";  
    ?>
    <a href="exercicio02.html">Voltar</a>
</div>
</body>
</html>
 
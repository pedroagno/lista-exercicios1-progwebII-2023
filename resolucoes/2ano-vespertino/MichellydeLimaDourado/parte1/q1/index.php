<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>OperadoresAritmeticos</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Desconto</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<form action="index.php" method="post">
				<label>Valor do porduto:
					<input type="number" id="preco" name="preco" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php
			
				$preco = $_POST["preco"] ?? 10;
				$desconto = $preco * (10/100);
				$valorf =  $preco - $desconto;
			
			?>
			<p>De R$<?=$preco?> com 10% de desconto, pagará R$<?=$valorf?></p>
			
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Pizzaria</h1>
	</header>
	<div class="container">
		<!-- Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes. Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach. Certifique-se de que a lista seja clara e fácil de ler, para que o cliente possa verificar suas escolhas antes de fazer o pedido. -->
		<div class="box resposta">
			<h2>Confirmando pedido</h2>
			<?php
			$mensagem = $_POST["mensagem"];
			if(isset($_POST["sabores"]) && count($_POST["sabores"]) > 0){
					$sabores = $_POST["sabores"];
					foreach($sabores as $sabor){
							echo "<p class='alerta-azul'>Sabor: {$sabor}</p>";
							echo "<br>";
						}
						echo $mensagem == null ? "<p class='alerta-rosa'>Não há observações.</p>" : "<p class='alerta-rosa'>Observação: {$mensagem}</p>";
			}else{
				echo "<p class='alerta-vermelho'>Você não selecionou nenhum sabor, refaça seu pedido.</p>";
			}
			?>
            <a href="finalizar.html" class="link b">Finalizar pedido</a>
			<a href="index.php" class="link a">Refazer pedido</a>
		</div>
	</div>
</body>
</html>
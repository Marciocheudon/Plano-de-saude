<?php
	
	$filePlanoJson = file_get_contents('planos.json');
	$planoJson = json_decode($filePlanoJson, true);

	$filePrecoJson = file_get_contents('precos.json');
	$precoJson = json_decode($filePrecoJson, true);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<title>Plano De Saúde</title>
</head>

<body>
	<form action="" method="POST">
		Informe seu Nome: <input type="text" name="nome" placeholder="Nome">
		<p>
			Informe sua Idade: <input type="text" name="idade" placeholder="Idade">
		<p>

		Informe o plano de saúde desejado: 
		<select name="planos">

			<?php

			foreach($planoJson as $plano){
				echo '<option value="1">'.$plano['nome'].'</option>';
			}

			?>

		</select><p>

			Informe a quantidade de beneficiários (Máximo por plano: 4) <input type="text" name="qtd_beneficiarios" placeholder="Beneficiários">
		<p>
			<input type="submit">Continue</a>

	</form>
	<?php
	echo '<prev>';

		$plano = isset($_POST['planos'])?$_POST['planos']:"pelomenos";

	switch ($plano){
		case "1":
			break;
		case "2":
			break;
		case "3":
			break;
		case "4":
			break;
		case "5":
			break;
		case "6":
			break;
		case "pelomenos":
			break;
		default:
			echo "Declare um plano válido!";
		}

	
	/*echo "<pre>";
	print_r($planoJson);
	echo $planoJson[3]['registro'];
	echo "</pre>";*/
	

	$beneficiarios = isset($_POST['qtd_beneficiarios'])?$_POST['qtd_beneficiarios']:"1";

	switch ($beneficiarios){
		case "1":
			break;
		case "2":
			break;
		case "4":
			break;
		default:
			echo "Número de pessoas inválido!";
		}
	

		$qtd_beneficiarios = isset($_POST['qtd_beneficiarios'])?$_POST['qtd_beneficiarios']:"1";

	switch ($qtd_beneficiarios){
		case "1":
		echo "href=beneficiario.php";
			break;
		case "2":
			break;
		case "3":
			break;
		case "4":
			break;
		default:
			echo "Declare uma quantidade de beneficiarios válida!";
		}



	?>	



	
</body>

</html>
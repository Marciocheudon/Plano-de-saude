
$planoJson = file_get_contents('planos.json');

$planosJsonDecoded = json_decode($planoJson);

foreach($planosJsonDecoded){
	print_r();
}

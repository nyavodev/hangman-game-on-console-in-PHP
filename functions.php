<?php

function manisa_andalana($faila) :int
{
	$isa_andalana = 0;
	while (!feof($faila)) {
		fgets($faila);
		$isa_andalana++;
	}
	rewind($faila);
	return $isa_andalana;
}

function mitady_andalana_kisendra(int $isa_andalana) :int
{
	$andalana_kisendra = mt_rand(1, $isa_andalana);
	return $andalana_kisendra;
}

function mitady_ny_teny_miafina($faila, int $andalana) :string
{
	for($mpanisa = 1; $mpanisa <= $andalana; $mpanisa++) {
		$teny = fgets($faila);
	}
	rewind($faila);
	return $teny;
}

function manala_midina_andalana(string $teny) :string
{
	for ($i = 0; $i < strlen($teny); $i++) {
		if ($teny[$i] === "\n") $teny = substr($teny, 0, -2);
		elseif ($teny[$i] === "\r\n") $teny = substr($teny, 0, -4);
	}
	return $teny;
}

function manakintana_teny_miafina(string $teny_miafina_fantarina) :string
{
	$teny_miafina_kintana = '';
	for ($i = 0; $i < strlen($teny_miafina_fantarina); $i++) {
		$teny_miafina_kintana .= '*';
	} 
	return $teny_miafina_kintana;
}

function mangataka_litera() :string
{
	$vaky = false;
	do {
		echo "\n";
		$litera = readline("Mampidira litera iray àry : ");
		if(strlen($litera) == 0) echo 'Litera IRAY azafady !' . "\n";
		elseif(strlen($litera) > 1) echo 'Litera iray ô (tokana), DE tsy misy tsindry !' . "\n";
		else {
			if(preg_match('#^[^a-z^A-Z]$#', $litera)) echo 'Ny tiako lazaina amy hoe \'LITERA\', de LITERA, tsisy ankoatr\'zay !' ."\n";
			else $vaky = true;
		}
	} while(!$vaky);

	if($vaky) return strtolower($litera);
}

function litera_anatin_teny_miafina(string $teny_miafina, string $litera) :bool
{
	$anatiny = false;
	for ($i = 0; $i < strlen($teny_miafina); $i++) {
		if ($teny_miafina[$i] === $litera) {
			$anatiny = true; 
			break;
		}
	}
	return $anatiny;
}

function update_teny_miafina_kintana(string $teny_miafina_fantarina, string $teny_miafina_kintana, string $litera_voaray) :string
{ 
	for ($i = 0; $i < strlen($teny_miafina_fantarina); $i++) {
		if ($teny_miafina_fantarina[$i] == $litera_voaray) $teny_miafina_kintana[$i] = $litera_voaray;
	}
	return $teny_miafina_kintana;
}



<?php 
require_once 'functions.php';


$faila = fopen('dictionary.txt', 'r');
$isa_andalana = manisa_andalana($faila);
$andalana = mitady_andalana_kisendra($isa_andalana);
$teny_miafina_fantarina = mitady_ny_teny_miafina($faila, $andalana);
$teny_miafina_fantarina = manala_midina_andalana($teny_miafina_fantarina);
$teny_miafina_kintana = manakintana_teny_miafina($teny_miafina_fantarina); 
$lalao_vita = false;
$isa_andrana_ambiny = 10; // Isañ'andrana ananana, mihena isaky ny mandiso

// Lasa àry
echo "MANOMBOKA NY LALAO !\n--------------------------------------\n";
do {
	$litera_voaray = mangataka_litera();
	echo "\n";

	if (litera_anatin_teny_miafina($teny_miafina_fantarina, $litera_voaray)) {
		$teny_miafina_kintana = update_teny_miafina_kintana($teny_miafina_fantarina, $teny_miafina_kintana, $litera_voaray);
		echo "\nMARINA, ao anatiñ'ny teny miafina mihitsy ny litera '" .strtoupper($litera_voaray). "' !\n";
		echo 'Ty lay ny teny miafina miaraka amireo litera zay efa hita : ' .strtoupper($teny_miafina_kintana). ' .' ."\n\n";
		echo 'Mbola manana andrana ' .$isa_andrana_ambiny. ' enao.' ."\n";
		echo "--------------------------------------------\n";
	}
	else {
		$isa_andrana_ambiny--;
		echo "OUPS, tsy ao anatiñ' teny miafina ny litera '" .strtoupper($litera_voaray). "' !\n";
		if ($isa_andrana_ambiny > 0) {
			echo "Ty ny ambiñ' andrana anananao : " .$isa_andrana_ambiny. ".\n";
		}
		else {
			echo "GAME OVER ! Lany ny andrana anananao ! \n";
			echo "Ty lay teny miafina tokony nofantarinao : " .strtoupper($teny_miafina_fantarina). " .\n";
			echo "-------------------------TAPITRA--------------------------";
			exit();
		}
	}

	if ($teny_miafina_fantarina === $teny_miafina_kintana) $lalao_vita = true;
	else echo "Ndao tohizana ihany àry ny lalao !\n----------------------------------------------\n";

} while ($lalao_vita === false); // azo soratana koa hoe while (!$lalao_vita);

// Matoa tonga eto, dia vita zany ny lalao ary nandresy ny mpilalao
echo "BRAVO LERETSY A ! Hitanao lay teny miafina : " .strtoupper($teny_miafina_fantarina). " .\n\n";
echo "-------------------------TAPITRA--------------------------";

// Hakatona amizay lay faila nosokafana teny amy voalohany
fclose($faila);

//	 T 		A 		P 		I 		T 		R 		A 		// 	
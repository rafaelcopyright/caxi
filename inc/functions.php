<?php

function Topo($titulo, $pegaJQ) {
	include('header.php');
}
function Heads($titulo, $pegaJQ) {
	include('head.php');
}
function Rodapes() {
	include('rodape.php');
}


//------------------------
function pega_titulo($titulo) {
	echo($titulo);
}



function pegaFonte($fonte) {

	switch ($fonte) {
				
				case 1:
					echo "Segoe, \"Segoe UI\", \"DejaVu Sans\", \"Trebuchet MS\", Verdana, \"sans-serif\"";
				break;
				
				case 2:
					echo "Arial";
				break;
				
				case 3:
					echo "cursive";
				break;

				case 4:
					echo "fantasy";
				break;

				case 5:
					echo "monospace";
				break;
				
				default:
					# code...
				break;
	}
}


?>
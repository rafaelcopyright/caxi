<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title><?php pega_titulo($titulo); ?></title>
	<link rel="icon" type="image/png" href="https://abacaxi01.000webhostapp.com/img/Pineapple_30px.png">
	
	<link rel="stylesheet" href="https://abacaxi01.000webhostapp.com/inc/css/index.css" type="text/css">
	
	<!-- VERDE - 208A14, 15710B  || ROXO - 110C3E, 0E0A33, 3727CA || AZUL - 1A0D8A -->
	
<?php 
	
	if ($pegaJQ == true) {
		echo '
		<link rel="stylesheet" href="/inc/jq/jquery-ui.css" />
		<script src="/inc/jq/jquery-1.8.2.js"></script>
		<script src="/inc/jq/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#calendario" ).datepicker({changeMonth: true, changeYear: true, showOtherMonths: true, selectOtherMonths: true});
			});
		</script>';
	}
	
?>
	
</head>
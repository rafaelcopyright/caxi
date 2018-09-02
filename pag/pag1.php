<?php

include('../inc/functions.php'); 
Topo('Perfil', false); 

$cor = 'Orange';
$fonte = 1;

?>

	<style>

		.perfilUser {
			background-color: <?php echo $cor ?>;
			font-family: <?php pegaFonte($fonte); ?>;
			padding: 50px;
		}
		.perfilBox {
			    border-radius: 5px;
			    box-shadow: 4px 4px 20px -3px #000;
		}

	</style>


	<section class="perfilUser">

		<div id="perfilBox">
			<div class="perfil" id='p1'>Foto/Nome/Frase</div>
			<div class="perfil" id='p2'>Idade/Gênero</div>
			<div class="perfil" id='p3'>Email/Trabalho/Estudo</div>
			<div class="perfil" id='p4'></div>
		</div>

	</section>

<?php Rodapes(); ?>
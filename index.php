<?php 

include('inc/functions.php'); 
Topo('Bem-Vindo!', false); 

?>


	<style>
		body{ background-color: #110C3E !important; } 
		.container { height: 100%; }
	</style>
	
	<section class="centrao">
		<div class="cxBranca centrao">
			
			<form id="frmLogin" method="post" action="index.php">

				<img src="img/Pineapple.png" width="128" style="margin-bottom: 10px">

				<input type="text" name="txtUser" id="txtUser" class="txtLogin" placeholder="Usuário"/>
				<input type="password" name="txtSenha" id="txtSenha" class="txtLogin" placeholder="Senha">
				<input type="submit" name="btnEntrar" id="btnEntrar" value="Entrar">
				<br><br>
				<a href="cadastro.php">Não sou cadastrado!</a>

			</form>

		</div>
	</section>

	
<?php Rodapes(); ?>
<?php 

include('inc/functions.php'); 
Topo('Cadastro', true); 

?>


	<style>
		body{ background-color: #110C3E !important; } 
		.container { height: 100%; }
	</style>
		
	<section class="centrao">
		<div class="cxBranca2 centrao">
			
			<form id="frmCadastro" method="post" action="cadastro.php">
				<h2>Cadastro</h2>
				
				<input type="text" name="txtNomeC" id="txtNomeC" class="txtCadastro" placeholder="Seu Nome"/>
				<input type="text" name="txtUserC" id="txtUserC" class="txtCadastro" placeholder="Seu Nome de Usuário"/>
				<input type="password" name="txtSenhaC" id="txtSenhaC" class="txtCadastro" placeholder="Sua Senha">
				<input type="text" id="calendario" class="txtCadastro" placeholder="Data de Nascimento"/>
				
				<input type="reset" name="btnLimpar" id="btnLimpar" style="width: 42.5%" value="Limpar">
				<input type="submit" name="btnEnviar" id="btnEnviar" style="width: 42.5%" value="Enviar">

			</form>

		</div>
	</section>


<?php Rodapes(); ?>
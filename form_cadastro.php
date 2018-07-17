<?php include_once("communs/header.php") ?>

	<div class="container">
		<div class="row">
			<div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 offset-md-3 col-md-6  offset-sm-3 col-sm-6 col-12 " >
					<?php
					if(isset($_SESSION['sucesso'])){ ?>
						<br><br>
								<div class="alert alert-success" role="alert">
								 	<strong><p><?= $_SESSION['sucesso'] ?></p></strong>
								</div>
						<?php }
							$_SESSION['sucesso'] = null;

							if(isset($_SESSION['excluido'])){ ?>
							<br><br>
									<div class="alert alert-warning" role="alert">
									 	<strong><p><?= $_SESSION['excluido'] ?></p></strong>
									</div>
							<?php }
								$_SESSION['excluido'] = null; 
					  	?>
				<form action="cadastrar.php" method="POST" >
					<h2>Cadastro</h2>
					<label for="cnome">Nome</label>
					<input type="text" name="nome" id="mnome" class="form-control " required><br>
					<label for="cemail">Email</label>
					<input type="email" name="email" id="memail" class="form-control" required><br>
				
					
					<label for="cimg">Imagem</label>
					<input type="url" name="imagem" id="mimg" class="form-control" required><br>
					<label for="icpf">CPF</label>
					<input type="text" name="cpf" id="mcpf" class="form-control mask_cpf" required>
					<label for="cep">CEP</label>
					<input type="text" name="cep" id="mcep" class="form-control mask_cep" required><br>
					<label for="Cel">Celular</label>
					<input type="text" name="cel" id="mphone" class="form-control mask_celular" required><br>
					<label for="cnpj">CNPJ</label>
					<input type="text" name="cnpj" id="mcnpj" class="form-control mask_cnpj" required><br>
					<button type="submit" class="btn btn-info  btn-lg btn-block">Cadastrar</button>
					<a href="index.php" class="btn btn-warning  btn-lg btn-block">Voltar</a>	


				</form>
			</div>
		</div>
	</div><br><br>	


<?php include_once("communs/footer.php") ?>
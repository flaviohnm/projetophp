<?php 
	require_once('functions.php'); 
	add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Cliente</h2>

<form action="add.php" method="post">
	<!-- area de campos do form -->
	<hr />
	<div class="row">
		<div class="form-group col-md-7">
			<label for="name">Nome</label>
			<input type="text" class="form-control" name="customer['name']">
		</div>
		
		<div class="form-group col-md-3">
			<label for="cpf_cnpj">CPF</label>
			<input type="text" minlength="11" maxlength="11" class="form-control" name="customer['cpf_cnpj']">
		</div>
		
		<div class="form-group col-md-2">
			<label for="birthdate">Data de Nascimento</label>
			<input id="birthdate" type="date" id="birthdate" class="form-control" minlength="8" maxlength="8" name="customer['birthdate']">
		</div>
	</div>
	
	<div class="row">
		<div class="form-group col-md-5">
			<label for="address">Endereço</label>
			<input type="text" class="form-control" name="customer['address']">
		</div>
		
		<div class="form-group col-md-3">
			<label for="hood">Bairro</label>
			<input type="text" class="form-control" name="customer['hood']">
			</div>
		
		<div class="form-group col-md-2">
			<label for="zip_code">CEP</label>
			<input type="text" class="form-control" minlength="8" maxlength="8" name="customer['zip_code']">
		</div>
		
		<div class="form-group col-md-2">
			<label for="created">Data de Cadastro</label>
			<input type="text" class="form-control" name="customer['created']" disabled>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group col-md-3">
			<label for="city">Município</label>
			<input type="text" class="form-control" name="customer['city']">
		</div>
		
		<div class="form-group col-md-2">
			<label for="phone">Telefone</label>
			<input type="text" class="form-control" minlength="10" maxlength="10" placeholder="(00) 0000-0000" name="customer['phone']">
		</div>
		
		<div class="form-group col-md-2">
			<label for="mobile">Celular</label>
			<input type="text" class="form-control cel-sp-mask" minlength="11" maxlength="11" placeholder="(00) 00000-0000" name="customer['mobile']">
		</div>
		
		<div class="form-group col-md-1">
			<label for="state">UF</label>
			<input type="text" class="form-control" minlength="2" maxlength="2" name="customer['state']">
		</div>
		
		<div class="form-group col-md-4">
			<label for="ie">Inscrição Estadual</label>
			<input type="text" class="form-control" name="customer['ie']">
		</div>
	</div>
	
	<div id="actions" class="row">
		<div class="col-md-12">
			<button type="submit" class="btn btn-outline-dark"> <i class="bi bi-cloud-arrow-up-fill"></i> Salvar</button>
			<a href="index.php" class="btn btn-outline-dark"> <i class="bi bi-x-circle-fill"></i> Cancelar</a>
		</div>
	</div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
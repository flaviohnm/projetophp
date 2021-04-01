<?php 
	require_once('functions.php'); 
	edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
	<hr />
	<div class="row">
		<div class="form-group col-md-7">
			<label for="name">Nome / Razão Social</label>
			<input type="text" class="form-control" name="customer['name']" value="<?php echo $customer['name']; ?>">
		</div>
		
		<div class="form-group col-md-3">
			<label for="cpf_cnpj">CNPJ / CPF</label>
			<input type="text" class="form-control" name="customer['cpf_cnpj']" minlength="11" maxlength="11" value="<?php echo $customer['cpf_cnpj']; ?>">
		</div>
		
		<div class="form-group col-md-2">
			<label for="birthdate">Data de Nascimento</label>
			<input type="date" id="birthdate" class="form-control" name="customer['birthdate']" value="<?php echo $customer['birthdate']; ?>">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-5">
			<label for="address">Endereço</label>
			<input type="text" class="form-control" name="customer['address']" value="<?php echo $customer['address']; ?>">
		</div>
		
		<div class="form-group col-md-3">
			<label for="hood">Bairro</label>
			<input type="text" class="form-control" name="customer['hood']" value="<?php echo $customer['hood']; ?>">
		</div>
		
		<div class="form-group col-md-2">
			<label for="zip_code">CEP</label>
			<input type="text" class="form-control" minlength="8" maxlength="8" name="customer['zip_code']" value="<?php echo $customer['zip_code']; ?>">
		</div>
		
		<div class="form-group col-md-2">
			<label for="created">Data de Cadastro</label>
			<input type="text" class="form-control" name="customer['created']" disabled value="<?php echo $customer['created']; ?>">
		</div>
		
	</div>
	<div class="row">
		<div class="form-group col-md-3">
			<label for="city">Município</label>
			<input type="text" class="form-control" name="customer['city']" value="<?php echo $customer['city']; ?>">
		</div>
		
		<div class="form-group col-md-2">
			<label for="phone">Telefone</label>
			<input type="text" class="form-control" minlength="10" maxlength="10" name="customer['phone']" value="<?php echo $customer['phone']; ?>">
		</div>
		
		<div class="form-group col-md-2">
			<label for="mobile">Celular</label>
			<input type="text" class="form-control" minlength="11" maxlength="11" name="customer['mobile']" value="<?php echo $customer['mobile']; ?>">
		</div>
		
		<div class="form-group col-md-1">
			<label for="state">UF</label>
			<input type="text" class="form-control" name="customer['state']" value="<?php echo $customer['state']; ?>">
		</div>
		
		<div class="form-group col-md-4">
			<label for="ie">Inscrição Estadual</label>
			<input type="text" class="form-control" name="customer['ie']" value="<?php echo $customer['ie']; ?>">
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
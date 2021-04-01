<?php
	require_once('functions.php');	
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>CLIENTE Nº <?php echo $customer['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $customer['name']; ?></dd>
	
	<dt>CPF:</dt>
	<dd><?php echo $customer['cpf_cnpj']; ?></dd>
	
	<dt>Data de Nascimento:</dt>
	<dd><?php echo date('d/m/Y', strtotime($customer['birthdate'])); ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Endereço:</dt>
	<dd><?php echo $customer['address']; ?></dd>
	
	<dt>Bairro:</dt>
	<dd><?php echo $customer['hood']; ?></dd>
	
	<dt>CEP:</dt>
	<dd><?php echo $customer['zip_code']; ?></dd>
	
	<dt>Data de Cadastro:</dt>
	<dd><?php echo date('d/m/Y', strtotime($customer['created'])); ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Cidade:</dt>
	<dd><?php echo $customer['city']; ?></dd>
	
	<dt>Telefone:</dt>
	<dd><?php echo $customer['phone']; ?></dd>
	
	<dt>Celular:</dt>
	<dd><?php echo $customer['mobile']; ?></dd>
	
	<dt>UF:</dt>
	<dd><?php echo $customer['state']; ?></dd>
	
	<dt>Inscrição Estadual:</dt>
	<dd><?php echo $customer['ie']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
		<a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-outline-dark"><i class="bi bi-pencil-fill"></i> Atualizar</a>
		<a href="index.php" class="btn btn-outline-dark"> <i class="bi bi-arrow-left-circle-fill"></i> Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
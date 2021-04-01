<?php
    require_once('functions.php');
    index();
?>

<?php include('modal.php'); ?>
<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6 ">
			<h2>Lista dos Clientes</h2>
		</div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
<?php clear_messages(); ?>
<?php endif; ?>


<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th width="30%">Nome</th>
			<th>CPF/CNPJ</th>
			<th>Telefone</th>
			<th>Atualizado em</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($customers) : ?>
		<?php foreach ($customers as $customer) : ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['name']; ?></td>
			<td><?php echo $customer['cpf_cnpj']; ?></td>
			<td><?php echo $customer['phone']; ?></td>
			<td><?php echo date('d/m/Y', strtotime($customer['modified'])); ?></td>
			<td class="actions text-right">
				<a href="view.php?id=<?php echo $customer['id']; ?>" class="btn btn-outline-dark"><i class="bi bi-eye-fill"></i> Visualizar</a>
				<a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-outline-dark"><i class="bi bi-pencil-fill"></i> Atualizar</a>
				<a href="#" class="btn btn-outline-dark" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>"><i class="bi bi-trash-fill"></i> Excluir</a>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php else : ?>
		<tr>
			<td colspan="6">No momento não há nenhum cliente. Cadastre agora!</td>
		</tr>
		<?php endif; ?>
	</tbody>
</table>

<?php include(FOOTER_TEMPLATE); ?>
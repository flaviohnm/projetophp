<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h2>Painel do Cliente</h2>
<hr />

<?php if ($db) : ?>

<div class="row">
	
	<div class="col-xs-6 col-sm-3 col-md-2">
	
		<a href="customers/add.php" class="btn btn-outline-dark">
			<div class="row">
			
				<div class="col-xs-12 text-center">
					<div style="font-size: 50px;">
						<i class="bi bi-person-plus-fill fa-10x"></i>
					</div>
				</div>
				
				<div class="col-xs-12 text-center">
					<p>Novo Cliente</p>
				</div>
				
			</div>
		</a>
		
	</div>
	
	<div class="col-xs-6 col-sm-3 col-md-2">
		
		<a href="customers" class="btn btn-outline-dark">
			
			<div class="row">
				
				<div class="col-xs-12 text-center">
					<div style="font-size: 50px;">
						<i class="bi bi-person-circle"></i>
					</div>
				</div>
				
				<div class="col-xs-12 text-center">
					<p>Clientes</p>
				</div>
				
			</div>
		</a>
		
	</div>
	
</div>

<?php else : ?>
<div class="alert alert-danger" role="alert">
	<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>
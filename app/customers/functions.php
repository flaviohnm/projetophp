<?php
	
	require_once('../config.php');
	require_once(DBAPI);
	
	/** Variável Glocal */
	$customers = null;
	$customer = null;
?>

<?php	
	/**
		*  Listagem de Clientes
	*/
	function index() {
		global $customers;
		$customers = find_all('customers');
	}
?>

<?php
	/**
		*  Cadastro de Clientes
	*/
	function add() {
		
		if (!empty($_POST['customer'])) {
			
			$today = 
			date_create('now', new DateTimeZone('America/Sao_Paulo'));
			
			$customer = $_POST['customer'];
			$customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
		
		save('customers', $customer);
		echo "cheguei ate o metodo save";
		header('location: index.php');
		}
	}
?>

<?php
	
	/**
		*  Visualização de um Cliente
	*/
	function view($id) {
		global $customer;
		$customer = find('customers', $id);
	}
?>

<?php
	
	/**
		*	Atualizacao/Edicao de Cliente
	*/
	function edit() {
		
		$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		
		if (isset($_GET['id'])) {
			
			$id = $_GET['id'];
			
			if (isset($_POST['customer'])) {
				
				$customer = $_POST['customer'];
				$customer['modified'] = $now->format("Y-m-d H:i:s");
				
				update('customers', $id, $customer);
				header('location: index.php');
				} else {
				
				global $customer;
				$customer = find('customers', $id);
			} 
			} else {
			header('location: index.php');
		}
	}
?>

<?php
	/**
		*  Exclusão de um Cliente
	*/
	function delete($id) {
		
		global $customer;
		$customer = remove('customers', $id);
		
		header('location: index.php');
	}
?>	
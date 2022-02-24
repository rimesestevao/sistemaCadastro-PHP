<?php
include 'conexao.php';

// Recebe a matricula da pessoa do cliente via GET
$id_pessoa = (isset($_GET['matricula'])) ? $_GET['matricula'] : '';

// Valida se existe um id e se ele é numérico
if (!empty($id_pessoa) && is_numeric($id_pessoa)):

	// Captura os dados da pessoa solicitada
	$conexao = $conexao::getInstance();
	$sql = 'SELECT matricula, nome, idade, cpf, rg, sexo, cidade, endereco, email, celular, tab_clientes WHERE id = :matricula';
	$stm = $conexao->prepare($sql);
	$stm->bindValue(':id', $id_pessoa);
	$stm->execute();
	$cliente = $stm->fetch(PDO::FETCH_OBJ);

endif;
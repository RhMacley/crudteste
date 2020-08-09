<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['nome']);
	$sobrenome = clear($_POST['sobrenome']);
	$email = clear($_POST['email']);
	$dataNascimento = clear($_POST['dataNascimento']);
	$senha = clear($_POST['senha']);
	$cidade = clear($_POST['cidade']);
	$uf = clear($_POST['uf']);
	$observacao = clear($_POST['observacao']);
	$ativo = clear($_POST['ativo']);

	$sql = "INSERT INTO clientes (nome, sobrenome, email, dataNascimento, senha, cidade, uf, observacao, ativo) VALUES ('$nome', '$sobrenome', '$email', '$dataNascimento', '$senha', '$cidade', '$uf', '$observacao', '$ativo')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;
<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$dataNascimento = mysqli_escape_string($connect, $_POST['dataNascimento']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
	$cidade = mysqli_escape_string($connect, $_POST['cidade']);
	$uf = mysqli_escape_string($connect, $_POST['uf']);
	$observacao = mysqli_escape_string($connect, $_POST['observacao']);
	$ativo = mysqli_escape_string($connect, $_POST['ativo']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', dataNascimento = '$dataNascimento', senha = '$senha', cidade = '$cidade', uf = '$uf', observacao = '$observacao', ativo = '$ativo' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;
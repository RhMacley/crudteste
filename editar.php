<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM clientes WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Cliente </h3>
		<form action="php_action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="sobrenome" value="<?php echo $dados['sobrenome'];?>" id="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['email'];?>" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['dataNascimento'];?>" name="dataNascimento" id="dataNascimento">
				<label for="dataNascimento">dataNascimento</label>
			</div>

			<div class="input-field col s12">
				<input type="password" value="<?php echo $dados['senha'];?>" name="senha" id="senha">
				<label for="senha">Senha</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['cidade'];?>" name="cidade" id="cidade">
				<label for="cidade">Cidade</label>
			</div>

			<div class="input-field col s12">
				<select value="<?php echo $dados['uf'];?>" name="uf" id="uf">
					<option value="" disabled selected>UF</option>
					<option value="1">SP</option>
					<option value="2">RJ</option>
					<option value="3">PR</option>
					<option value="3">MG</option>
					<option value="3">PA</option>
					<option value="3">PB</option>
				</select>
				<label for="uf">Selecione sua UF</label>
			</div>

			<div class="row">
					<div class="row">
						<div class="input-field col s12">
							<textarea value="<?php echo $dados['observacao'];?>" id="observacao" class="materialize-textarea" name="observacao"></textarea>
							<label for="observacao">Observações</label>
						</div>
					</div>
			</div>

			<label>
				<input value="<?php echo $dados['ativo'];?>" id="ativo" type="checkbox" name="ativo"/>
				<span>Concordo que meus dados estarão ativos na base do sistema</span>
			</label>
			<br>
			<button style="margin-top: 20px;" type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a style="margin-top: 20px;" href="index.php" class="btn green"> Lista de usuários </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>

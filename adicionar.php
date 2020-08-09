<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Cliente </h3>
		<form action="php_action/create.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="sobrenome" id="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field col s12">
				<input type="date" name="dataNascimento" id="dataNascimento">
				<label for="dataNascimento">Data de Nascimento</label>
			</div>

			<div class="input-field col s12">
				<input type="password" name="senha" id="senha">
				<label for="senha">Senha</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="cidade" id="cidade">
				<label for="cidade">Cidade</label>
			</div>

			<div class="input-field col s12">
				<select name="uf" id="uf">
					<option value="" disabled selected>UF</option>
					<option value="AC">Acre</option>
					<option value="AL">Alagoas</option>
					<option value="AP">Amapá</option>
					<option value="AM">Amazonas</option>
					<option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
					<option value="DF">Distrito Federal</option>
					<option value="ES">Espírito Santo</option>
					<option value="GO">Goiás</option>
					<option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
					<option value="MS">Mato Grosso do Sul</option>
					<option value="MG">Minas Gerais</option>
					<option value="PA">Pará</option>
					<option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
					<option value="PE">Pernambuco</option>
					<option value="PI">Piauí</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="RN">Rio Grande do Norte</option>
					<option value="RS">Rio Grande do Sul</option>
					<option value="RO">Rondônia</option>
					<option value="RR">Roraima</option>
					<option value="SC">Santa Catarina</option>
					<option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
					<option value="EX">Estrangeiro</option>
				</select>
				<label for="uf" id="uf">Selecione sua UF</label>
			</div>

			<div class="row">
				<div class="input-field col s12">
					<textarea id="observacao" class="materialize-textarea" name="observacao"></textarea>
					<label for="observacao">Observações</label>
				</div>
			</div>

			<label>
				<input id="ativo" type="checkbox" name="ativo" />
				<span>Concordo que meus dados estarão ativos na base do sistema</span>
			</label>
			<br>
			<button style="margin-top: 20px;" type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a style="margin-top: 20px;" href="index.php" class="btn green"> Lista de usuários </a>
		</form>



	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
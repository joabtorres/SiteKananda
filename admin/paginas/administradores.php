 <?php

$tabela_local = "administrador";
$mensagem_sucesso =  false;
$mensagem_erro =  false;

	//Verifica se existe uma ação
		if(isset($pagina_admin[1])):
			
			//verifica qual é a ação a ser tomada
			if($pagina_admin[1] == "novo"):

				$tabela = new Objeto($tabela_local);
				
				if(isset($_POST['acao'])){
					if($_POST['acao'] == "salvar"){

						$tabela->addConsulta('email',$_POST['email']);
						$tabela->selecionarTudo();
						
						if($tabela->getLinhasAfetadas() == 0){

							$tabela->limparDados();
							$senha = md5(sha1($_POST['senha']));

							$tabela->setValor('nome',$_POST['nome']);
							$tabela->setValor('email',$_POST['email']);
							$tabela->setValor('senha',$senha);

							if($tabela->inserir() != false){
								$mensagem_sucesso = true;
								$mensagem_erro = false;
							}else{
								$mensagem_erro = true;
								$mensagem_sucesso = false;
							}
						}else{
							$mensagem_erro = true;
							$mensagem_sucesso = false;
						}
					}

					if($mensagem_sucesso){
						header("location: ".RAIZ.'admin/'.$pagina_admin[0].'/sucess');
					}
				}
?>
	<form enctype="multipart/form-data" id="novo-administrador" action="<?= RAIZ.'admin/'.implode('/',$pagina_admin); ?>" method="post" autocomplete="off">
		<input type="hidden" name="acao" value="salvar" />
		<ul>

			<?php
				if($mensagem_erro){ ?>
					<li><div class='mensagem_erro'>Ocorreu um erro!</div></li>
				<?php }
			?>

			<li>
				<label>Nome: </label><br><input obg="Nome" name="nome" type="text" title="Insira o nome completo" />
				<div class="clear"></div>
			</li>
			<li>
				<label>E-mail: </label><br><input class="email" obg="E-mail" name="email" type="text" />
				<div class="clear"></div>
			</li>
			<li>
				<label>Senha: </label><br><input class="senha" obg="Senha" name="senha" type="password" />
				<div class="clear"></div>
			</li>
			<li>
				<label>Confirmar senha: </label><br><input class="senha" obg="Confirmar senha" name="c-senha" type="password" />
				<div class="clear"></div>
			</li>

			<li>
				<input type="submit" class="btn btn-success"  value="Salvar" />
				<button class="btn btn-danger" onclick="location='<?= RAIZ.'admin/'.$pagina_admin[0] ?>'; return false;">Cancelar</button>
			</li>

		</ul>
	</form>
<?php
			elseif($pagina_admin[1] == "editar" and is_numeric($pagina_admin[2])):
				
				$tabela = new Objeto($tabela_local);
				$tabela->addConsulta('id',$pagina_admin[2]);

				if(isset($_POST['acao'])){
					if($_POST['acao'] == "salvar"){

						$senha = md5(sha1($_POST['senha']));

						$tabela->setValor('nome',$_POST['nome']);
						$tabela->setValor('email',$_POST['email']);
						$tabela->setValor('senha',$senha);

						if($tabela->atualizar() != false){
							$mensagem_sucesso = true;
							$mensagem_erro = false;
						}else{
							$mensagem_erro = true;
							$mensagem_sucesso = false;
						}
					}

					if($mensagem_sucesso){
						header("location: ".RAIZ.'admin/'.$pagina_admin[0].'/sucess');
					}
				}

				$tabela->selecionarTudo();
				$administrador = $tabela->retornar();
			
?>
	<form enctype="multipart/form-data" id="alterar-administrador" action="<?= RAIZ.'admin/'.implode('/',$pagina_admin); ?>" method="post" autocomplete="off">
	<input type="hidden" name="acao" value="salvar" />

		<ul>
			<?php
				if($mensagem_erro){ ?>
					<li><div class='mensagem_erro'>Ocorreu um erro!</div></li>
				<?php }
			?>

			<li>
				<label >Nome: </label><br><input obg="Nome" name="nome" type="text" value="<?= $administrador['nome'] ?>" />
				<div class="clear"></div>
			</li>
			<li>
				<label>E-mail: </label><br><input class="email" obg="E-mail" name="email" value="<?= $administrador['email'] ?>" type="text" />
				<div class="clear"></div>
			</li>
			<li>
				<label>Senha: </label><br><input class="senha" obg="Senha" name="senha" type="password" />
				<div class="clear"></div>
			</li>
			<li>
				<label>Confirmar senha: </label><br><input class="senha" obg="Confirmação de Senha" name="c-senha" type="password" />
				<div class="clear"></div>
			</li>

			<li>
				<input type="submit" class="btn btn-success"  value="Salvar" />
				<button class="btn btn-danger" onclick="location='<?= RAIZ.'admin/'.$pagina_admin[0] ?>'; return false;">Cancelar</button>
			</li>
			
			
		</ul>
	</form>
<?php

			elseif($pagina_admin[1] == "excluir" and is_numeric($pagina_admin[2])):

				$tabela = new Objeto($tabela_local);
				$tabela->addConsulta('id',$pagina_admin[2]);

				if($tabela->deletar() != false){
					$mensagem_sucesso = true;
					$mensagem_erro = false;
				}else{
					$mensagem_erro = true;
					$mensagem_sucesso = false;
				}

				if($mensagem_sucesso)
					header("location: ".RAIZ.'admin/'.$pagina_admin[0].'/sucess');
				else
					header("location: ".RAIZ.'admin/'.$pagina_admin[0].'/error');



			elseif($pagina_admin[1] == "page" and is_numeric($pagina_admin[2])):

				$grid = new Grid($tabela_local);
				$grid->addPaginaAtual($pagina_admin[2]);
				$grid->addColuna('Cod', 'id');
				$grid->addColuna('Nome', 'nome');
				$grid->addColuna('E-mail', 'email');
				$grid->addColuna('Data do Cadastro', 'data_cadastro');
				$grid->addItemPesquisa('Nome', 'nome');
				$grid->addItemPesquisa('E-mail', 'email');
				$grid->gerarGrid();

			else:
				
				if($pagina_admin[1] == 'error'):
					echo "<div class='mensagem_erro'>Ocorreu um erro!</div>";
					goto lista;

				elseif ($pagina_admin[1] == 'sucess'):
					echo "<div class='mensagem_sucesso'>Operação realizada com sucesso!</div>";
					goto lista;

				elseif ($pagina_admin[1] == 'search'):

					if(isset($_POST['item_pesquisa']) AND isset($_POST['pesquisa'])):

						$grid = new Grid($tabela_local);
						$grid->addColuna('Cod', 'id');
						$grid->addConsulta($_POST['item_pesquisa'], $_POST['pesquisa']);
						$grid->addPaginaAtual($_POST['pagina_pesquisa']);
						$grid->addColuna('Nome', 'nome');
						$grid->addColuna('E-mail', 'email');
						$grid->addItemPesquisa('Nome', 'nome');
						$grid->addItemPesquisa('E-mail', 'email');
						$grid->addItemPesquisa('Data do Cadastro', 'data_cadastro');
						$grid->gerarGrid();

					else:

						goto lista;

					endif;

				endif;

			endif; //Fim; verifica qual é a ação a ser tomada

	else:

		lista:

		if($mensagem_erro){ 
			echo "<li><div class='mensagem_erro'>Ocorreu um erro!</div></li>";
		}elseif ($mensagem_sucesso) {
			echo "<li><div class='mensagem_sucesso'>Operação realizada com sucesso!</div></li>";
		}

		$grid = new Grid($tabela_local);
		$grid->addColuna('Cod', 'id');
		$grid->addColuna('Nome', 'nome');
		$grid->addColuna('E-mail', 'email');
		$grid->addColuna('Data do Cadastro', 'data_cadastro');
		$grid->addItemPesquisa('Nome', 'nome');
		$grid->addItemPesquisa('E-mail', 'email');
		$grid->gerarGrid();

	endif;//Fim; Verifica se existe uma ação
?>
<?php
	
	if(isset($_POST) && count($_POST)>0){

		$contato = new Objeto('contato');
		$contato->setValor('nome', $_POST['tNome']);
		$contato->setValor('telefone', $_POST['tTelefone']);
		$contato->setValor('email', $_POST['tEmail']);
		$contato->setValor('mensagem', $_POST['tMensagem']);

		if($contato->inserir()){

			$config = new Objeto('empresa');
  			$config->selecionarTudo();
  			$config = $config->retornar();
			
			// envia email ao usuário
			$assunto = 'Contato Kananda Imobiliária';
			$destinatario = $_POST['tEmail'];
			$mensagem = "Em breve entraremos em contato com você!";

			$envio = Funcao::enviaEmail($destinatario , $assunto, $mensagem);

			// envia email a kananda
			$assunto = 'Contato Kananda Imobiliária';
			$destinatario = $config['email'];
			$mensagem = "Um usuário enviou uma mensagem!";

			$envio = Funcao::enviaEmail($destinatario , $assunto, $mensagem);

			echo "<script>alert('Sua mensagem foi recebida, em breve entraremos em contato com você.')</script>";

		}else{
			echo "<script>alet('Ocorreu um erro no envio da sua mensagem.')</script>";
		}

		echo "<script>window.location.href = '".RAIZ."';</script>";

	}else{
	
		header("location: ".RAIZ);

	}


?>
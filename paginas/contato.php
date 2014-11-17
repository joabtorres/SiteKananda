<?php
	
	if(isset($_POST) && count($_POST)>0){

		$contato = new Objeto('contato');
		$contato->setValor('nome', $_POST['tNome']);
		$contato->setValor('telefone', $_POST['tTelefone']);
		$contato->setValor('email', $_POST['tEmail']);
		$contato->setValor('mensagem', $_POST['tMensagem']);

		if($contato->inserir())
			echo "<script>alert('Sua mensagem foi recebida, em breve entraremos em contato com você.')</script>";
		else
			echo "<script>alet('Ocorreu um erro no envio da sua mensagem.')</script>";

		echo "<script>window.location.href = '".RAIZ."';</script>";

	}else{
	
		header("location: ".RAIZ);

	}


?>
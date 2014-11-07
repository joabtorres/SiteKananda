<?php
	
	$usuario = new Objeto('usuarios');

	$msg = "";	
	
	if(isset($_POST['email']) && isset($_POST['senha'])){
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);

		if(empty($email) || empty($senha)){
			$msg= "Preencha todos dos campos!";
		}else{
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo $msg = "informe um email válido!";
			}else{
				$login = Validacao::login('administrador',$email, $senha);

				if($login){
					header("location: ".RAIZ.'admin/');
				}else
					$msg = "Email ou senha incorreta!";
			}
		}
	}
	



	if($msg == '')
		$display = 'display:none';
	else
		$display = 'display:block';

?>

<html>
<head>
	<meta http-equiv='Content-Type' content='charset=utf-8'/>
	<title>Kananda - Login</title>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div id='login' class='bradius'>

		<div id='message_login' class='bradius' style='<?=$display ?>'><?=$msg?></div><!-- .message -->

		<div id='logo_login'><a href="<?=RAIZSIMPLES ?>"></a><img src="imagens/logo.png" id='logo_login_img' width='250' height='65'></div><!-- .logo -->

		<div id='form_login'>
			<form action='#' method='POST'>
				<label for='email'>E-mail:</label><input id='email' class='campo_txt bradius' type='text' name='email' value=''/>
				<label for='senha'>Senha:</label><input id='senha' class='campo_txt bradius' type='password' name='senha' value=''/>
				<input type='submit' id='btn_login' class='bradius' value='Entrar'>
			</form>
		</div><!-- .acomodar -->

	</div><!-- #login -->

</body>
</html>
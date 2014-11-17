<?php
	
	if(isset($_POST) && count($_POST)>0){

		echo count($_POST);

	}else{
	
		header("location: ".RAIZ);

	}


?>
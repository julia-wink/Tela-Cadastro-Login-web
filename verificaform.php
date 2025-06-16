<?php

				if(!isset($_POST['username'])){
					die("O campo de usuário não foi transmitido");
				}
				$username=$_POST['username']; 
				//aqui guarda o que foi recebido 
				if (strlen($username)<5) {
					die ("O usuário necessita de pelo menos 5 digitos. Retorne!");
				} 


				//campo password
				if(!isset($_POST['password'])){
					die("Senha não foi transmitida!");
				}else{
					$senha=$_POST['password'];//guarda senha	
					if (strlen($senha)<5) {
						die("Senha necessita de pelo menos 5 digitos.Retorne!");
					}
				}

?>

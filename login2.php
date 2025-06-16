<?php 
		require("crip2gr4.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel = "stylesheet" href ="estilo_css_tela.css?ks">
		<title>Login verifica</title>
		
	</head>

	<body>
		<nav>
			
		<div class="container">
			<?php

				
				
				require 'verificaform.php'; 
				require 'conectaBd.php';
		
				$sql="SELECT senha from tabela1 where username=? "; //nao indica o texto $username; e sim apenas um parametro, representado por (?) 
				$stmt = mysqli_prepare($conn,$sql); //conexao aberta via require, que utiliza o prepare (SQL preparado)
					if (!$stmt){
						die("Impossivel preparar a consulta ");
					}
					$bind = mysqli_stmt_bind_param($stmt,"s",$username); //vinculo de parametro de entrada
					if (!$bind){
						die("Impossivel vincular dados à consulta");
					}

					$exec = mysqli_stmt_execute($stmt); // execucao do comando preparado
					if (!$exec){
						die("Impossivel executar consulta");
					}
					
					$result = mysqli_stmt_bind_result($stmt, $senhabd); //obter resultados da execucao do comando ($exec = mysqli_stmt_execute($stmt);)
					
					if (!$result){
						die("Não foi possivel recuperar dados da consulta");
					}
					$fetch = mysqli_stmt_fetch($stmt);//meio q move o cursor pra recuperar os dados
					if (!$fetch){
						die("Não conseguiu associar dados de retorno");
					}
					if ($fetch == null){
						die("Essa combinação login/senha não foi encontrada.");
					}
					//lembre-se: O fethc já já copiou os resultados indicados pelo bind_result
					mysqli_stmt_close($stmt);

					//pega $senha e compara com $senhaBD (ambas criptografadas); com criptografia no BD
				
					if(ChecaSenha($senha, $senhabd)) {
						echo("Login realizado! Bem-vindo $username : <br><br>");
					//	if (!session_start()){ /*O not "!" inverte a lógica, portanto se for não verdadeiro irá executar o bloco*/
					//		die("Impossivel prosseguir!! Sessão não foi iniciada");
					//	}

					}else{
						echo("Senha ou login errados <br>");
						die("Retorne para <a href='telalogin.php' class='link'>login</a> e tente novamente!");
					}

				//////observação: sistema de sessão não utilizado nesse projeto mas deixado aqui de exemplo:///
			    //session_start();
			    //  if (!session_start()){
                //   die("Impossivel prosseguir!! <br> Retorne para <a href='telalogin.php'>Login</a> e tente novamente");
                //}
				//session_start();
				//echo "ID da Sessão: " . session_id();
				//$_SESSION [$username]=session_id(); //SESSION é um array superglobal do php que permite manter informação do usuario enquanto ele navega 
				

					
				?>


		</div>
	</body>
</html>

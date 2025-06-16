<?php 
	require 'crip2gr4.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro</title>
		 <link rel = "stylesheet" href ="estilo_css_tela.css?ks">
	</head>
	<body>
		<div class = "container">
		<?php 
		       require 'verificaform.php'; 
			   require 'conectaBd.php';

			   $email=$_POST['email'];
			   //ganha a variavel $conn
				if (require 'conectaBd.php') {
				//echo "<br><br>Conseguiu conectar!<br>";
				}
				else{
					die("falha de conexão! <br> <a  href='telacad.php'>Retorne</a>");
				}
                $sql ="INSERT INTO tabela1";
				$sql.="(username,email,senha) ";
				$sql.="VALUES "; //todos os valores sao texto
				$sql.="(?,?,? ) "; //substituicao dos textos por parametros ?
				 //placeholders (?)  passa os valores como parâmetros separados, garante q os valores sejam tratados como dados, e não como código SQL

				$stmt = mysqli_prepare($conn,$sql);

				if (!$stmt){
					die("Impossivel realizar o cadastro <br> <a  href='telacad.php'>Retorne</a> ");
				} 
				
            	//antes de bindar parametros no BD temos que preparar a senha
				$senha = FazSenha($username,$senha);//troca a digitada sem criptografia, pela criptografada,vem do arquivo de criptografia
			
				$bind = mysqli_stmt_bind_param($stmt, "sss", $username, $email, $senha); // é uma funçaõ do php que associa os ??? do stmt as variasveis de usuario, email e senha, sss indica que sao strings
	
				if (!$bind){
					die("Impossivel vincular dados ao cadastro. <br> <a  href='telacad.php'>Retorne</a>");
				}
				$exec = mysqli_stmt_execute($stmt);
				if(!$exec){
					die("Cadastro não realizado!! <br> Retorne e tente novamente: <a  href='telacad.php'>Cadastro</a>");
				}else{
					echo("Cadastro realizado!<br> <a href='telalogin.php'>Vá para a conta de login</a> ");
				}
				mysqli_stmt_close($stmt);

				//////observação: sistema de sessão não utilizado nesse projeto mas deixado aqui de exemplo:///
			    //session_start();
			    //  if (!session_start()){
                //   die("Impossivel prosseguir!! <br> Retorne para <a href='telalogin.php'>Login</a> e tente novamente");
                //}
				//session_start();
				//echo "ID da Sessão: " . session_id();
				//$_SESSION [$username]=session_id(); //SESSION é um array superglobal do php que permite manter informação do usuario enquanto ele navega 
				//require 'sess_start.php'; //testa se sessão comecou adequamente
				?>

				
			</div>
		
	</body>

</html>

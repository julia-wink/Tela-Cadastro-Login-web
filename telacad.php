<!DOCTYPE html>
<html>
	<head>
    <?php
      require 'validalog.js';
    ?>
		<title>Cadastro</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel = "stylesheet" href ="estilo_css_tela.css?ks">

	</head>
	
		<body onload="document.form1.username.focus()">
			<!-- Esse body onload serve para já carregar no campo username -->


			<div class="container">

        
			<form name="form1" class ="form" method="POST" onsubmit="return valida()" action="cadastro2.php" > 
				<!-- Existem dois metodos de envio de formulario, o POST e o GET, o GET mostra as informações na url e é usado em pesquisas, filtros de sites de compra, ele armazena cache no navegador -->
               <h1 style= "font-size: 1.5rem; color: #333; font-weight: 500; text-align: center;" >Cadastro</h1>
              <!--'' Nome de Usuário -->
              <div class = "campo">
              <label for="username">Nome de Usuário:</label>
              <input type="text" name="username" id="username"  placeholder="Digite seu nome" autocomplete="off"> 
              </div>

             <!-- Email -->
             <div class = "campo">
             <label for="email">Email:</label>
             <input type="email" name="email" id="email"  placeholder="Email" autocomplete="off">
             </div>

             <!-- Senha -->
             <div class = "campo">
             <label for="password">Senha:</label>
             <input type="password" name="password" id="password" placeholder="Senha">
           </div>

            <button>
            Cadastrar
            </button>
            <a href="telalogin.php">Já tem conta? Entrar</a> 
            <p id ="msg"></p>
           </form>	
           
          </div>
		</body>

</html>

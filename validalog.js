        <script>

            function valida(){
                   var erro = document.getElementById("msg");
                    msg = "";
                    if(document.form1.username.value == ""){
                        msg+="Preencha o campo de usuário!\n";
                    }
                    if(document.form1.password.value == ""){
                        msg+="<br>Preencha o campo de senha!\n";
                    }
                    if (document.form1.email){
                        if (document.form1.email.value == ""){
                            msg+="<br>Preencha o campo de email!\n";
                        }
                    }
                    
                    
                   if (msg !== "") {
                    erro.innerHTML = msg; // Joga o texto no <p>
                    erro.style.visibility = "visible"; // Torna visível
                    return false;
                 } 
                 else {
                   erro.style.visibility = "hidden"; // Oculta se não tiver erro
                return true;
                 }
                    
            }
        </script>

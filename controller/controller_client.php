<?php

session_start();

if(isset($_REQUEST["loginn"])){ //verifica se vem algo do formulário pelo POST ou GET, se vier:

    if(empty($_REQUEST["login"]) || empty($_REQUEST["senha"])){ // se não vier senha e/ou login do formulário então:
      session_destroy();
?>
      <form action="../view/login.php" name="form" id="myForm" method="POST">
      <input type="hidden" name="msg" value="FR01"><!--"FR01" => "Dado(s) não preenchido(s).",-->
      </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php) para o index--> 
      <script>
      document.getElementById('myForm').submit();//envio automático submit()
      </script>  
<?php

    }else{ //tem dados digitados
  //verificação de anti-injection.
                          require_once"../model/ferramentas.php";
                          $respLOGIN = antiInjection($_REQUEST["login"]); 
                          $respSENHA = antiInjection($_REQUEST["senha"]);
                                  if($respLOGIN==0 || $respSENHA==0){ //0=teve tentativa de injection, 1=dados válidos
                                      session_destroy();
                                  ?>
                                  <form action="../view/login.php" name="form" id="myForm" method="POST">
                                  <input type="hidden" name="msg" value="FR11"> <!--"FR11" => "Informação incorreta.",-->
                                  </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
                                  <script>
                                  document.getElementById('myForm').submit();//envio automático submit()
                                  </script>
                                  <?php  
                                  } else{
                                      $login = $_REQUEST["login"];
                                      $senhaHASH = hash256($_REQUEST['senha']);
                                      require_once"../model/Manager.php"; //arquivo específico para comunicação com o BD
                                      $dados=VerifDadosUSER($login,$senhaHASH);

                                                  if($dados["result"]==1){//tudo certo!
                                                    session_reset();

                                                      $_SESSION["USER-ID"] = $dados["id"];
                                                      $_SESSION["USER-NOME"] = $dados["nome"];
                                                      $_SESSION["USER-EMAIL"] = $dados["email"];
                                                      $_SESSION["USER-CPF"] = $dados["cpf"]; 
                                                      ?>
                                                      <form action="../view/meuperfil.php" name="form" id="myForm" method="POST">
                                                      <input type="hidden" name="result" value="validado"> <!--inútil-->
                                                      </form> 
                                                      <script>
                                                      document.getElementById('myForm').submit();//envio automático submit()
                                                      </script>
                                                      <?php  
                                                       }else{
                                  session_destroy();
                  ?>
              <form action="../view/login.php" name="form" id="myForm" method="POST">
              <input type="hidden" name="msg" value="FR02">  <!--"FR02" => "Dados incorretos.",-->
              </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
              <script>
              document.getElementById('myForm').submit();//envio automático submit()
              </script>
              <?php  
               }
              }

  }
}

/*NOVO USUARIO 
-------------------------------------------------------------------------------------------------------------------------------------*/
else { 



if(isset($_REQUEST["cadastro"])){
  if(empty($_REQUEST["nome"]) || empty($_REQUEST["email"]) || empty($_REQUEST["cpf"]) || empty($_REQUEST["senha"])){ // se não vier senha e/ou login do formulário então:
      session_destroy();
?>
      <form action="../view/login.php" name="form" id="myForm" method="POST">
      <input type="hidden" name="msg" value="FR01"><!--"FR01" => "Dado(s) não preenchido(s).",-->
      </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php) para o index--> 
      <script>
      document.getElementById('myForm').submit();//envio automático submit()
      </script>  
<?php

    }else{
  
  require "../model/ferramentas.php";
  require "../model/Manager.php";
  $email = $_REQUEST["email"];
  $cpf =  $_REQUEST["cpf"];
  $verificaCPF = validaCPF($_REQUEST["cpf"]); 
  $cpf = preg_replace('/[^0-9]/', '', $cpf);
  $resp = search($email, $cpf);
  if($resp ==0 ){
    
  if( $verificaCPF == 1 ){

      $cpf = $_REQUEST["cpf"];
      $cpf = preg_replace('/[^0-9]/', '', $cpf);
     

      $dados["nome"] = $_REQUEST["nome"];
      $dados["email"] = $_REQUEST["email"];
      $dados["tel"] = $_REQUEST["tel"];
      require_once "../model/ferramentas.php";
      $dados["senha"] =  hash256($_REQUEST["senha"]);
      $dados["cpf"] = $cpf;
      require_once "../model/Manager.php";
      $resp=userNew($dados);
  if($resp==1){ //tudo certo
    session_reset();
                                                    
    $_SESSION["USER-ID"] = $dados["id"];
    $_SESSION["USER-NOME"] = $dados["nome"];
    $_SESSION["USER-EMAIL"] = $dados["email"];
    $_SESSION["USER-CPF"] = $dados["cpf"];      ?>
      
      <form action="../view/meuperfil.php" name="form" id="myForm" method="POST">
      <input type="hidden" name="msg" value="BD50">  <!--"BD50" => "Operação realizada com sucesso.",-->
      </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
      <script>
      document.getElementById('myForm').submit();//envio automático submit()
      </script>
      <?php  
  }else{//erro
      ?>
      <form action="../view/login.php" name="form" id="myForm" method="POST">
      <input type="hidden" name="msg" value="BD02">  <!--""BD02" => "Erro ao criar registro.",-->
      </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
      <script>
      document.getElementById('myForm').submit();//envio automático submit()
      </script>
      <?php  
      
      }
  } else // se o cpf é invalido{
      ?>
      <form action="../view/login.php" name="form" id="myForm" method="POST">
      <input type="hidden" name="msg" value="FR26">  <!--""BD02" => "Erro ao criar registro.",-->
      </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
      <script>
      document.getElementById('myForm').submit();//envio automático submit()
      </script>
      <?php  
      
  }
else{ //se o emial é repetido

  ?>
  <form action="../view/login.php" name="form" id="myForm" method="POST">
  <input type="hidden" name="msg" value="FR06">  <!--""BD02" => "Erro ao criar registro.",-->
  </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
  <script>
  document.getElementById('myForm').submit();//envio automático submit()
  </script>
  <?php  
}}}
}



// update usuario -------------------------------------------------------------------------------

if (isset($_REQUEST["update_dados"]) || isset($_SESSION["USER-NAME"])){    

        
    $dados["id"] = $_REQUEST["update_dados"];
    $dados["nome"] = $_REQUEST["nome"];
    $dados["email"] = $_REQUEST["email"];
    $dados["telefone"] = $_REQUEST["telefone"];
    $dados["cpf"] = $_REQUEST["cpf"];
    require_once "../model/ferramentas.php";
    $valida = validaCPF($_REQUEST["cpf"]);
    if($valida==0){
        ?>
        <form action="../view/dados.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="FR26">  <!--""BD02" => "Erro ao criar registro.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
    }else{
    require_once "../model/manager.php";
    $resp=clienteEdit($dados);
    if($resp==1){ //tudo certo
        ?>
        <form action="../view/dados.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD50">  <!--"BD50" => "Operação realizada com sucesso.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>



        <?php  
    }else if($resp==0){//erro
        ?>
        <form action="../view/dados.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD02">  <!--""BD02" => "Erro ao criar registro.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
        
    }else if($resp==2){?>
        <form action="../view/dados.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="FR27">  <!--""BD02" => "Erro ao criar registro.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
        
    }
}
}

if (isset($_REQUEST["endereco_edit"]) || isset($_SESSION["USER-NAME"])){ 
    
    $dados["id"] =       $_REQUEST["endereco_edit"];
    $dados["nome"] =       $_REQUEST["apelido"];
    $dados["cliente"] =  $_REQUEST["id_cliente"];
    $dados["cep"] =      $_REQUEST["cep"];
    $dados["estado"] =   $_REQUEST["estado"];            
    $dados["cidade"] =   $_REQUEST["cidade"];
    $dados["bairro"] =   $_REQUEST["bairro"];
    $dados["rua"] =      $_REQUEST["rua"];
    $dados["bloco"] =    $_REQUEST["bloco"];
    $dados["apto"] =     $_REQUEST["apto"];
    $dados["numero"] =     $_REQUEST["numero"]; 
    require '../model/manager.php';
    $resp=enderecoEdit($dados);
    if ($resp == 1) {
            ?>
            <form action="../view/meuperfil.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="BD50">  <!--"BD50" => "Operação realizada com sucesso.",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>
    
    
    
            <?php  
        }else if($resp==0){//erro
            ?>
            <form action="../view/meuperfil.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="BD02">  <!--""BD02" => "Erro ao criar registro.",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>
            <?php  
            
        }else if($resp==2){?>
            <form action="../view/meuperfil.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="FR27">  <!--""BD02" => "Erro ao criar registro.",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>
            <?php  
            
        }
    }

    
if (isset($_REQUEST["endereco_edit_checkout"]) || isset($_SESSION["USER-NAME"])){ 
    
    $dados["id"] =       $_REQUEST["endereco_edit_checkout"];
    $dados["nome"] =       $_REQUEST["apelido"];
    $dados["cliente"] =  $_REQUEST["id_cliente"];
    $dados["cep"] =      $_REQUEST["cep"];
    $dados["estado"] =   $_REQUEST["estado"];            
    $dados["cidade"] =   $_REQUEST["cidade"];
    $dados["bairro"] =   $_REQUEST["bairro"];
    $dados["rua"] =      $_REQUEST["rua"];
    $dados["bloco"] =    $_REQUEST["bloco"];
    $dados["apto"] =     $_REQUEST["apto"];
    $dados["numero"] =     $_REQUEST["numero"]; 
    require '../model/manager.php';
    $resp=enderecoEdit($dados);
    if ($resp == 1) {
            ?>
            <form action="../view/checkout.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="BD50">  <!--"BD50" => "Operação realizada com sucesso.",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>
    
    
    
            <?php  
        }else if($resp==0){//erro
            ?>
            <form action="../view/checkout.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="BD02">  <!--""BD02" => "Erro ao criar registro.",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>
            <?php  
            
        }else if($resp==2){?>
            <form action="../view/checkout.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="FR27">  <!--""BD02" => "Erro ao criar registro.",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>
            <?php  
            
        }
    }
    
if (isset($_REQUEST["endereco_new"]) || isset($_SESSION["USER-NAME"])){ 

    $dados["cliente"] =  $_REQUEST["id_cliente"];
    $dados["nome"] =  $_REQUEST["apelido"];
    $dados["cep"] =      $_REQUEST["cep"];
    $dados["estado"] =   $_REQUEST["estado"];            
    $dados["cidade"] =   $_REQUEST["cidade"];
    $dados["bairro"] =   $_REQUEST["bairro"];
    $dados["rua"] =      $_REQUEST["rua"];
    $dados["bloco"] =    $_REQUEST["bloco"];
    $dados["apto"] =     $_REQUEST["apto"];
    $dados["numero"] =   $_REQUEST["numero"];
require '../model/manager.php';
$resp=enderecoNew($dados);
    if ($resp == 1) {
            ?>
            <form action="../view/meuperfil.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="BD50">  <!--"BD50" => "Operação realizada com sucesso.",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>
    
    
    
            <?php  
        }else if($resp==0){//erro
            ?>
            <form action="../view/meuperfil.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="BD02">  <!--""BD02" => "Erro ao criar registro.",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>
            <?php  
            
        }else if($resp==2){?>
            <form action="../view/meuperfil.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="FR27">  <!--""BD02" => "Erro ao criar registro.",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>
            <?php  
            
        }
    }
    
    if(isset($_REQUEST["redefinir"])){
if (isset($_REQUEST["cel"])){ 

    $cel =  $_REQUEST["cel"];
require '../model/manager.php';
$resp=verif_celular($cel);
    if ($resp["result"] == 1) {
        $cpf=$resp["cpf"];
header("Location: ../model/mailget.php?celular=" . urlencode($cel). "&cpf=". urlencode($cpf));

        }else if($resp["result"]==0){//erro
            ?>
            <form action="../view/login.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="FR08">  
            <input type="hidden" name="return" value="1"> <!--""BD02" => "Erro ao criar registro.",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>
            <?php  
            
        }
    }
    }

    
        
        if (isset($_REQUEST["cod_verif"])){ 
            
            $dados["cod"] =  $_REQUEST["cod"];
            $dados["id"] =  $_REQUEST["id"];
        require '../model/manager.php';
        $resp=verificar_cod($dados);
       
            if ($resp["result"] == '1') {
                

?>
                <form action="../view/login.php" name="form" id="myForm" method="POST">
               
                <input type="hidden" name="cpf" value="<?php  echo $_REQUEST["cpf"]; ?>"> 
                <input type="hidden" name="id" value="<?php  echo $dados["id"]; ?>"> 
                <input type="hidden" name="autenticado" value="1"> 
                </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
                <script>
                document.getElementById('myForm').submit();//envio automático submit()
                </script>
                <?php  
              
        
                }else {//erro
                    
                    ?>
                    <form action="../view/login.php" name="form" id="myForm" method="POST">
                        
                <input type="hidden" name="cpf" value="<?php  echo $_REQUEST["cpf"]; ?>"> 
                        <input type="hidden" name="id" value="<?php  echo $dados["id"]; ?>"> 
                <input type="hidden" name="modal" value="1"> 
                    <input type="hidden" name="msg" value="FR28">  <!--""BD02" => "Erro ao criar registro.",-->
                    </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
                    <script>
                    document.getElementById('myForm').submit();//envio automático submit()
                    </script>
                    <?php  
                }
                }



                if (isset($_REQUEST["senha_alt"])){ 
                    if($_REQUEST["senha"] == $_REQUEST["senha_rep"]){
                        require '../model/ferramentas.php';
                    $dados["senha"] = hash256($_REQUEST['senha']); 
                    $dados["cpf"] =  $_REQUEST["cpf"];
                require '../model/manager.php';
                $resp=alteraSenha($dados);
               
                    if ($resp["result"] == '1') { //SUCESSO
                        
                        ?>
                      <form action="../view/login.php" name="form" id="myForm" method="POST">
                       
                        <input type="hidden" name="cpf" value="<?php  echo $_REQUEST["cpf"]; ?>"> 
                        
                        <input type="hidden" name="msg" value="BD56"> 
                        </form>  
                        <script>
                        document.getElementById('myForm').submit();
                        </script>
                        <?php  
                      
                
                        }else if($resp["result"]=='0'){//erro
                            
                            ?>
                            <form action="../view/login.php" name="form" id="myForm" method="POST">
                            <input type="hidden" name="msg" value="FR28"> 
                            <input type="hidden" name="autenticado" value="1">  
                            </form> 
                            <script>
                            document.getElementById('myForm').submit();
                            </script>
                            <?php  
                            
                        }}else{//senhas diferentes
                            ?>
                             <form action="../view/login.php" name="form" id="myForm" method="POST"> 
                            <input type="hidden" name="msg" value="FR04">
                            
                        <input type="hidden" name="cpf" value="<?php  echo $_REQUEST["cpf"]; ?>"> 
                            <input type="hidden" name="autenticado" value="1">  
                            </form> 
                            <script>
                            document.getElementById('myForm').submit();
                            </script>
                            <?php  
                        
                    }
                }

                if (isset($_REQUEST["excluir_endereco"])){ 
                   
                    $dados =  $_REQUEST["excluir_endereco"];
                require '../model/manager.php';
                $resp=enderecoDelete($dados);
               
                    if ($resp == '1') { //SUCESSO
                        
                        ?>
                      <form action="../view/meuperfil.php" name="form" id="myForm" method="POST"> 
                                             
                        <input type="hidden" name="msg" value="BD57"> 
                        </form>  
                        <script>
                        document.getElementById('myForm').submit();
                        </script>
                        <?php  
                      
                
                        }else if($resp=='0'){//erro
                            
                            ?>
                           <form action="../view/meuperfil.php" name="form" id="myForm" method="POST"> 
                            <input type="hidden" name="msg" value="BD04"> 
                            <input type="hidden" name="autenticado" value="1">  
                            </form> 
                            <script>
                            document.getElementById('myForm').submit();
                            </script>
                            <?php  
                            
                        }
                        
                    }
                
                    if (isset($_REQUEST["quantidade_op"])){ 
                        require '../model/manager.php';
                        $op = $_REQUEST["quantidade_op"];
                        $qtd = $_REQUEST["quant"];
                        if ($op == 'add'){
                            $qtd =  $qtd + 1;
                        }else{
                            $qtd =  $qtd-1;
                                                  
                        }
                        $dados["quant"] = $qtd;
                        $dados["id"] = $_REQUEST["id"];
                        $resp = quantidade_op($dados);

                  
                        if ($resp["result"] == '1') { //SUCESSO
                        
                            ?>
                          <form action="../view/carrinho.php" name="form" id="myForm" method="POST">
                            </form>  
                            <script>
                            document.getElementById('myForm').submit();
                            </script>
                            <?php  
                          
                    
                            }else if($resp["result"]=='0'){//erro
                                
                                ?>
                                <form action="../view/carrinho.php" name="form" id="myForm" method="POST">
                                </form> 
                                <script>
                                document.getElementById('myForm').submit();
                                </script>
                                <?php  
                                
                            }
                    }

                    if (isset($_REQUEST["excluir_prod"])){ 
                        require '../model/manager.php';
                       
                        $dados["id"] = $_REQUEST["excluir_prod"];
                        $resp = excluir_prod($dados);

                  
                        if ($resp["result"] == '1') { //SUCESSO
                        
                            ?>
                          <form action="../view/carrinho.php" name="form" id="myForm" method="POST">
                            </form>  
                            <script>
                            document.getElementById('myForm').submit();
                            </script>
                            <?php  
                          
                    
                            }else if($resp["result"]=='0'){//erro
                                
                                ?>
                                <form action="../view/carrinho.php" name="form" id="myForm" method="POST">
                                </form> 
                                <script>
                                document.getElementById('myForm').submit();
                                </script>
                                <?php  
                                
                            }
                    }
        ?>
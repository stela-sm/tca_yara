<?php
//validar se o login foi feito da maneira correta
session_start();
if(!isset($_SESSION["ADM-ID"]) || empty($_SESSION["ADM-ID"])){ //se a variavel de sessão "adm-id" não estiver setada ou vazia(se a sessão não foi startada), então:

   
   


  
   //LOGIN --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
   
   




   
    if(isset($_REQUEST["loginsenha"])){ //verifica se vem algo do formulário pelo POST ou GET, se vier:

        if(empty($_REQUEST["login"]) || empty($_REQUEST["senha"])){ // se não vier senha e/ou login do formulário então:
            session_destroy();
?>
            <form action="../index.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="FR01"><!--"FR01" => "Dado(s) não preenchido(s).",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php) para o index--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>  
<?php
        }else{
                //tem dados digitados
                //verificação de anti-injection.
            require_once"../model/ferramentas.php";
            $respLOGIN = antiInjection($_REQUEST["login"]); 
            $respSENHA = antiInjection($_REQUEST["senha"]);
           
           
            if($respLOGIN==0 || $respSENHA==0){ //0=teve tentativa de injection, 1=dados válidos
                session_destroy();
            ?>
            <form action="../index.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="FR11"> <!--"FR11" => "Informação incorreta.",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>
            <?php  
            }else{
            //autenticando o login e a senha do usuário
         
           
              require_once"../model/ferramentas.php";
            $senhaHASH = hash256($_REQUEST['senha']);
            require_once"../model/manager.php"; //arquivo específico para comunicação com o BD
            $dados=VerifDadosADM($_REQUEST["login"],$senhaHASH);
            
            
            if($dados["result"]==1){//tudo certo!
                $_SESSION["ADM-ID"] = $dados["id"];
                $_SESSION["ADM-NOME"] = $dados["nome"];
                $_SESSION["ADM-EMAIL"] = $dados["email"];
                $_SESSION["ADM-PODER"] = $dados["poder"]; 
                //encaminhar para a pagina de adm
                ?>
                <form action="../view/adm.php" name="form" id="myForm" method="POST">
                <input type="hidden" name="result" value="validado"> <!--inútil-->
                </form> 
                <script>
                document.getElementById('myForm').submit();//envio automático submit()
                </script>
                <?php  

            }else{ //se estiver errado (devolveu 0)
                session_destroy();
                ?>
            <form action="../index.php" name="form" id="myForm" method="POST">
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
}else{ //caso exista sessão 

    if(isset($_SESSION["ADM-ID"])){
   
   
    if(isset($_REQUEST["loginsenha"])){ //verifica se vem algo do formulário pelo POST ou GET, se vier:

        if(empty($_REQUEST["login"]) || empty($_REQUEST["senha"])){ // se não vier senha e/ou login do formulário então:
            session_destroy();
?>
            <form action="../index.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="FR01"><!--"FR01" => "Dado(s) não preenchido(s).",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php) para o index--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>  
<?php
        }else{
                //tem dados digitados
                //verificação de anti-injection.
            require_once"../model/ferramentas.php";
            $respLOGIN = antiInjection($_REQUEST["login"]); 
            $respSENHA = antiInjection($_REQUEST["senha"]);
           
           
            if($respLOGIN==0 || $respSENHA==0){ //0=teve tentativa de injection, 1=dados válidos
                session_destroy();
            ?>
            <form action="../index.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="FR11"> <!--"FR11" => "Informação incorreta.",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>
            <?php  
            }else{
            //autenticando o login e a senha do usuário
         
           
              require_once"../model/ferramentas.php";
            $senhaHASH = hash256($_REQUEST['senha']);
            require_once"../model/manager.php"; //arquivo específico para comunicação com o BD
            $dados=VerifDadosADM($_REQUEST["login"],$senhaHASH);
            
            
            if($dados["result"]==1){//tudo certo!
                $_SESSION["ADM-ID"] = $dados["id"];
                $_SESSION["ADM-NOME"] = $dados["nome"];
                $_SESSION["ADM-EMAIL"] = $dados["email"];
                $_SESSION["ADM-PODER"] = $dados["poder"]; 
                //encaminhar para a pagina de adm
                ?>
                <form action="../view/adm.php" name="form" id="myForm" method="POST">
                <input type="hidden" name="result" value="validado"> <!--inútil-->
                </form> 
                <script>
                document.getElementById('myForm').submit();//envio automático submit()
                </script>
                <?php  

            }else{ //se estiver errado (devolveu 0)
                session_destroy();
                ?>
            <form action="../index.php" name="form" id="myForm" method="POST">
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
    }


//NOVO ADM ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
   
   





if(isset($_REQUEST["adm_new"])){ //se vier do admNew (criar adm)
    $dados["nome"] = $_REQUEST["nome"];
    $dados["email"] = $_REQUEST["email"];
    require_once "../model/ferramentas.php";
    $dados["senha"] =  hash256($_REQUEST["senha"]);
    $dados["poder"] = $_REQUEST["poder"];
    $dados["telefone"] = $_REQUEST["telefone"];
    $dados["status"] = $_REQUEST["status"];
    require_once "../model/manager.php";
    $resp=admNew($dados);
    if($resp==1){ //tudo certo
        ?>
        <form action="../view/adm_list.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD50">  <!--"BD50" => "Operação realizada com sucesso.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
    }else{//erro
        ?>
        <form action="../view/adm_list.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD02">  <!--""BD02" => "Erro ao criar registro.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
        
    }
}




     
   //EDITA ADM ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
   







   if(isset($_REQUEST["adm_edit"])){
        
    $dados["id"] = $_REQUEST["adm_edit"];
    $dados["nome"] = $_REQUEST["nome"];
    $dados["email"] = $_REQUEST["email"];
    $dados["telefone"] = $_REQUEST["telefone"];
    $dados["poder"] = $_REQUEST["poder"];
    $dados["status"] = $_REQUEST["status"];
    require_once "../model/manager.php";
    $resp=admEdit($dados);
    if($resp==1){ //tudo certo
        ?>
        <form action="../view/adm_list.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD50">  <!--"BD50" => "Operação realizada com sucesso.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
    }else{//erro
        ?>
        <form action="../view/adm_list.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD02">  <!--""BD02" => "Erro ao criar registro.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
        
    }
}








 
//DELETA ADM ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------










if(isset($_REQUEST["adm_delete"])){ //deleçao
    $id = $_REQUEST["id"];
    require_once "../model//manager.php";
    $result = admDelete($id);
    if($result==1){//tudo certo
        ?>
        <form action="../view/adm_list.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD54">  <!--"BD04" => "Erro ao apagar registro.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
    }else{//erro
        ?>
        <form action="../view/adm_list.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD04">  <!-- "BD54" => "Registro apagado com sucesso.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
    }
}




 
   //NOVo PRODUTO----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
   
        




        
   if(isset($_REQUEST["produto_new"])){ //adicionar produto
    require_once "../model/ferramentas.php";
    require_once "../model/manager.php";

    if($_REQUEST["nome"] == "" || 
    $_REQUEST["descricao"] == "" || 
    $_REQUEST["ingredientes"] == "" || 
    $_REQUEST["categoria"] == "" || 
    $_REQUEST["finalidade"] == "" || 
    $_REQUEST["preco"] == "" || 
    $_REQUEST["estoque"] == "" || 
    $_REQUEST["status"] == "" ||
    $_FILES["img"] == "" || 
    $_FILES["img_hover"] == "" ){ //se tiver algo vazio
        ?>
            <form action="../view/produtos_list.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="msg" value="FR01">  <!-- "BD54" => "Registro apagado com sucesso.",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>
<?php  
    }
   
    $extPeq = validaExtImg($_FILES["img"]["name"]);
    $extMed = validaExtImg($_FILES["img_hover"]["name"]);
    if ($extPeq == 0 || $extMed == 0){
        ?>
        <form action="../view/produtos_list.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="FR19">  <!-- "BD54" => "Registro apagado com sucesso.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
<?php  
   }
//microtime()
//hrtime()[0]
//pizza_peq_xxxxxxxx_120x120

$dados = array();
$dados["nome"]=$_REQUEST["nome"];
$dados["descricao"]=$_REQUEST["descricao"];
$dados["ingredientes"]=$_REQUEST["ingredientes"];
$dados["preco"]= str_replace(",",".",$_REQUEST["preco"]);
$dados["categoria"]=$_REQUEST["categoria"];
$dados["finalidade"]=$_REQUEST["finalidade"];
$dados["estoque"]=$_REQUEST["estoque"];
$dados["status"]=$_REQUEST["status"];


$str = geradorStringRandom(8);
$extPeq = pegaExtensao($_FILES["img"]["name"]);
$extMed = pegaExtensao($_FILES["img_hover"]["name"]);
$img_peq_name = "produto_" . $str ."_img_." .  $extPeq;
$img_med_name = "produto_" . $str ."_imghover_." . $extMed;
$imgPath="../view/media/";


move_uploaded_file($_FILES["img"]["tmp_name"],$imgPath.$img_peq_name);
move_uploaded_file($_FILES["img_hover"]["tmp_name"],$imgPath.$img_med_name);

$dados["img"] = $img_peq_name;
$dados["img_hover"] = $img_med_name;

$result=produtoNew($dados);

if ($result["result"]==1){
    ?>
    <form action="../view/produtos_list.php" name="form" id="myForm" method="POST">
    <input type="hidden" name="msg" value="BD50">  <!-- "BD54" => "Registro apagado com sucesso.",-->
    </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
    <script>
    document.getElementById('myForm').submit();//envio automático submit()
    </script>
<?php  
}else{//falha
?>
        <form action="../view/produtos_list.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD04">  <!-- "BD54" => "Registro apagado com sucesso.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php
}
}


   //FUDEUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU ACABARAM OS VIDEOS











   //EDITA PRODUTO ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
   







   if(isset($_REQUEST["produto_edit"])){
    
    
    $dados["id"]=$_REQUEST["produto_edit"];
    $dados["nome"]=$_REQUEST["nome"];
    $dados["preco"]= str_replace(",",".",$_REQUEST["valor"]);
    $dados["categoria"]=$_REQUEST["categoria"];
    $dados["finalidade"]=$_REQUEST["finalidade"];
    $dados["estoque"]=$_REQUEST["estoque"];
    $dados["status"]=$_REQUEST["status"];
    require_once "../model/manager.php";
    $resp=produtoEdit($dados);
    if($resp==1){ //tudo certo
        ?>
        <form action="../view/produtos_list.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD50">  <!--"BD50" => "Operação realizada com sucesso.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
    }else{//erro
        ?>
        <form action="../view/produtos_list.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD02">  <!--""BD02" => "Erro ao criar registro.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
        
    }
}



    
     
   //EDITAR VITRINE ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
   
        




   if(isset($_REQUEST["vitrine_edit"])){ //se veio do editar submenu
    require_once "../model/ferramentas.php";
    require_once "../model/manager.php";
    $dados["id"] = $_REQUEST["vitrine_edit"];
    $dados["nome"] = $_REQUEST["nome"];    
    $dados["ingredientes"] = $_REQUEST["ingredientes"];    
    $dados["descricao"] = $_REQUEST["descricao"]; 
    $dados["status"] = $_REQUEST["status"];
    
    if (isset($_REQUEST["img"]) && $_REQUEST["img"] != ""){

        $str = geradorStringRandom(8);
        $extPeq = pegaExtensao($_FILES["img"]["name"]);
        $img_peq_name = "produto_" . $str ."_img_." .  $extPeq;
        $imgPath="../view/media/";
        move_uploaded_file($_FILES["img"]["tmp_name"],$imgPath.$img_peq_name);
        $dados["img"] = $img_peq_name;
        
    }
    
    if (isset($_REQUEST["img_hover"]) && $_REQUEST["img_hover"] != ""){
    $extMed = pegaExtensao($_FILES["img_hover"]["name"]);
    $img_med_name = "produto_" . $str ."_imghover_." . $extMed;
    move_uploaded_file($_FILES["img_hover"]["tmp_name"],$imgPath.$img_med_name);
    $dados["img_hover"] = $img_med_name;
    }


    require_once "../model/manager.php";
$resp=vitrineEdit($dados);
if ($resp ==1){ //tudo certo
?>
    <form action="../view/vitrine_list.php" name="form" id="myForm" method="POST">
    <input type="hidden" name="msg" value="BD53">  <!-- "BD54" => "Registro apagado com sucesso.",-->
    </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
    <script>
    document.getElementById('myForm').submit();//envio automático submit()
    </script>
<?php  
}else{//falha
?>
        <form action="../view/vitrine_list.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD03">  <!-- "BD54" => "Registro apagado com sucesso.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
<?php  
}
}

//DELETA PRODUTO ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------










if(isset($_REQUEST["produto_delete"])){ //deleçao
    $id = $_REQUEST["id"];
    require_once "../model//manager.php";
    $result = produtoDelete($id);
    if($result==1){//tudo certo
        ?>
        <form action="../view/produtos_list.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD54">  <!--"BD04" => "Erro ao apagar registro.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
    }else{//erro
        ?>
        <form action="../view/produtos_list.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD04">  <!-- "BD54" => "Registro apagado com sucesso.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
    }
}





}
    
    ?>
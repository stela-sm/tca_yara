<?php




if(isset($_REQUEST["verif_tel"])){ //se vier do admNew (criar adm)
    $dados["tabela"] = $_REQUEST["tabela"];
    $dados["celular"] = $_REQUEST["celular"];
    $dados["cpf"] = $_REQUEST["cpf"];
    require_once "../model/manager.php";
    $resp=verificarDados($dados);
    if($resp["result"]==1){ //tudo certo
      

       
        

        
    }else{//erro
        ?>
        <form action="../view/senhas.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="FR08">  <!--""BD02" => "Erro ao criar registro.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
        
    }
}

if(isset($_REQUEST["verif_cod"])){ //se vier do admNew (criar adm)
    $dados["tabela"] = $_REQUEST["tabela"];
    $dados["celular"] = $_REQUEST["celular"];
    $dados["cpf"] = $_REQUEST["cpf"];
    require_once "../model/manager.php";
    $resp=verificarDados($dados);
    if($resp==1){ //tudo certo
        ?>
        <form action="../view/senhas.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="fase" value="1">
        <input type="hidden" name="tabela" value="<?php echo $dados["tabela"] ?>">
        <input type="hidden" name="cpf" value="<?php echo $dados["cpf"] ?>">   <!--"BD50" => "Operação realizada com sucesso.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
    }else{//erro
        ?>
        <form action="../view/senhas.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="FR08">  <!--""BD02" => "Erro ao criar registro.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
        
    }
}


if(isset($_REQUEST["senha_edit"])){ //se vier do admNew (criar adm)
    $dados["tabela"] = $_REQUEST["tabela"];
    $dados["cpf"] = $_REQUEST["cpf"];
    require_once "../model/manager.php";
    require_once"../model/ferramentas.php";
    $senhaHASH = hash256($_REQUEST['senha']);
    $dados["senha"] = $senhaHASH;
    $resp= alteraSenha($dados);
    if($resp==1){ //tudo certo
        ?>
        <form action="../view/senhas.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="fase" value="1">  <!--"BD50" => "Operação realizada com sucesso.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
    }else{//erro
        ?>
        <form action="../view/senhas.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="FR08">  <!--""BD02" => "Erro ao criar registro.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
        
    }
}

     
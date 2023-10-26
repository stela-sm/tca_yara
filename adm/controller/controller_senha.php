<?php

   
if(isset($_REQUEST["verif_cod"]) || isset($_REQUEST["codverif"])){ //verifica se vem algo do formulário pelo POST ou GET, se vier:

$dados = [];
 $dados["id"] = $_REQUEST["verif_cod"];
 $dados["cod"] = $_REQUEST["codverif"];
require "../model/manager.php";
$resp = verificar_cod($dados);
if($resp["result"]==1){ //tudo certo
    ?>
<form action="../view/senhas.php" name="form" id="myForm" method="POST">
    <input type="hidden" name="msg" value="BD50">  
    <input type="hidden" name="fase" value="2">  <!--""BD02" => "Erro ao criar registro.",-->
    <!--"BD50" => "Operação realizada com sucesso.",-->
    </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
    <script>
    document.getElementById('myForm').submit();//envio automático submit()
    </script>
    <?php  
}else if($resp["result"]==0){//erro
    ?>
    <form action="../view/senhas.php" name="form" id="myForm" method="POST">
    <input type="hidden" name="msg" value="BD02">  <!--""BD02" => "Erro ao criar registro.",-->
    <input type="hidden" name="fase" value="1">  <!--""BD02" => "Erro ao criar registro.",-->
    <input type="hidden" name="id" value="<?php $_REQUEST["verif_cod"]; ?>">  
    <input type="hidden" name="cel" value="<?php $_REQUEST["cel"]; ?>">  
    </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
    <script>
    document.getElementById('myForm').submit();//envio automático submit()
    </script>
    <?php  }}
?>
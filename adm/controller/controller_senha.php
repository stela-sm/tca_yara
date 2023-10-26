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
    <input type="hidden" name="cpf" value="<?php echo  $_REQUEST["cpf"]; ?>"> 
    <input type="hidden" name="tabela" value="<?php echo $_REQUEST["tabela"]; ?>">  
    <input type="hidden" name="fase" value="2">
    </form> 
    <script>
    document.getElementById('myForm').submit();//envio automático submit()
    </script>
    <?php  
}else if($resp["result"]==0){//erro
    ?>
    <form action="../view/senhas.php" name="form" id="myForm" method="POST">
    <input type="hidden" name="msg" value="FR28">  
    <input type="hidden" name="id" value="<?php echo $_REQUEST["verif_cod"]; ?>">  
    <input type="hidden" name="cel" value="<?php echo $_REQUEST["cel"]; ?>">  
    <input type="hidden" name="cpf" value="<?php echo $_REQUEST["cpf"]; ?>">  
    <input type="hidden" name="tabela" value="<?php echo $_REQUEST["tabela"]; ?>"> 
    <input type="hidden" name="fase" value="1">  >
  
    </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
    <script>
    document.getElementById('myForm').submit();//envio automático submit()
    </script>
    <?php  }}

if(isset($_REQUEST["senha_edit"])){ //se vier do admNew (criar adm)
    if($_REQUEST["senha"]==$_REQUEST["senha2"]){
    $dados["tabela"] = $_REQUEST["tabela"];
    $dados["cpf"] = $_REQUEST["cpf"];
    require_once "../model/manager.php";
    require "../model/ferramentas.php";
    $senhaHASH = hash256($_REQUEST['senha']);
    $dados["senha"] = $senhaHASH;
    $resp= alteraSenha($dados);
    if($resp==1){ //tudo certo
        ?>
        <form action="../view/senhas.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="FR08">  
        </form> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
    }else{//erro
        ?>
        <form action="../view/senhas.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="BD53">  
        </form> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
        
    }}else{
        ?>
        <form action="../view/senhas.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="FR04"> 
        </form>  
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
    }
}

?>
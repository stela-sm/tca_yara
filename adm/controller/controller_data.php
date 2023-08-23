<?php


   
    if(isset($_REQUEST["inicio"]) || isset($_REQUEST["fim"])){ //verifica se vem algo do formulário pelo POST ou GET, se vier:

        if(empty($_REQUEST["inicio"]) || empty($_REQUEST["fim"])){ // se não vier senha e/ou login do formulário então:
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
        $dados = [];
         $dados["inicio"] = $_REQUEST["inicio"];
         $dados["fim"] = $_REQUEST["fim"];
        require "../model/manager.php";
        $resp = dataPeriod($dados);
        $resp2 = dataFaturamento($dados);
        $resp3 = dataClientes($dados);
       
            ?>
            <form action="../view/painel.php" name="form" id="myForm" method="POST">
            <input type="hidden" name="vendas" value="<?php echo $resp["num"]; ?>">
            <input type="hidden" name="faturamento" value="<?php echo $resp2["num"]; ?>">  
            <input type="hidden" name="clientes" value="<?php echo $resp3["num"]; ?>">  
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>
            <?php  
      
        }
    }
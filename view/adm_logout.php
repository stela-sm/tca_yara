<?php
session_start();
session_destroy();
?>
            <form action="../index.php" name="form" id="myForm" method="post">
            <input type="hidden" name="msg" value="OP51"><!--"FR01" => "Dado(s) não preenchido(s).",-->
            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php) para o index--> 
            <script>
            document.getElementById('myForm').submit();//envio automático submit()
            </script>  
<?php

?>

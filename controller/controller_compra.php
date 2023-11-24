<?php

session_start();

    if (isset($_REQUEST["adicionar_prod"])){
        require '../model/manager.php';
        $dados["produto"] = $_REQUEST["id"];
        $dados["qnt"] = $_REQUEST["qtd"];
        $dados["cliente"] = $_REQUEST["cliente"];
        $dados["preco"] = $_REQUEST["preco"];
        $dados["nome"] = $_REQUEST["nome"];
        $resp = adicionar_prod($dados);
        if ($resp["result"] == '1') { //SUCESSO
            ?>
                  <form action="../view/produto.php" name="form" id="myForm" method="POST">
                  <input type="hidden" name="msg" value="BD50"> 
                        </form>  
                        <script>
                        document.getElementById('myForm').submit();
                        </script>
                        <?php  
                      
                
                        }else if($resp["result"]=='0'){//erro
                            
                            ?>
                            <form action="../view/produto.php" name="form" id="myForm" method="POST">
                            <input type="hidden" name="msg" value="BD04"> 
                            </form> 
                            <script>
                            document.getElementById('myForm').submit();
                            </script>
                            <?php  
                            
                        }
                }

        ?>
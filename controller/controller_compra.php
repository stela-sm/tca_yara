<?php

session_start();

    

                if (isset($_REQUEST["endereco_new_checkout"])){ 

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
                            <form action="../view/meuperfil.php" name="form" id="myForm" method="POST">
                            <input type="hidden" name="msg" value="FR27">  <!--""BD02" => "Erro ao criar registro.",-->
                            </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
                            <script>
                            document.getElementById('myForm').submit();//envio automático submit()
                            </script>
                            <?php  
                            
                        }
                    }



                   else if (isset($_REQUEST["efetuar_pedido"])){ 

                        $dados["cliente"] =  $_REQUEST["efetuar_pedido"];
                        $dados["endereco"] =  $_REQUEST["opcoes_endereco"];
                        $dados["payway"] =      $_REQUEST["opcoes_pay"];
                        $dados["envio"] =   $_REQUEST["opcoes_envio"];          
                        $dados["valor"] =   $_REQUEST["valorget"];
                    require '../model/manager.php';
                    $resp= efetuar_pedidos($dados);
                        if ($resp["result"] == 1) {

                            $cel = pega_cel($dados["cliente"] );

                                ?>
                                 <form action="../model/mailconfirm.php?payway=<?php echo $_REQUEST["opcoes_pay"];?>&cel=<?php echo $cel["cel"];?>" name="form" id="myForm" method="POST">
                                <input type="hidden" name="msg" value="BD50">  <!--"BD50" => "Operação realizada com sucesso.",-->
                                <input type="hidden" name="historico" value="historico.php">  <!--"BD50" => "Operação realizada com sucesso.",-->
                                </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
                                <script>
                                document.getElementById('myForm').submit();//envio automático submit()
                                </script>
                        
                        
                        
                                <?php  
                            }else if($resp["result"]==0){//erro
                                ?>
                                 <form action="../view/checkout.php" name="form" id="myForm" method="POST">
                                <input type="hidden" name="msg" value="BD02">  <!--""BD02" => "Erro ao criar registro.",-->
                                </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
                                <script>
                                document.getElementById('myForm').submit();//envio automático submit()
                                </script>
                                <?php  
                                
                        
                        }}
    
                       else if (isset($_REQUEST["adicionar_prod"]) && (isset($_REQUEST["cliente"])) && $_REQUEST["cliente"]!==""){
                            require '../model/manager.php';
                            $dados["produto"] = $_REQUEST["id"];
                            $dados["qnt"] = $_REQUEST["qtd"];
                            $dados["cliente"]=$_REQUEST["cliente"];
                            $dados["preco"] = $_REQUEST["preco"];
                            $dados["nome"] = $_REQUEST["nome"];
                            $resp = adicionar_prod($dados);
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
                                                 <form action="../view/login.php" name="form" id="myForm" method="POST">
                                                <input type="hidden" name="msg" value="OA04"> 
                                                </form> 
                                                <script>
                                                document.getElementById('myForm').submit();
                                                </script>
                                                <?php  
                                                
                                            }   else if($resp["result"]=='2'){//erro
                                                
                                                ?>
                                                 <form action="../view/produto2.php?id=<?php echo $_REQUEST["id"];?>" name="form" id="myForm" method="POST"> 
                                                <input type="hidden" name="msg" value="FR29"> 
                                                </form> 
                                                <script>
                                                document.getElementById('myForm').submit();
                                                </script>
                                                <?php  
                                                
                                            }
                                    }else{
                                        ?>
                                        <form action="../view/login.php" name="form" id="myForm" method="POST">
                                       <input type="hidden" name="msg" value="OA04"> 
                                       </form> 
                                       <script>
                                       document.getElementById('myForm').submit();
                                       </script>
                                       <?php 
                                    }
        ?>
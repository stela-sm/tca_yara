<?php




function carrinho($id){

  require "conexao.php";
 
  $sqlSUB = "SELECT * FROM carrinho  WHERE id_cliente = '{$id}'";
 
 
  $result = $conn->query($sqlSUB);
  $dadosSUB=array();

  if ($result->num_rows>0){
      $dadosSUB["result"] = 1;
      $i = 0;
      while($row = $result->fetch_assoc()){
          $dadosSUB[$i]["id_carrinho"] = $row["ID_CARRINHO"];
          $dadosSUB[$i]["id_cliente"] = $row["id_cliente"];
          $dadosSUB[$i]["id_produto"] = $row["id_produto"];
          $dadosSUB[$i]["quantidade"] = $row["quantidade"];
          $i++;
          $dadosSUB["num"] = $i;
      }
     
      $conn->close();
      return $dadosSUB;
  }else{
    
    $dadosSUB["num"] = 0;
      $dadosSUB["result"] = 0; 
      $conn->close();
      return $dadosSUB;

  }


}

function produtoBusca($id){
 
  require "conexao.php";
  $sqlSUB = "SELECT * FROM produtos  WHERE id_produto = '{$id}'";
  $result = $conn->query($sqlSUB);
  
while($row=$result->fetch_assoc()){
    
  $dados["id_produto"] = $row["ID_PRODUTO"];
  $dados["nome"] = $row["nome"];
  $dados["img"] = $row["img"];
  $dados["valor"] = $row["valor_uni"];
  $dados["status"] = $row["status"];
  $dados["estoque"] = $row["estoque"];

}
return $dados;
}




function VerifDadosUSER2($login,$senha){

 require "conexao.php";
 $sql = "SELECT * FROM cliente WHERE email='$login' AND senha='$senha'";
 $result=$conn->query($sql); 

 if($result->num_rows > 0){
     $dados=array();
     $dados["result"] = 1;
     while($row=$result->fetch_assoc()){
         $dados["id"] = $row["ID_CLIENTE"];
         $dados["nome"] = $row["nome"];
         $dados["email"] = $row["email"];
         $dados["cpf"] = $row["cpf"];
     }
     $conn->close();
     return $dados;
 }else{
     $dados["result"] = 0;
     $conn->close();
     return $dados;
     }

}



function VerifDadosUSER($login,$senha){ //função pra verificar senha e login do adm 
 require "conexao.php";
 $sql = "SELECT * FROM cliente WHERE cpf='$login' AND senha='$senha'";
 $result=$conn->query($sql); 

 if($result->num_rows > 0){
     $dados=array();
     $dados["result"] = 1;
     while($row=$result->fetch_assoc()){
         $dados["id"] = $row["ID_CLIENTE"];
         $dados["nome"] = $row["nome"];
         $dados["email"] = $row["email"];
         $dados["cpf"] = $row["cpf"];
     }
     $conn->close();
     return $dados;
 }else{
     $verif = VerifDadosUSER2($login,$senha);
     if ($verif["result"] == 0){
         $dados["result"] = 0;
         $conn->close();
         return $dados;
     }else{
         $conn->close();
         return $verif;
     }
     }

 

}


function search($email, $cpf){
 require "conexao.php";
 $sql="SELECT * FROM cliente WHERE email = '$email' or cpf = $cpf";
 $result = $conn -> query($sql);
 if($result->num_rows>0){
     $conn->close();
     return 1;
 }    else{
     $conn->close();
     return 0;
 }
}














function userNew($dados){ //função pra criar user


 require "conexao.php";
 $sql="INSERT INTO cliente (nome,email,senha,datahora,cpf,celular,status) VALUES ('{$dados["nome"]}', '{$dados["email"]}', '{$dados["senha"]}', now(), '{$dados["cpf"]}', '{$dados["tel"]}', '1')";
 $result = $conn -> query($sql);
 if($result == true){
     $conn->close();
     return 1;
 }    else{
     $conn->close();
     return 0;
 }

} 







        function clienteEdit($dados){
            require "conexao.php";
            $query = "CALL CheckEmailCPF(' {$dados["email"]}',  '{$dados["cpf"]}', @result, @user_id)";
            $conn->query($query);
        
        // Obtém o resultado da procedure
        $resultQuery = $conn->query("SELECT @result as result, @user_id as id");
        $row = $resultQuery->fetch_assoc();
        $result = $row['result'];
        
        // Cria uma condição com base no resultado
        if ($result != 0 && $row['id']!=$dados['id']) {
            $conn->close();
                return 2;
            
        } else {
           
                    $sql= "UPDATE cliente SET nome = '{$dados['nome']}', email = '{$dados['email']}', cpf = {$dados['cpf']}, celular = {$dados['telefone']},  datahora = now() WHERE ID_CLIENTE = '{$dados['id']}'";
        
            $result = $conn->query($sql);
            if($result == true){
                $conn->close();
                return 1;
            }    else{
                $conn->close();
                return 0;
            }
        
        
        }}





        //ENDERECO----------------------------------------------------------------------------------------------------------------



        function buscar_endereco($id){
            require "conexao.php";
            $sql = "SELECT * FROM endereco WHERE id_cliente='$id' AND status = '1'";
             $result=$conn->query($sql); 
        
            if($result->num_rows > 0){
        
                $num = $result ->num_rows;
                $dados=array();
                $dados["result"] = 1;
                $dados["num"]=$num;
                $i=0;
                while($row=$result->fetch_assoc()){
                    $dados[$i]["id"] =          $row["ID_ENDERECO"];
                    $dados[$i]["id_cliente"] =  $row["id_cliente"];
                    $dados[$i]["cep"] =         $row["cep"];
                    $dados[$i]["estado"] =      $row["estado"];
                    $dados[$i]["cidade"] =      $row["cidade"];
                    $dados[$i]["bairro"] =      $row["bairro"];
                    $dados[$i]["numero"] =      $row["numero"];
                    $dados[$i]["rua"] =         $row["rua"];
                    $dados[$i]["apto"] =         $row["apto"];
                    $dados[$i]["bloco"] =       $row["bloco"];
                    $dados[$i]["nome"] =        $row["nome"];
                 $i++;
                }
                $conn->close();
                return $dados;
            }else{
                $dados["result"] = 0;
                $dados["num"]= 0;
                    $conn->close();
                    return $dados;
                }
                }

        
        function enderecoEdit($dados){
            require "conexao.php";
            if ($dados['numero']=="0") {$dados['numero'] = null;};
            if ($dados['apto']=="0") {$dados['apto'] = null;};
            if ($dados['bloco']=="0") {$dados['bloco'] = null;};


            $sql = "UPDATE endereco SET cep = '{$dados["cep"]}', estado = '{$dados["estado"]}', cidade = '{$dados["cidade"]}', 
            bairro = '{$dados["bairro"]}', rua = '{$dados["rua"]}',nome = '{$dados["nome"]}', bloco = '{$dados["bloco"]}', apto = '{$dados["apto"]}',numero = '{$dados["numero"]}', datahora = 'now()' WHERE ID_ENDERECO = {$dados["id"]}";
        
            $result = $conn->query($sql);
            if($result == true){
                $conn->close();
                return 1;
            }    else{
                $conn->close();
                return 0;
            }
        
        
        }
        function enderecoNew($dados){
            require "conexao.php";
            if ($dados['numero']=="0") {$dados['numero'] = null;};
            if ($dados['apto']=="0") {$dados['apto'] = null;};
            if ($dados['bloco']=="0") {$dados['bloco'] = null;};

            $sql = "INSERT INTO endereco (cep,estado,cidade,bairro,rua,bloco,apto,numero,id_cliente,datahora,nome,status) VALUES ('{$dados["cep"]}','{$dados["estado"]}','{$dados["cidade"]}','{$dados["bairro"]}', '{$dados["rua"]}','{$dados["bloco"]}', '{$dados["apto"]}', '{$dados["numero"]}', '{$dados["cliente"]}', now(),'{$dados["nome"]}', '1')";
        
            $result = $conn->query($sql);
            if($result == true){
                $conn->close();
                return 1;
            }    else{
                $conn->close();
                return 0;
            }
        
        
        }

        function enderecoDelete($id){
            require "conexao.php";
            

            $sql = "UPDATE endereco SET status = '0' WHERE ID_ENDERECO = '$id'";
        
            $result = $conn->query($sql);
            if($result == true){
                $conn->close();
                return 1;
            }    else{
                $conn->close();
                return 0;
            }
        
        
        }










        


        function historico($id){
            require "conexao.php";
            $sql = "SELECT * FROM pedidos WHERE id_cliente='$id'";
            $result=$conn->query($sql); 
       
           if($result->num_rows > 0){
       
               $num = $result ->num_rows;
               $dados=array();
               $dados["result"] = 1;
               $dados["num"]=$num;
               $i=0;
               while($row=$result->fetch_assoc()){
                   $dados[$i]["id"] =          $row["ID_PEDIDO"];
                   $dados[$i]["id_cliente"] =  $row["id_cliente"];
                   $dados[$i]["id_endereco"] =         $row["id_endereco"];
                   $dados[$i]["valor"] =      $row["valor"];
                   $dados[$i]["pagamento"] =      $row["pagamento"];
                   $dados[$i]["status"] =      $row["status"];
                        if ($row['status']=="1"){ $dados[$i]["status"] = "Aguardando Pagamento";};
                        if ($row['status']=="2"){ $dados[$i]["status"] = "Em Processamento";};
                        if ($row['status']=="3"){ $dados[$i]["status"] = "Em rota de entrega";};
                        if ($row['status']=="4"){ $dados[$i]["status"] = "Recebido";}
                        if ($row['status']=="5"){ $dados[$i]["status"] = "Aguardando Devolução";}
                        if ($row['status']=="6"){ $dados[$i]["status"] = "Valor Estornado";}
                        if ($row['status']=="7"){ $dados[$i]["status"] = "Recebido";}
                        if ($row['status']=="8"){ $dados[$i]["status"] = "Cancelado";}
                        if ($row['status']=="9"){ $dados[$i]["status"] = "Tentativa de entrega feita";}


                   $dados[$i]["datahora"] =      $row["datahora"];
            
                $i++;
               }
               $conn->close();
               return $dados;
           }else{
               $dados["result"] = 0;
                   $conn->close();
                   return $dados;
               }
               }


               function itens($pedido) {
                require "conexao.php";
            $sql = "SELECT * FROM itens WHERE id_pedido='$pedido'";
            $result=$conn->query($sql); 
       
           if($result->num_rows > 0){
       
               $num = $result ->num_rows;
               $dados=array();
               $dados["result"] = 1;
               $dados["num"]=$num;
               $i=0;
               while($row=$result->fetch_assoc()){
                   $dados[$i]["id"] =          $row["ID_ITENS"];
                   $dados[$i]["id_produto"] =  $row["id_produto"];
                   $dados[$i]["nome"] =       $row["nome"];
                   $dados[$i]["quantidade"] =   $row["quantidade"];
                   $dados[$i]["valor_uni"] =      $row["valor_uni"];
                   $dados[$i]["valor_total"] =      $row["valor_total"];
                   $dados[$i]["datahora"] =    $row["datahora"];
               
                $i++;
               }
               $conn->close();
               return $dados;
           }else{
               $dados["result"] = 0;
                   $conn->close();
                   return $dados;
               }
            }

            function imgProduto($id) {
                require "conexao.php";
            $sql = "SELECT img FROM produtos WHERE ID_PRODUTO='$id'";
            $result=$conn->query($sql); 
       
           if($result->num_rows > 0){
       
               $num = $result ->num_rows;
               $dados=array();
               $dados["result"] = 1;
               $dados["num"]=$num;
               
               while($row=$result->fetch_assoc()){
                   $dados["img"] =    $row["img"];
               }
               $conn->close();
               return $dados;
           }else{
               $dados["result"] = 0;
                   $conn->close();
                   return $dados;
               }
            }
        
        
function verif_celular($cel){
    
 require "conexao.php";
 $sql="SELECT cpf FROM cliente WHERE celular = '$cel'";
 $result = $conn -> query($sql);
 if($result->num_rows>0){
     $conn->close();
     $dados["result"] = 1;
     while($row=$result->fetch_assoc()){
        $dados["cpf"] =    $row["cpf"];
    }
     return $dados;
 }    else{
     $conn->close();
     $dados["result"] = 0;
     return $dados;
 }

}


function codigo($codigo){ //função pra criar adm
    require "conexao.php";
   
    $sql="INSERT INTO cod_temp (codigo) VALUES ('$codigo')";
   $result = $conn -> query($sql);

   
   if($result==true){

    $dados["result"] = "1";
    $conn->close();
       return $dados;
   }    else{
       $conn->close();
       $dados["result"] = "0";
       return $dados;
   }


} 

function id_cod($codigo){
    require "conexao.php";
    $sql="SELECT * FROM cod_temp WHERE codigo = '$codigo'";
    $result = $conn -> query($sql); 

    while($row=$result->fetch_assoc()){
        $dados["id"] = $row["ID_COD"];
      
    }
    $conn->close();
    $dados["result"] = "1";
    return $dados;
}

function verificar_cod($dados){
    require "conexao.php";
   
    $sql="SELECT * FROM cod_temp WHERE ID_COD = '{$dados['id']}' AND codigo = '{$dados['cod']}' ";
   $result = $conn -> query($sql);

 
   if($result->num_rows>0){

    $dados["result"] = "1";
    $conn->close();
       return $dados;
   }    else{
       $conn->close();
       $dados["result"] = "0";
       return $dados;
   }


} 
        


function alteraSenha($dados){ //função pro form de editar menu
    require "conexao.php";
   
    $sql = "UPDATE cliente SET senha = '{$dados['senha']}' WHERE cpf = '{$dados['cpf']}'";

   $result = $conn->query($sql);
    if($result==true){
        $dados["result"] = 1;
$conn->close(); 
return $dados;
}else{
        $dados["result"] = 0;
        $conn->close();    
        return $dados;
}
}


function dadosUser($id){
    require 'conexao.php';
    $sql = "SELECT * FROM cliente WHERE ID_CLIENTE='$id'";
 $result=$conn->query($sql); 

 if($result->num_rows > 0){
     $dados=array();
     $dados["result"] = 1;
     while($row=$result->fetch_assoc()){
        $dados["id"] = $row["ID_CLIENTE"];
        $dados["nome"] = $row["nome"];
        $dados["email"] = $row["email"];
        $dados["cpf"] = $row["cpf"];
        $dados["cel"] = $row["celular"];
     }
     $conn->close();
     return $dados;
 
 

}}


function quantidade_op($dados){
    require "conexao.php";
   
    $sql = "UPDATE carrinho SET quantidade = '{$dados['quant']}' WHERE ID_CARRINHO = '{$dados['id']}'";

   $result = $conn->query($sql);
    if($result==true){
        $dados["result"] = 1;
$conn->close(); 
return $dados;
}else{
        $dados["result"] = 0;
        $conn->close();    
        return $dados;
}
}

function  excluir_prod($dados){
    require "conexao.php";
   
    $sql = "DELETE FROM carrinho WHERE ID_CARRINHO = '{$dados['id']}'";

   $result = $conn->query($sql);
    if($result==true){
        $dados["result"] = 1;
$conn->close(); 
return $dados;
}else{
        $dados["result"] = 0;
        $conn->close();    
        return $dados;
}
}

function produtos($pesquisa, $ordem){
    require "conexao.php";

    $sql = "";
    if($pesquisa != "" && $ordem !="")
    {
        $termo= $pesquisa;
        $sql = "SELECT * FROM produtos WHERE nome LIKE '%$termo%' ORDER BY valor_uni $ordem;";
    }
    if($pesquisa != "" && $ordem =="")
    {
        $termo= $pesquisa;
        $sql = "SELECT * FROM produtos WHERE nome LIKE '%$termo%'";
    }
    if($pesquisa == "" && $ordem !="")
    {
        $termo= $pesquisa;
        $sql = "SELECT * FROM produtos ORDER BY valor_uni $ordem;";
    }
    if($pesquisa == "" && $ordem =="")
    {
        $termo= $pesquisa;        
     $sql = "SELECT * FROM produtos";
    }
   
    $result=$conn->query($sql); 
       
    if($result->num_rows > 0){

        $num = $result ->num_rows;
        $dados=array();
        $dados["result"] = 1;
        $dados["num"]=$num;
        $i=0;
        while($row=$result->fetch_assoc()){
            $dados[$i]["id"] =          $row["ID_PRODUTO"];
            $dados[$i]["nome"] =  $row["nome"];
            $dados[$i]["descricao"] =       $row["descricao"];
            $dados[$i]["img"] =   $row["img"];
            $dados[$i]["img_sec"] =      $row["img_sec"];
            $dados[$i]["instrucao"] =    $row["instrucao"];
            $dados[$i]["estoque"] =    $row["estoque"];
            $dados[$i]["valor_uni"] =    $row["valor_uni"];
            $dados[$i]["ingredientes"] =    $row["ingredientes"];
            $dados[$i]["datahora"] =    $row["datahora"];
            $dados[$i]["status"] =    $row["status"];
        
         $i++;
        }
        $conn->close();
        return $dados;
    }else{
        $dados["result"] = 0;
            $conn->close();
            return $dados;
        }
        echo $sql;
     }




     
     function adicionar_prod($dados){
        require "conexao.php";
        $sql = "INSERT INTO carrinho (id_cliente, id_produto, nome_produto, quantidade, preco) VALUES ('{$dados["cliente"]}', '{$dados["produto"]}', '{$dados["nome"]}', '{$dados["qnt"]}','{$dados["preco"]}');";
        $result=$conn->query($sql); 
        if($result==true){
            $dados["result"] = 1;
    $conn->close(); 
    return $dados;
    }else{
            $dados["result"] = 0;
            $conn->close();    
            return $dados;
    }
    
    
    }


    function pega_produto($id){
        require 'conexao.php';
        $sql = "SELECT * FROM produtos WHERE ID_PRODUTO='$id'";
     $result=$conn->query($sql); 
    
     if($result->num_rows > 0){
         $dados=array();
         $dados["result"] = 1;
         while($row=$result->fetch_assoc()){
            $dados["id"] = $row["ID_PRODUTO"];
            $dados["nome"] = $row["nome"];
            $dados["descricao"] = $row["descricao"];
            $dados["img"] = $row["img"];
            $dados["img"] = $row["img_sec"];
            $dados["instrucao"] = $row["instrucao"];
            $dados["estoque"] = $row["estoque"];
            $dados["valor_uni"] = $row["valor_uni"];
            $dados["ingredientes"] = $row["ingredientes"];
            $dados["status"] = $row["status"];
            $dados["datahora"] = $row["datahora"];
         }
         $conn->close();
         return $dados;
     
     
    
    }}
    

    function find_pedido($data){
        require 'conexao.php';
        $sql2 = "SELECT * FROM pedidos WHERE id_cliente= '6' ORDER BY ID_PEDIDO DESC limit 1";
     $result2=$conn->query($sql2); 
    
     if($result2->num_rows > 0){
         $dados4=array();
         $dados4["result"] = 1;
         while($row2=$result2->fetch_assoc()){
            $dados4["id"] = $row2["ID_PEDIDO"];
        }}
            
         return $dados4;
        
    }


    function efetuar_pedidos($dados){
        require "conexao.php";
        $sql = "INSERT INTO pedidos (id_cliente, id_endereco, valor, pagamento, datahora, status) VALUES ('{$dados["cliente"]}', '{$dados["endereco"]}', '{$dados["valor"]}', '{$dados["payway"]}', NOW(), '1');";
        $result=$conn->query($sql); 
        if($result==true){
            $dados["result"] = 1;

                $id = find_pedido($dados["cliente"]);
                transfer_itens($id["id"], $dados["cliente"]);

    $conn->close(); 
    return $dados;
    }else{
            $dados["result"] = 0;
            $conn->close();    
            return $dados;
    }
    

    }




    function transfer_itens($id_pedido, $id_cliente){
    require "conexao.php";

    $sql = "SELECT * FROM carrinho WHERE id_cliente='$id_cliente'";
    
    $result=$conn->query($sql); 
        $dados=array();
        $dados["result"] = 1;
        $i=0;
        
        while($row=$result->fetch_assoc()){
            
            $dados[$i]["id"] =  $row["id_produto"];
            $dados[$i]["nome"] =  $row["nome_produto"];
            $dados[$i]["qtd"] =  $row["quantidade"];
            $dados[$i]["preco"] =  $row["preco"];
            $dados["num"]=$i;

$valortotal = $dados[$i]["preco"] * $dados[$i]["qtd"];


$sql_transfer = "INSERT INTO itens VALUES ('5','$id_pedido', '{$dados[$i]["id"]}', '{$dados[$i]["nome"]}' '{$dados[$i]["qtd"]}', '{$dados[$i]["preco"]}', '$valortotal', NOW());";

ECHO $sql_transfer;

$result_transfer = $conn->query($sql_transfer);
                
if (!$result_transfer) {
    echo "Erro na inserção: " . $conn->error;
} else {
    echo "Inserção bem-sucedida!";
}

$i++;
                }

    // $sql_delete = "DELETE FROM carrinho WHERE id_cliente = '$id_cliente'";
    // $result_delete = $conn->query($sql_delete);

    
$conn->close();}
        ?>
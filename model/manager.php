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
  $dados["img_hover"] = $row["img_hover"];
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
 $sql="INSERT INTO cliente (nome,email,senha,datahora,cpf) VALUES ('{$dados["nome"]}', '{$dados["email"]}', '{$dados["senha"]}', now(), '{$dados["cpf"]}')";
 $result = $conn -> query($sql);
 if($result == true){
     $conn->close();
     return 1;
 }    else{
     $conn->close();
     return 0;
 }

} 


function buscar_endereco($id){
    require "conexao.php";
    $sql = "SELECT * FROM endereco WHERE id_cliente='$id'";
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
            $conn->close();
            return $dados;
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

            $sql = "INSERT INTO endereco (cep,estado,cidade,bairro,rua,bloco,apto,numero,id_cliente,datahora,nome) VALUES ('{$dados["cep"]}','{$dados["estado"]}','{$dados["cidade"]}','{$dados["bairro"]}', '{$dados["rua"]}','{$dados["bloco"]}', '{$dados["apto"]}', '{$dados["numero"]}', '1', 'now()','{$dados["nome"]}')";
        
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
        ?>
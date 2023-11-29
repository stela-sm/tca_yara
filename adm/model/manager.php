<?php
//ADM-------------------------------------------------------------------------------------------------------------------------------------------------------------


function VerifDadosADM($email,$senha){ //função pra verificar senha e login do adm 
    require "conexao.php";
    $sql = "SELECT * FROM adm WHERE email='$email' AND senha='$senha' AND status=1";
    $result=$conn->query($sql); 

    if($result->num_rows > 0){
        $dados=array();
        $dados["result"] = 1;
        while($row=$result->fetch_assoc()){
            $dados["id"] = $row["ID_ADM"];
            $dados["nome"] = $row["nome"];
            $dados["email"] = $row["email"];            
            $dados["telefone"] = $row["celular"];
            $dados["datahora"] = $row["datahora"];
            $dados["poder"] = $row["poder"];
            $dados["status"] = $row["status"];
        }
        $conn->close();
        return $dados;
    }else{
        $dados["result"]=0;
        $conn->close();
        return $dados;
    }

}


function admNew($dados){ //função pra criar adm
    require "conexao.php";
    $query = "CALL CheckEmailCPF(' {$dados["email"]}',  '{$dados["cpf"]}', @result, @user_id)";
    $conn->query($query);

// Obtém o resultado da procedure
$resultQuery = $conn->query("SELECT @result as result");
$row = $resultQuery->fetch_assoc();
$result = $row['result'];

// Cria uma condição com base no resultado
if ($result != 0) {
    $conn->close();
        return 2;
    
} else {
    

    $sql="INSERT INTO adm (nome,email,senha,celular,cpf,datahora,poder,status) VALUES ('{$dados["nome"]}', '{$dados["email"]}', '{$dados["senha"]}','{$dados["telefone"]}', '{$dados["cpf"]}', now(), '{$dados["poder"]}', '{$dados["status"]}')";
    $result = $conn -> query($sql);
    if($result == true){
        $conn->close();
        return 1;
    }    else{
        $conn->close();
        return 0;
    }

} 
}





function admEdit($dados){
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

    $sql= "UPDATE adm SET nome = '{$dados['nome']}', email = '{$dados['email']}', poder = {$dados['poder']}, celular = {$dados['telefone']}, status = {$dados['status']},  datahora = now() WHERE ID_ADM = '{$dados['id']}'";

    $result = $conn->query($sql);
    return $result;
    $conn-> close();

}
}






function admAutoedit($dados){
   
    require "conexao.php";
   
            $sql= "UPDATE adm SET nome = '{$dados['nome']}', email = '{$dados['email']}', datahora = now() ,celular = '{$dados['telefone']}' WHERE ID_ADM = '{$dados['id']}'";

    $result = $conn->query($sql);
    return $result;
    $conn-> close();

} 





function admDelete($id){
    require "conexao.php";
    $sql="DELETE FROM adm WHERE ID_ADM = {$id}";
    $result = $conn -> query($sql);
    $conn->close();
    return $result;
}







function listaAdm($search){ //função pra listar adms 

    require "conexao.php";
    if($search["search"] != "" && $search["campo"] != "")
    {
        $termo= $search["search"];
        $sql = "SELECT * FROM adm WHERE {$search["campo"]} LIKE '%$termo%' ORDER BY ID_ADM DESC";
    }else{
        $sql = "SELECT * FROM adm ORDER BY ID_ADM DESC";
    }
    $result=$conn->query($sql); 

    if($result->num_rows > 0){
        $num = $result ->num_rows;
        $dados=array();
        $dados["result"] = 1;
        $dados["num"]=$num;
        $i=1;
        while($row=$result->fetch_assoc()){
            $dados[$i]["id"] = $row["ID_ADM"];
            $dados[$i]["nome"] = $row["nome"];
            $dados[$i]["email"] = $row["email"]; 
            $dados[$i]["cpf"] = $row["cpf"];            
            $dados[$i]["telefone"] = $row["celular"];
            $dados[$i]["datahora"] = $row["datahora"];
            $dados[$i]["poder"] = $row["poder"];
            $dados[$i]["status"] = $row["status"];
        $i++;
        }
        $conn->close();
        return $dados;
    }else{
        $dados["num"]=0;
        $dados["result"]=0;
        $conn->close();
        return $dados;
    }

}




//PRODUTOS -------------------------------------------------------------------------------------------------------------------------------------------------------

function listaProdutos($search){ //função pra listar adms 
    require "conexao.php";
    if($search["search"] != "" && $search["campo"] != "")
    {
        $termo= $search["search"];
        $sql = "SELECT * FROM produtos WHERE {$search["campo"]} LIKE '%$termo%' ORDER BY ID_PRODUTO DESC";
    }else{
        $sql = "SELECT * FROM produtos ORDER BY ID_PRODUTO DESC";
    }
    $result=$conn->query($sql); 

    if($result->num_rows > 0){
        $num = $result ->num_rows;
        $dados=array();
        $dados["result"] = 1;
        $dados["num"]=$num;
        $i=1;
        while($row=$result->fetch_assoc()){
            $dados[$i]["id"] = $row["ID_PRODUTO"];
            $dados[$i]["nome"] = $row["nome"];
            $dados[$i]["descricao"] = $row["descricao"];            
            $dados[$i]["img"] = $row["img"];
            $dados[$i]["img_sec"] = $row["img_sec"];
            $dados[$i]["instrucao"] = $row["instrucao"];
            $dados[$i]["estoque"] = $row["estoque"];
            $dados[$i]["valor"] = $row["valor_uni"];            
            $dados[$i]["ingredientes"] = $row["ingredientes"];
           
            $dados[$i]["status"] = $row["status"];
            $dados[$i]["datahora"] = $row["datahora"];
        $i++;
        }
        $conn->close();
        return $dados;
    }else{
        $dados["num"]=0;
        $dados["result"]=0;
        $conn->close();
        return $dados;
    }

}


function produtoNew($dados) {
    require "conexao.php";

    $sql = "INSERT INTO produtos (nome, ingredientes, valor_uni, descricao, instrucao, estoque, status, datahora, img, img_sec) VALUES ('{$dados["nome"]}', '{$dados["ingredientes"]}', '{$dados["preco"]}', '{$dados["descricao"]}', '{$dados["instrucao"]}', '{$dados["estoque"]}', '{$dados["status"]}', NOW(), '{$dados["img"]}', '{$dados["img_sec"]}');";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        $dados["result"] = 1;
        $conn->close();
        return $dados;
    } else {
        $conn->close();
        $dados["result"] = 0;
        return $dados;
    }
}





function produtoEdit($dados){
    require "conexao.php";
   
            $sql= "UPDATE produtos SET nome = '{$dados['nome']}',   valor_uni = {$dados['preco']}, estoque = {$dados['estoque']}, datahora = now(), status = {$dados['status']}   WHERE ID_PRODUTO = '{$dados['id']}'";

    $result = $conn->query($sql);
    return $result;
    $conn-> close();

}




function vitrineEdit($dados){
    require "conexao.php";
   
            $sql= "UPDATE produtos SET nome = '{$dados['nome']}', descricao = '{$dados['descricao']}', ingredientes = '{$dados['ingredientes']}', instrucao = '{$dados['instrucao']}', datahora = now(), status = '{$dados['status']} '  WHERE ID_PRODUTO = '{$dados['id']}'";

    $result = $conn->query($sql);
    return $result;
    $conn-> close();

}

function img($dados){
    require "conexao.php";
   
    $sql= "UPDATE produtos SET img = '{$dados['img']}' WHERE ID_PRODUTO = '{$dados['id']}'";
    $result = $conn->query($sql);
    return $result;
    $conn-> close();

}





function img_sec($dados){
    require "conexao.php";
   
    $sql= "UPDATE produtos SET img_sec = '{$dados['img_sec']}' WHERE ID_PRODUTO = '{$dados['id']}'";
    $result = $conn->query($sql);
    return $result;
    $conn-> close();
}


function produtoDelete($id){
    require "conexao.php";
    $sql= "UPDATE produtos SET status = '0' WHERE ID_PRODUTO = '$id'";
    $result = $conn -> query($sql);
    $conn->close();
    return $result;
}


















//PEDIDOS -------------------------------------------------------------------------------------------------------------------------------------------------------

function buscar($termo){
    require "conexao.php";
    $sql = "SELECT ID_ENDERECO FROM endereco WHERE rua LIKE '%$termo%';";
    $result=$conn->query($sql); 
    if($result->num_rows > 0){
        $dados=array();
        $dados["result"] = 1;
        while($row=$result->fetch_assoc()){
           
    $dados["id"] = $row["ID_ENDERECO"];
        }
    return $dados;
    $conn-> close();
}else{
    $dados2["id"] = "";
    return $dados2;
    $conn-> close();
    }



}


function buscar_cliente($termo){
    require "conexao.php";
    $sql = "SELECT ID_CLIENTE FROM cliente WHERE nome LIKE '%$termo%';";
    $result=$conn->query($sql); 
    if($result->num_rows > 0){
        $dados=array();
        $dados["result"] = 1;
        while($row=$result->fetch_assoc()){   
    $dados["id"] = $row["ID_CLIENTE"];
        }
    return $dados;
    $conn-> close();
}else{
    
    $dados2["result"] = 0;
    $dados2["id"] = "";
    return $dados2;
    $conn-> close();
    }



}


function buscar_itens($termo){
    require "conexao.php";
    
    $sql = "SELECT id_pedido FROM itens WHERE nome LIKE '%$termo%';";
    $result=$conn->query($sql); 

    if($result->num_rows > 0){
        $num = $result ->num_rows;
        $dados=array();
        $dados["result"] = 1;
        $dados["num"]=$num;
        $i=1;
        while($row=$result->fetch_assoc()){
            $dados[$i]["id"] = $row["id_pedido"];

        $i++;
        }
        $conn->close();
        return $dados;
    }else{
        $dados["num"]=0;
        $dados["result"]=0;
        $conn->close();
        return $dados;
    }

}
   


function listaPedidos($search){ //função pra listar adms 
    require "conexao.php";
    if($search["search"] != "" && $search["campo"] != "")
    {
     
        if($search["campo"] == "itens"){
            $busca = buscar_itens($search["search"]);   
            if ($busca["result"]=="0"){$search["search"]="0";$search["campo"]="ID_PEDIDO";}else{
           $id = $busca[1]["id"];        
        $sql = "SELECT * FROM pedidos WHERE id_pedido = '{$id}' ORDER BY ID_PEDIDO DESC";}
            
        }else
        if($search["campo"] == "id_endereco"){
            $busca = buscar($search["search"]);
            $search["search"] = $busca["id"];
        } else
        if($search["campo"] == "id_cliente"){
            $busca = buscar_cliente($search["search"]);
            $search["search"] = $busca["id"];
            
        } 
        $termo= $search["search"];
        if($search["search"] == ""){ $termo = "0"; };


        if($search["campo"] != "itens"){
        $sql = "SELECT * FROM pedidos WHERE {$search["campo"]} LIKE '%$termo%' ORDER BY ID_PEDIDO DESC";
        }
    }else{
        $sql = "SELECT * FROM pedidos ORDER BY ID_PEDIDO DESC";
    }
    $result=$conn->query($sql); 

    if($result->num_rows > 0){

        $num = $result ->num_rows;
        $dados=array();
        $dados["result"] = 1;
        $dados["num"]=$num;
        $i=1;
        while($row=$result->fetch_assoc()){
            $dados[$i]["id"] = $row["ID_PEDIDO"];
            $dados[$i]["cliente"] = $row["id_cliente"];
            $dados[$i]["endereco"] = $row["id_endereco"];            
            $dados[$i]["valor"] = $row["valor"];
            $dados[$i]["pagamento"] = $row["pagamento"];
            $dados[$i]["status"] = $row["status"];
            $dados[$i]["datahora"] = $row["datahora"];

            $sql2 = "SELECT nome FROM cliente WHERE ID_CLIENTE = {$row["id_cliente"]}; ";
            $result2=$conn->query($sql2);
            $row2 = $result2->fetch_assoc(); 
            $dados[$i]["cliente"] = $row2['nome'] ;
            
            $sql3 = "SELECT rua FROM endereco WHERE ID_ENDERECO = {$row["id_endereco"]}; ";
            $result3=$conn->query($sql3);         
            $row3 = $result3->fetch_assoc(); 
            $dados[$i]["endereco"] = $row3['rua'] ;
            

        $i++;
        }
        $conn->close();
        $dados["sql"]=$sql;
        return $dados;
    }else{
        $dados["num"]=0;
        $dados["result"]=0;
        $conn->close();
        return $dados;
    }

}

function pedidosEdit($dados){
    require "conexao.php";
   
            $sql= "UPDATE pedidos SET  status = {$dados['status']},  datahora = now() WHERE ID_PEDIDO = '{$dados['id']}'";

    $result = $conn->query($sql);
    return $result;
    $conn-> close();

}


function listaItens($pedido){ 
    require "conexao.php";

    $sql = "SELECT * FROM itens WHERE id_pedido = {$pedido}";
    $result=$conn->query($sql); 

  

    if($result->num_rows > 0){
        $dados=array();
        $dados["result"] = 1;
        $i=1;
        while($row=$result->fetch_assoc()){
            $dados[$i]["id_itens"] = $row["ID_ITENS"];
            $dados[$i]["id_pedido"] = $row["id_pedido"];
            $dados[$i]["id_produto"] = $row["id_produto"];            
            $dados[$i]["valor"] = $row["valor_uni"];
            $dados[$i]["valor_total"] = $row["valor_total"];
            $dados[$i]["datahora"] = $row["datahora"];

            $sql2 = "SELECT nome FROM produtos WHERE ID_PRODUTO = {$row["id_produto"]}; ";
            $result2=$conn->query($sql2);
            $row2 = $result2->fetch_assoc(); 
            $dados[$i]["itens"] = $row2['nome'] ;
            $dados["num2"]=$i;  

               
            $i++;
        }
        
        $conn->close();
        return $dados;
    }else{
        $dados["num"]=0;
        $dados["result"]=0;
        $conn->close();
        return $dados;
    }

}






//PAINEL----------------------------------------------------------------

function dataPeriod($dados){
    require "conexao.php";
    $sql = "SELECT * FROM pedidos WHERE datahora BETWEEN '{$dados['inicio']}' AND '{$dados['fim']}'";
    $result = $conn->query($sql);
   
    if($result->num_rows > 0){
        $num = $result ->num_rows;
        $dados=array();
        $dados["result"] = 1;
        $dados["num"]=$num;
        $conn->close();
        return $dados;
    }else{
        $dados["result"]=0;
        $dados["num"]=0;
        $conn->close();
        return $dados;
    }

}

function dataFaturamento($dados){
    require "conexao.php";
    $sql= "SELECT SUM(valor) as total FROM pedidos WHERE datahora BETWEEN '{$dados['inicio']}' AND '{$dados['fim']}';";

    $result = $conn->query($sql);
   
    if($result->num_rows > 0){
        $num = $result ->num_rows;
        $dados=array();
        $dados["result"] = 1;
        $linha = mysqli_fetch_assoc($result);
        $dados["num"]=$linha["total"];
        $conn->close();
        return $dados;
    }else{
        $dados["result"]=0;
        $dados["num"]='0.00';
        $conn->close();
        return $dados;
    }

}


function dataClientes($dados){
    require "conexao.php";
    $sql = "SELECT * FROM cliente WHERE datahora BETWEEN '{$dados['inicio']}' AND '{$dados['fim']}';";

    $result = $conn->query($sql);
   
    if($result->num_rows > 0){
        $num = $result ->num_rows;
        $dados=array();
        $dados["result"] = 1;
        $dados["num"]=$num;
        $conn->close();
        return $dados;
    }else{
        $dados["result"]=0;
        $dados["num"]=0;
        $conn->close();
        return $dados;
    }

}





//CLIENTES-------------------------------------------------------------------------------------------------------------------------------------------------------------------



function listaClientes($search){
    require "conexao.php";
    if($search["search"] != "" && $search["campo"] != "")
    {
        $termo= $search["search"];
        $sql = "SELECT * FROM cliente WHERE {$search["campo"]} LIKE '%$termo%' ORDER BY ID_CLIENTE DESC";
    }else{
        $sql = "SELECT * FROM cliente ORDER BY ID_CLIENTE DESC";
    }
    
    $result=$conn->query($sql); 

    if($result->num_rows > 0){
        $num = $result ->num_rows;
        $dados=array();
        $i=1;
        while($row=$result->fetch_assoc()){
            $dados[$i]["id"] = $row["ID_CLIENTE"];
            $dados[$i]["nome"] = $row["nome"];
            $dados[$i]["email"] = $row["email"];
            $dados[$i]["telefone"] = $row["celular"];            
            $dados[$i]["telefone"] = $row["celular"];
            $dados[$i]["datahora"] = $row["datahora"];
            $dados[$i]["cpf"] = $row["cpf"];
            $dados[$i]["status"] = $row["status"];
        $i++;
        }
        $dados["result"] = 1;
        $dados["num"]=$num;
        $conn->close();
        return $dados;
    }else{
        $dados["result"]=0;
        $dados["num"]=0;
        $conn->close();
        return $dados;
    }

}



function clienteNew($dados){ //função pra criar adm
     require "conexao.php";
    $query = "CALL CheckEmailCPFCliente(' {$dados["email"]}',  '{$dados["cpf"]}', @result, @user_id)";
    $conn->query($query);

// Obtém o resultado da procedure
$resultQuery = $conn->query("SELECT @result as result");
$row = $resultQuery->fetch_assoc();
$result = $row['result'];

// Cria uma condição com base no resultado
if ($result != 0) {
    $conn->close();
        return 2;
    
} else {
    
     $sql="INSERT INTO cliente (nome,email,senha,celular,datahora,cpf,status) VALUES ('{$dados["nome"]}', '{$dados["email"]}', '{$dados["senha"]}','{$dados["telefone"]}', now(), '{$dados["cpf"]}', '{$dados["status"]}')";
    $result = $conn -> query($sql);
    if($result == true){
        $conn->close();
        return 1;
    }    else{
        $conn->close();
        return 0;
    }


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
   
            $sql= "UPDATE cliente SET nome = '{$dados['nome']}', email = '{$dados['email']}', cpf = {$dados['cpf']}, celular = {$dados['telefone']}, status = {$dados['status']},  datahora = now() WHERE ID_CLIENTE = '{$dados['id']}'";

    $result = $conn->query($sql);
    if($result == true){
        $conn->close();
        return 1;
    }    else{
        $conn->close();
        return 0;
    }


}}



//trocar senha ------------------------




function verificarCPF($dados){ //função pro form de editar menu
    require "conexao.php";
    $sql = "SELECT * FROM adm WHERE cpf = {$dados["cpf"]}";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $dados["result"] = 1;
while($row=$result->fetch_assoc()){
    
    $dados["nome"] = $row["nome"];
    $dados["celular"] = $row["celular"];
  
};
$conn->close(); 
return $dados;
}else{
        $dados["result"] = 0;
        $conn->close();    
        return $dados;
}}

function alteraSenha($dados){ //função pro form de editar menu
    require "conexao.php";
    if ($dados["tabela"]=="adm"){
    $sql = "UPDATE adm SET senha = '{$dados["senha"]}' WHERE cpf = '{$dados["cpf"]}'";
    }else{
    $sql = "UPDATE cliente SET senha = '{$dados["senha"]}' WHERE cpf = '{$dados["cpf"]}'";

    }$result = $conn->query($sql);
    if($result==true){
        $dados["result"] = 1;
$conn->close(); 
return $dados;
}else{
        $dados["result"] = 0;
        $conn->close();    
        return $dados;
}}





function listaEnderecos($search){
    require "conexao.php";
    if($search["search"] != "" && $search["campo"] != "")
    { 
         
            if($search["campo"] == "cliente"){

                $busca = buscar_cliente($search["search"]);  

                                if ($busca["result"]=="0"){$termo="0";$search["campo"]="id_cliente";  $sql = "SELECT * FROM endereco WHERE {$search["campo"]} LIKE '%$termo%' ORDER BY ID_ENDERECO DESC";}
                                else{$id = $busca["id"]; $sql = "SELECT * FROM endereco WHERE id_cliente = '{$id}' ORDER BY ID_ENDERECO DESC";}}
                else 
                if($search["campo"] != "cliente"){            
        $termo= $search["search"];
        $sql = "SELECT * FROM endereco WHERE {$search["campo"]} LIKE '%$termo%' ORDER BY ID_ENDERECO DESC";}

}else{
        $sql = "SELECT * FROM endereco ORDER BY ID_ENDERECO DESC";
    }
    
    $result=$conn->query($sql); 

    if($result->num_rows > 0){
        $num = $result ->num_rows;
        $dados=array();
        $i=1;
        while($row=$result->fetch_assoc()){
            $dados[$i]["id"] = $row["ID_ENDERECO"];
            $dados[$i]["cliente"] = $row["id_cliente"];
            $dados[$i]["cep"] = $row["cep"];
            $dados[$i]["estado"] = $row["estado"];            
            $dados[$i]["cidade"] = $row["cidade"];
            $dados[$i]["bairro"] = $row["bairro"];
            $dados[$i]["rua"] = $row["rua"];
            $dados[$i]["bloco"] = $row["bloco"];
            $dados[$i]["apto"] = $row["apto"];
            $dados[$i]["datahora"] = $row["datahora"];
        $i++;
        }
        $dados["result"] = 1;
        $dados["num"]=$num;
        $conn->close();
        return $dados;
    }else{
        $dados["result"]=0;
        $dados["num"]=0;
        $conn->close();
        return $dados;
    }

}

function nomeCliente($id){

    require "conexao.php";
 
        $sql = "SELECT * FROM cliente WHERE ID_CLIENTE = {$id} ";
  
    
    $result=$conn->query($sql); 

    if($result->num_rows > 0){
        $num = $result ->num_rows;
        $dados=array();
        while($row=$result->fetch_assoc()){
            $dados["nome"] = $row["nome"];
          
        }
        $dados["result"] = 1;
        $dados["num"]=$num;
        $conn->close();
        return $dados;
    }else{
        $dados["result"]=0;
        $dados["num"]=0;
        $conn->close();
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

   if($result->num_rows > 0){
     $dados["result"] = "1";
    $conn->close();
       return $dados;
   }    else{
       $conn->close();
       $dados["result"] = "0";
       return $dados;
   }


} 


/*senhas ----------------- */

function verif_celular($cel){
    
    require "conexao.php";
    $sql="SELECT cpf FROM adm WHERE celular = '$cel'";
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
   
   
   
   
   function dadosUser($id){
       require 'conexao.php';
       $sql = "SELECT * FROM adm WHERE ID_ADM='$id'";
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
   
?>
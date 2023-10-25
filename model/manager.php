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
            $query = "CALL VerificarEndereco(' {$dados["cep"]}',  '{$dados["cliente"]}', @result)";
            $conn->query($query);
        
        // Obtém o resultado da procedure
        $resultQuery = $conn->query("SELECT @result as result");
        $row = $resultQuery->fetch_assoc();
        $result = $row['result'];
        
        // Cria uma condição com base no resultado
        if ($result == 0) {
            $conn->close();
                return 2;
            
        } else {
           
            $sql = "UPDATE endereco SET cep = '{$dados["cep"]}', estado = '{$dados["estado"]}', cidade = '{$dados["cidade"]}', 
            bairro = '{$dados["bairro"]}', rua = '{$dados["rua"]}', bloco = '{$dados["bloco"]}', apto = '{$dados["apto"]}',numero = '{$dados["numero"]}', datahora = 'now()' WHERE ID_ENDERECO = {$dados["id"]}";
        
            $result = $conn->query($sql);
            if($result == true){
                $conn->close();
                return 1;
            }    else{
                $conn->close();
                return 0;
            }
        
        
        }}
        
        ?>
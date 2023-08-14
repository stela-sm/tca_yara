<?php
//ADM-------------------------------------------------------------------------------------------------------------------------------------------------------------


function VerifDadosADM($email,$senha){ //função pra verificar senha e login do adm 
    require "Conexao.php";
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
    require "Conexao.php";
    $sql="INSERT INTO adm (nome,email,senha,celular,datahora,poder,status) VALUES ('{$dados["nome"]}', '{$dados["email"]}', '{$dados["senha"]}','{$dados["telefone"]}', now(), '{$dados["poder"]}', '{$dados["status"]}')";
    $result = $conn -> query($sql);
    if($result == true){
        $conn->close();
        return 1;
    }    else{
        $conn->close();
        return 0;
    }

} 


function admEdit($dados){
    require_once "Conexao.php";
   
            $sql= "UPDATE adm SET nome = '{$dados['nome']}', email = '{$dados['email']}', poder = {$dados['poder']}, status = {$dados['status']},  datahora = now() WHERE ID_ADM = '{$dados['id']}'";

    $result = $conn->query($sql);
    return $result;
    $conn-> close();

}

function admDelete($id){
    require_once "Conexao.php";
    $sql="DELETE FROM adm WHERE ID_ADM = {$id}";
    $result = $conn -> query($sql);
    $conn->close();
    return $result;
}

function listaAdm(){ //função pra listar adms 
    require "conexao.php";
    $sql = "SELECT * FROM adm";
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




//PODUTOS -------------------------------------------------------------------------------------------------------------------------------------------------------

function listaProdutos(){ //função pra listar adms 
    require "conexao.php";
    $sql = "SELECT * FROM produtos";
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
            $dados[$i]["img_hover"] = $row["img_hover"];
            $dados[$i]["categoria"] = $row["categoria"];
            $dados[$i]["finalidade"] = $row["finalidade"];
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



function produtoNew($dados){
    require_once "conexao.php";
    $sql = "INSERT INTO produtos (nome,ingredientes,valor_uni,descricao,categoria,finalidade,estoque,status,datahora,img,img_hover) VALUES ('{$dados["nome"]}','{$dados["ingredientes"]}','{$dados["preco"]}','{$dados["descricao"]}','{$dados["categoria"]}','{$dados["finalidade"]}','  {$dados["estoque"]}','{$dados["status"]}',now(),'{$dados["img"]}','{$dados["img_hover"]}');";
   
   
    $result = $conn -> query($sql);

    if($result==true){
        $dados["result"]=1;
        $conn->close();
         return $dados;
}else{
$conn->close();
$dados["result"]=0;
return $dados;

}   
}




function produtoEdit($dados){
    require_once "Conexao.php";
   
            $sql= "UPDATE produtos SET nome = '{$dados['nome']}', categoria = '{$dados['categoria']}', finalidade = {$dados['finalidade']}, valor_uni = {$dados['preco']}, estoque = {$dados['estoque']}, datahora = now(), status = {$dados['status']}   WHERE ID_PRODUTO = '{$dados['id']}'";

    $result = $conn->query($sql);
    return $result;
    $conn-> close();

}




function vitrineEdit($dados){
    require_once "Conexao.php";
   
            $sql= "UPDATE produtos SET nome = '{$dados['nome']}', descricao = '{$dados['descricao']}', ingredientes = '{$dados['ingredientes']}',img = '{$dados['img']}', img_hover = '{$dados['img_hover']}', datahora = now(), status = '{$dados['status']} '  WHERE ID_PRODUTO = '{$dados['id']}'";

    $result = $conn->query($sql);
    return $result;
    $conn-> close();

}



function produtoDelete($id){
    require_once "Conexao.php";
    $sql="DELETE FROM produtos WHERE ID_PRODUTO = {$id}";
    $result = $conn -> query($sql);
    $conn->close();
    return $result;
}
?>
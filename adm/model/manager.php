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
    require "conexao.php";
   
            $sql= "UPDATE adm SET nome = '{$dados['nome']}', email = '{$dados['email']}', poder = {$dados['poder']}, status = {$dados['status']},  datahora = now() WHERE ID_ADM = '{$dados['id']}'";

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
    require "conexao.php";
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
    require "conexao.php";
   
            $sql= "UPDATE produtos SET nome = '{$dados['nome']}', categoria = '{$dados['categoria']}', finalidade = {$dados['finalidade']}, valor_uni = {$dados['preco']}, estoque = {$dados['estoque']}, datahora = now(), status = {$dados['status']}   WHERE ID_PRODUTO = '{$dados['id']}'";

    $result = $conn->query($sql);
    return $result;
    $conn-> close();

}




function vitrineEdit($dados){
    require "conexao.php";
   
            $sql= "UPDATE produtos SET nome = '{$dados['nome']}', descricao = '{$dados['descricao']}', ingredientes = '{$dados['ingredientes']}', datahora = now(), status = '{$dados['status']} '  WHERE ID_PRODUTO = '{$dados['id']}'";

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


function img_hover($dados){
    require "conexao.php";
   
    $sql= "UPDATE produtos SET img_hover = '{$dados['img_hover']}' WHERE ID_PRODUTO = '{$dados['id']}'";
    $result = $conn->query($sql);
    return $result;
    $conn-> close();
}

function produtoDelete($id){
    require "conexao.php";
    $sql="DELETE FROM produtos WHERE ID_PRODUTO = {$id}";
    $result = $conn -> query($sql);
    $conn->close();
    return $result;
}


















//PEDIDOS -------------------------------------------------------------------------------------------------------------------------------------------------------

function listaPedidos(){ //função pra listar adms 
    require "conexao.php";
    $sql = "SELECT * FROM pedidos";
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
            $dados[$i]["endereco"] = $row["endereco"];            
            $dados[$i]["valor"] = $row["valor"];
            $dados[$i]["pagamento"] = $row["pagamento"];
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


function listaItens(){ //função pra listar adms 
    require "conexao.php";
    $sql = "SELECT * FROM pedidos";
    $result=$conn->query($sql); 

    if($result->num_rows > 0){
        $num = $result ->num_rows;
        $dados=array();
        $dados["result"] = 1;
        $dados["num"]=$num;
        $i=1;
        while($row=$result->fetch_assoc()){
            $dados[$i]["id"] = $row["ID_ITENS"];
            $dados[$i]["id_pedido"] = $row["id_pedido"];
            $dados[$i]["id_produto"] = $row["id_produto"];            
            $dados[$i]["valor"] = $row["valor_uni"];
            $dados[$i]["valor_total"] = $row["valor_total"];
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



//MENU-------------------------------------------------------------------------------------------------------------------------------------------------------------------



function listaMenu(){
    require "conexao.php";
    $sql = "SELECT * FROM menu";
    $result=$conn->query($sql); 

    if($result->num_rows > 0){
        $num = $result ->num_rows;
        $dados=array();
        $dados["result"] = 1;
        $dados["num"]=$num;
        $i=1;
        while($row=$result->fetch_assoc()){
            $dados[$i]["id"] = $row["ID_MENU"];
            $dados[$i]["nome"] = $row["nome"];
            $dados[$i]["folder"] = $row["folder"];
            $dados[$i]["datahora"] = $row["datahora"];
            $dados[$i]["url"] = $row["url"];
            $dados[$i]["status"] = $row["status"];
        $i++;
        }
        
        $conn->close();
        return $dados;
    }else{
        $dados["result"]=0;
        $dados["num"]=0;
        $conn->close();
        return $dados;
    }

}




function menuNew($dados){
    require "conexao.php";
    $sql = "INSERT INTO menu (folder,nome,url,datahora,status) VALUES ('{$dados["folder"]}','{$dados["nome"]}', '{$dados["url"]}', now(),'{$dados["status"]}');";
    $result=$conn->query($sql); 


    if ($result==true) {
  
        if(isset($dados["replica"]) && ($dados["replica"]==1)){
  
        $dados["folder"] = "r";
        $dados["url"] = "view/" . $dados["url"];
        $sql = "INSERT INTO menu (folder,nome,url,datahora,status) VALUES ('{$dados["folder"]}','{$dados["nome"]}', '{$dados["url"]}', now(),'{$dados["status"]}');";
        $result=$conn->query($sql); 
                if($result==true){
                $conn->close();
                 return 1;} 
        }else{ $conn->close();
            return 1;}      

    }else{
    $conn->close();
    return 0;
    }   

}




function pegaRegMenu($id){ //função pro form de editar menu
    $dados=array();
    require "conexao.php";
    $sql = "SELECT * FROM menu WHERE ID_MENU = {$id}";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $dados["result"] = 1;
while($row=$result->fetch_assoc()){
    
    $dados["id"] = $row["ID_MENU"];
    $dados["folder"] = $row["folder"];
    $dados["nome"] = $row["nome"];
    $dados["url"] = $row["url"];
    $dados["datahora"] = $row["datahora"]; 
    $dados["status"] = $row["status"];
     
};
$conn->close(); 
return $dados;
}else{
        $dados["result"] = 0;
        $conn->close();    
        return $dados;
}}




function menuEdit($dados){
    require "conexao.php";
    $sql="UPDATE menu set folder='{$dados['folder']}',nome='{$dados['nome']}',url='{$dados['url']}',status={$dados['status']} WHERE ID_MENU = '{$dados['id']}'";
    $result = $conn -> query($sql);
    if($result==true){//tudo certo

        if (isset($dados["status"])){ //pequena alteração!
            $sql="UPDATE submenu set status = '{$dados["status"]}' WHERE ID_MENU_FK = '{$dados['id']}'";
            $result = $conn -> query($sql);
            
            if($result==true){//tudo certo
                $conn->close();
                return 1;
              
        }else{
        $conn->close();
        return 1;
        }            
        
    }else{ 
    $conn->close();
    return 0;
    }
}


}



function menuDelete($id){ 
    require "conexao.php";
    $sql="DELETE FROM menu WHERE ID_MENU = {$id}";
    $result = $conn -> query($sql);
    if($result==true){
        $conn->close();
         return 1;
}else{
$conn->close();
return 0;
}  //como as FKS estão em CASCADE não foi necessário criar a deleção dos submenus adjacentes
 }









// SUBMENU --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



function submenuNew($dados){
    require "conexao.php";
    $sql = "INSERT INTO submenu (ID_MENU_FK,folder,nomesub,url,datahora,status) VALUES ('{$dados["idmenu"]}','{$dados["folder"]}','{$dados["nomesub"]}', '{$dados["url"]}', now(),'{$dados["status"]}');";
    $result=$conn->query($sql); 


    if ($result==true) {

        if(isset($dados["replica"]) && ($dados["replica"]==1)){
        $dados["idmenu"] = $dados["idmenu"] +1 ;
        $dados["folder"] = "r";
        $dados["url"] = "view/" . $dados["url"];
        $sql = "INSERT INTO submenu (ID_MENU_FK,folder,nomesub,url,datahora,status) VALUES ('{$dados["idmenu"]}','{$dados["folder"]}','{$dados["nomesub"]}', '{$dados["url"]}', now(),'{$dados["status"]}');";
        $result=$conn->query($sql); 
                if($result==true){
                $conn->close();
                 return 1;
                } 
        }else{ $conn->close();
            return 1;}      

    }else{
    $conn->close();
    return 0;
    }   

}


function pegaRegSubmenu($id){ //função pro form de editar submenu
    $dados=array();
    require "conexao.php";
    $sql = "SELECT * FROM submenu WHERE ID_SUBMENU = {$id}";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        $dados["result"] = 1;
while($row=$result->fetch_assoc()){
    $dados["id"] = $row["ID_SUBMENU"];
    $dados["folder"] = $row["folder"];    
    $dados["ID_MENU_FK"] = $row["ID_MENU_FK"];
    $dados["nomesub"] = $row["nomesub"];
    $dados["url"] = $row["url"];
    $dados["datahora"] = $row["datahora"]; 
    $dados["status"] = $row["status"];
     
}
$conn->close(); 
return $dados;
}else{
        $dados["result"] = 0;
        $conn->close();    
        return $dados;
}}



function submenuList(){
    require "conexao.php";
    $sql = "SELECT * FROM submenu";
    $result=$conn->query($sql); 

    if($result->num_rows > 0){
        $num = $result ->num_rows;
        $dados=array();
        $dados["result"] = 1;
        $dados["num"]=$num;
        $i=1;
        while($row=$result->fetch_assoc()){
            $dados[$i]["id"] = $row["ID_SUBMENU"];
            $dados[$i]["nomesub"] = $row["nomesub"];
            $dados[$i]["id_menu_fk"] = $row["ID_MENU_FK"];
            $dados[$i]["folder"] = $row["folder"];
            $dados[$i]["datahora"] = $row["datahora"];
            $dados[$i]["url"] = $row["url"];
            $dados[$i]["status"] = $row["status"];
        $i++;
        }
        $conn->close();
        return $dados;
    }else{
        $dados["result"]=0;
        $dados["num"]=0;
        $conn->close();
        return $dados;
    }

}


function submenuEdit($dados){
    
    require "conexao.php";
    $sql="UPDATE submenu set folder='{$dados['folder']}',ID_MENU_FK='{$dados['idmenu']}', nomesub='{$dados['nomesub']}',url='{$dados['url']}',status={$dados['status']} WHERE ID_SUBMENU = '{$dados['id']}'";
    $result = $conn -> query($sql);
    if($result==true){
        $conn->close();
         return 1;
}else{
$conn->close();
return 0;
}   }



function submenuDelete($id){
    require "conexao.php";
    $sql="DELETE FROM submenu WHERE ID_SUBMENU = {$id}";
    $result = $conn -> query($sql);
    if($result==true){
        $conn->close();
         return 1;
}else{
$conn->close();
return 0;
}   }










?>
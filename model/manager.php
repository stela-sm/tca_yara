<?php
function pegaMenusSubmenus($folder){
  
  $sql= "SELECT menu.ID_MENU AS ID_MENU, menu.nome as NOME_MENU, menu.url AS URL_MENU  FROM menu WHERE menu.folder = '{$folder}' AND menu.status = 1;"; //perguntar pro celso pq só vem os que tem submenu




  require "conexao.php";



  $result = $conn->query($sql);
  $dados=array();
  if ($result->num_rows>0){
      $dados["result"] = 1;
      $i = 0;
      while($row = $result->fetch_assoc()){
          $dados[$i]["ID_MENU"] = $row["ID_MENU"];
          $dados[$i]["NOME_MENU"] = $row["NOME_MENU"];
          $dados[$i]["URL_MENU"] = $row["URL_MENU"];
          $i++;
      }
      $dados["num"] = $i;
      $conn->close();
      return $dados;
  }else{
      $dados["result"] = 0; 
      $conn->close();
      return $dados;

  }


  
}


function pegasubmenu($folder){

  require "conexao.php";
 
  $sqlSUB = "SELECT * FROM submenu  WHERE folder = '{$folder}'";
 
 
  $result = $conn->query($sqlSUB);
  $dadosSUB=array();

  if ($result->num_rows>0){
      $dadosSUB["result"] = 1;
      $i = 0;
      while($row = $result->fetch_assoc()){
          $dadosSUB[$i]["ID_SUBMENU"] = $row["ID_SUBMENU"];
          $dadosSUB[$i]["ID_MENU_FK"] = $row["ID_MENU_FK"];
          $dadosSUB[$i]["NOME_SUBMENU"] = $row["nomesub"];
          $dadosSUB[$i]["URL_SUBMENU"] = $row["url"];
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

?>
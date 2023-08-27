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


?>
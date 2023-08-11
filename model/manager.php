<?php

function listaAdm(){ //função pra listar adms 
    require_once "conexao.php";
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
            $dados[$i]["senha"] = $row["senha"];
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
?>
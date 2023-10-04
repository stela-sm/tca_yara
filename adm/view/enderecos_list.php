<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/cliente_list_style.css">

    <title>Yara</title>
    <script>
      
        </script>
</head>
<style>
     body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
          
         margin-top: -60px;
          position: fixed;
            width: 99%;
            border-radius: 10px;
            display: flex;
            background-color: #f9f9f9;
            align-items: center;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 10px;
            padding-right: 10px;box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            
        }
        input:focus {
    outline: none;
    border: none;
    border-bottom: dotted #ccc 0.5px;
}

        .icon {
            margin-right: 10px;
        }

        .search-input {
          flex-grow: 2; /* Ocupa 60% do espaço lateral */
             padding: 7px;
             border-radius: 5px;
             font-size: 16px;        
             max-width: none !important;
             text-align: left !important;
             margin: 0px !important;
             background-color: transparent;
             border: none;
             border-bottom: dotted transparent 0.5px;
          }

        .submit-button {
          border: 1px solid #ccc;
             background-color: transparent;
          transition: 0.2s;
             padding: 5px;
             border-radius: 5px;
             margin-left: 10px;
             cursor: pointer;
        }

        .x_button{
          border: none;
          padding: 0;
          margin:0;
          background-color: transparent;
        }
        td{
width: 1cm !important;
        }
        #idinput, .blocoinput, .aptoinput, .estadoinput{
          min-width: 1cm !important;
        }
        
#admTabela {
  margin-top: 60px; /* Para evitar que o conteúdo fique oculto pelo menu */
}
</style>
<body>
<form action="enderecos_list.php" onsubmit="preventSubmit(event)" method="get" name="search_form">
    <div class="container">
        <div class="icon"> <?php if(($_GET["campo"]=="")){echo "<i class=\"fa-solid fa-magnifying-glass\"></i>";}else{echo "<button class=\"x_button\"name=\"campo\" value=\"\"><i class=\"fa-solid fa-x\"></i></button>";} ?></div>
        <input type="hidden" name="tabela" value="adm">
        <input type="text" name="search" <?php if(isset($_GET["campo"])&&$_GET["campo"]!=""){echo "value=\"".$_GET["search"]."\"";} else{echo"";}?>class="search-input" placeholder="Pesquisar...">
        <button name="campo" value="ID_ENDERECO"class="submit-button"><i class="fa-solid fa-fingerprint" data-toggle="tooltip" data-placement="right" title="ID" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="cliente" class="submit-button"><i class="fa-solid fa-user" data-toggle="tooltip" data-placement="right" title="Nome" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="cep" class="submit-button"><i class="fa-solid fa-location-crosshairs" data-toggle="tooltip" data-placement="right" title="Email" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="estado" class="submit-button"><i class="fa-solid fa-city" data-toggle="tooltip" data-placement="right" title="Telefone" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="bairro" class="submit-button"><i class="fa-solid fa-sign-hanging" data-toggle="tooltip" data-placement="right" title="CPF" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="rua" class="submit-button"><i class="fa-solid fa-road" data-toggle="tooltip" data-placement="right" title="CPF" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="bloco" class="submit-button"><i class="fa-solid fa-building" data-toggle="tooltip" data-placement="right" title="CPF" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="apto" class="submit-button"><i class="fa-regular fa-building" data-toggle="tooltip" data-placement="right" title="CPF" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="datahora" class="submit-button"><i class="fa-solid fa-calendar" data-toggle="tooltip" data-placement="right" title="Data" style="color: #1A3D1F;"></i></button>
       
        </form>
      </div>
    <div id="admTabela">
<?php

require_once "../model/manager.php";
if((!isset($_GET["search"]))){
  $pesquisa["search"] = "";
}else{
  $pesquisa["search"] = $_GET["search"];
  $pesquisa["campo"] = $_GET["campo"];
}  
$dados = listaEnderecos($pesquisa);
?>

<script>
     function confirmDelete(id){
    var resp = confirm("Tem certeza que deseja deletar esse registro?");
    if(resp==true){
            location.href="../../controller/controller_adm.php?adm_delete=1&id="+id;
    }else{
        return null;
    }
}

    
    function css(valor){
    const toggleButton = document.getElementById('edit');
    const inputId = document.getElementById('idget'+valor).value;
     const inputsToToggle = document.querySelectorAll('#classe' + valor);

    const sumir = document.getElementById('edit'+inputId);
    const sumir2 =  document.getElementById('ex'+inputId);
    const aparece = document.getElementById('confirma'+inputId);
    const aparece2 = document.getElementById('cancel'+inputId);
 
    inputsToToggle.forEach(input => {
        if (input.disabled) {
          input.disabled = false;
          sumir.style.display = 'none';
          sumir2.style.display = 'none';
          aparece.style.display = 'block';
          aparece2.style.display = 'block';
        } else {
         
        }
      });
    ;}

    function css2(valor){
    const toggleButton = document.getElementById('edit');
    const inputId = document.getElementById('idget'+valor).value;
     const inputsToToggle = document.querySelectorAll('#classe' + valor);

    const sumir = document.getElementById('edit'+inputId);
    const sumir2 =  document.getElementById('ex'+inputId);
    const aparece = document.getElementById('confirma'+inputId);
    const aparece2 = document.getElementById('cancel'+inputId);
 
    inputsToToggle.forEach(input => {
        if (input.disabled) {
          input.disabled = false;
          sumir.style.display = 'none';
          sumir2.style.display = 'none';
          aparece.style.display = 'block';
          aparece2.style.display = 'block';
        } else {
            input.disabled = true;
          sumir.style.display = 'block';
          sumir2.style.display = 'block';
          aparece.style.display = 'none';
          aparece2.style.display = 'none';
        }
      });
    ;}
  </script>
</table>
    <table class="tabelaAdm">
        <tr id="yellow">
            <th class="TabelaAdmTh">ID</th>
            <th class="TabelaAdmTh">Cliente</th>
            <th class="TabelaAdmTh">CEP</th>            
            <th class="TabelaAdmTh">Estado</th>
            <th class="TabelaAdmTh poder">Cidade</th>            
            <th class="TabelaAdmTh">Bairro</th>
            <th class="TabelaAdmTh">Rua</th>
            <th class="TabelaAdmTh">Bloco</th>
            <th class="TabelaAdmTh">Apto</th>
            <th class="TabelaAdmTh">Datahora</th>
        </tr>
        <?php
        for($i=1;$i<=$dados["num"];$i++){
            echo"<tr><form  name=\"formEdit\" action=\"../controller/controller_adm.php\" method=\"post\">";

            echo "<input type=\"hidden\" name=\"cliente_edit\" value=\"".$dados[$i]["id"]."\">";
            
            echo "<input type=\"hidden\" id=\"idget".$dados[$i]["id"]."\"name=\"id\" value=\"".$dados[$i]["id"]."\">";

            echo "<td class=\"TabelaAdmTd\" id=\"idinput\">". $dados[$i]["id"]."</td>";
            
            $nome = nomeCliente($dados[$i]["cliente"]);

            echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" id=\"classe".$dados[$i]["id"]."\"  disabled name=\"cliente\" value=\"". $nome["nome"] ."\"></td>";
            
            echo "<td class=\"TabelaAdmTd email\"> <input type=\"text\"  classe=\"cep\" id=\"classe".$dados[$i]["cep"]."\" disabled name=\"email\" value=\"". $dados[$i]["cep"] ."\"></td>";

            echo "<td class=\"TabelaAdmTd\"> <input class=\"estadoinput\" type=\"text\"  id=\"classe".$dados[$i]["id"]."\" disabled name=\"estado\" value=\"". $dados[$i]["estado"] ."\"></td>";
            
            
            echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" id=\"classe".$dados[$i]["id"]."\"  disabled name=\"cidade\" value=\"". $dados[$i]["cidade"] ."\"></td>";

            
            echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" id=\"classe".$dados[$i]["id"]."\"  disabled name=\"bairro\" value=\"". $dados[$i]["bairro"] ."\"></td>";

            echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" id=\"classe".$dados[$i]["id"]."\"  disabled name=\"rua\" value=\"". $dados[$i]["rua"] ."\"></td>";
            
            echo "<td class=\"TabelaAdmTd\"> <input class=\"blocoinput\"type=\"text\" id=\"classe".$dados[$i]["id"]."\"  disabled name=\"bloco\" value=\"". $dados[$i]["bloco"] ."\"></td>";
           
            echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" class=\"aptoinput\"id=\"classe".$dados[$i]["id"]."\"  disabled name=\"apto\" value=\"". $dados[$i]["apto"] ."\"></td>";
           
           
            echo "<td class=\"TabelaAdmTd data\"> <input disabled value=\"". $dados[$i]["datahora"] ."\"></td>";
          

            echo"</td>";


          
            echo"</tr>";
        }
        
        ?>
      

</table>

    </div>
    <?php

if(isset($_REQUEST["msg"])){

 $cod = $_REQUEST["msg"];
 require_once "../model/msg.php";
echo "<script>alert('" . $MSG[$cod] . "');</script>";

}

?>
</body>
</html>

<!--<table class="tabelaAdm">
    <tr>
        <td>
        <form name="formNew" action="admNew.php" method="POST">
<input type="hidden" name="new" value="1">
<input type="submit" value="Adicionar Administrador" style="background-color: #5cd56c;">
</form>
        </td>
    </tr>-->
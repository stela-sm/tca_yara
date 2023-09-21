<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
    <title>Yara</title>
    <script>
        function confirmDelete(id){
            var resp = confirm("Tem certeza que deseja deletar esse registro?");
            if(resp==true){
                    location.href="../controller/controller_adm.php?adm_delete=1&id="+id;
            }else{
                return null;
            }
        }
        </script>
</head>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
    @import url('https://fonts.cdnfonts.com/css/glacial-indifference-2');
    :root{
        --white: #f9f9f9;
        --green: #1A3D1F;
        --yellow:  #eeb249;
        --grey: gray;
    }


   body {
      margin: 0;
      padding: 0;
      display: block;
    }
    
    table {
      width: 100vw;
      border-collapse: collapse;
      table-layout: auto;
      border-radius: 20px;
      overflow: hidden;
      border-radius: 10px;
      font-family: 'Glacial Indifference';
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    th, td, tr {
        
        font-size: 1em;
      border-bottom: 1px solid #ddd;
      padding: 10px;
      text-align: center;
      align-items: center;
     
      width: fit-content;
    }
    
    input, select{
    white-space: normal;
    font-size: 0.9em;
    display: flex;
    max-height: 400px;
    text-align: center;   
    font-family: 'Glacial Indifference';
    background-color: #DADADA;
    color: black;
    border: none;
    width: 3cm;
    width: 110%;
    max-width: 4.2cm;
    }
    input:disabled, select:disabled{
    white-space: normal;
    font-size: 0.9em;
    display: flex;
    max-height: 400px;
    text-align: center;   
    font-family: 'Glacial Indifference';
    background-color: transparent;
    color: black;
    border: none;
    width: 3cm;
    width: 110%;
    max-width: 4.2cm;
    }

   
   

    textarea::-webkit-scrollbar {
    width: 0.2em;
}

textarea::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,0.3);
}

textarea::-webkit-scrollbar-thumb {
  background-color: var(--yellow);
  outline: none;
}

textarea:disabled{
    resize: none;
    max-height: 4cm;
    max-width: 5cm;
    margin-left: 10%;
    padding: 5px 10px 5px 10px;
    border-radius: 10px; 
    font-family: 'Glacial Indifference';
    background-color: transparent;
    color: black;
    border: 1px #DADADA solid;  
      
   
}
textarea

{
    resize: none;
    max-height: 4cm;
    max-width: 3cm;
    padding: 5px 10px 5px 10px;
    border-radius: 10px; 
    font-family: 'Glacial Indifference';
    background-color: #DADADA;
    color: black;
    border: 1px #DADADA solid;  
      
   
}
    
    .end{
        min-width: 4.6cm;
    }
    input:focus{
        border: 1px gray dotted;
    }
    
   

    #yellow{
        color: var(--white);
      text-transform: uppercase;
        background-color: var(--yellow);
    }

.confirm{
    display:none;
}
i{
    cursor:pointer;
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
             background-color: transparent;
             border: none;
             border-bottom: dotted transparent 0.5px;
           }
 
         .submit-button {
           border: 1px solid #ccc;
             background-color: transparent;
            
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
         
 #admTabela {
   margin-top: 60px; /* Para evitar que o conteúdo fique oculto pelo menu */
 }
</style>
<body>
    
<form action="pedidos_list.php" onsubmit="preventSubmit(event)" method="get" name="search_form">
    <div class="container">
        <div class="icon"> <?php if(!isset($_GET["campo"]) || $_GET["campo"]==""){echo "<i class=\"fa-solid fa-magnifying-glass\"></i>";}else{echo "<button class=\"x_button\"name=\"campo\" value=\"\"><i class=\"fa-solid fa-x\"></i></button>";} ?></div>
        <input type="hidden" name="tabela" value="adm">
        <input type="text" name="search" <?php if(isset($_GET["campo"])&&$_GET["campo"]!=""){echo "value=\"".$_GET["search"]."\"";} else{echo"";}?>class="search-input" placeholder="Pesquisar...">
        <button name="campo" value="ID_PEDIDO"class="submit-button"><i class="fa-solid fa-fingerprint" data-toggle="tooltip" data-placement="right" title="ID" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="id_cliente" class="submit-button"><i class="fa-solid fa-address-card" data-toggle="tooltip" data-placement="right" title="Nome" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="id_endereco" class="submit-button"><i class="fa-solid fa-location-dot" data-toggle="tooltip" data-placement="right" title="Endereço" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="itens" class="submit-button"><i class="fa-solid fa-bag-shopping" data-toggle="tooltip" data-placement="right" title="Itens" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="valor" class="submit-button"><i class="fa-solid fa-brazilian-real-sign" data-toggle="tooltip" data-placement="right" title="Valor" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="pagamento" class="submit-button"><i class="fa-solid fa-credit-card" data-toggle="tooltip" data-placement="right" title="Pagamento" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="datahora" class="submit-button"><i class="fa-solid fa-calendar" data-toggle="tooltip" data-placement="right" title="Data" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="status" class="submit-button"><i class="fa-solid fa-signal" data-toggle="tooltip" data-placement="right" title="Status" style="color: #1A3D1F;"></i></button>
        </form>
      </div>
    <div id="admTabela">
<?php

require_once "../model/manager.php";
if((!isset($_GET["search"]))){
  $pesquisa["search"] = "";
}else if(isset($_GET["campo"])){
  $pesquisa["search"] = $_GET["search"];
  $pesquisa["campo"] = $_GET["campo"];
}  else { $pesquisa["search"] = "";}
$dados = listaPedidos($pesquisa);

?>

<script>
     
    
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
            <th class="TabelaAdmTh">Endereço</th>               
            <th class="TabelaAdmTh">Itens</th>         
            <th class="TabelaAdmTh">Valor</th>
            <th class="TabelaAdmTh">Forma de Pagamento</th>
            <th class="TabelaAdmTh poder">Data</th>
            <th class="TabelaAdmTh">Status</th>
            <th class="TabelaAdmTh">&nbsp;</th>
            <th class="TabelaAdmTh">&nbsp;</th>
        </tr>
        <?php
        for($i=1;$i<=$dados["num"];$i++){
     
            $resp = listaItens($dados[$i]["id"]);

            for ($ii=1;$ii<=$resp['num2']+1;$ii++){
            $itens[$ii] = $resp[$ii]["itens"];}
      

            echo"<tr><form  name=\"formEdit\" action=\"../controller/controller_adm.php\" method=\"post\">";

            echo "<input type=\"hidden\" name=\"pedidos_edit\" value=\"".$dados[$i]["id"]."\">";
            
            echo "<input type=\"hidden\" id=\"idget".$dados[$i]["id"]."\"name=\"id\" value=\"".$dados[$i]["id"]."\">";

            echo "<td class=\"TabelaAdmTd\">". $dados[$i]["id"]."</td>";
            
            echo "<td class=\"TabelaAdmTd\"> <input type=\"text\"  disabled name=\"nome\" value=\"". $dados[$i]["cliente"] ."\"></td>";
            
            echo "<td class=\"TabelaAdmTd email\"> <input type=\"text\"  classe=\"end\"  disabled name=\"endereco\" value=\"". $dados[$i]["endereco"] ."\"></td>";

            echo "<td class=\"TabelaAdmTd\"> <textarea  disabled name=\"itens\">";for ($ii=1;$ii<=$resp['num2']+1;$ii++){ echo nl2br($itens[$ii]). "\n";  };echo "</textarea></td>";
            

            echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" disabled name=\"valor\" value=\"". $dados[$i]["valor"] ."\"></td>";

            echo "<td class=\"TabelaAdmTd\"> <input type=\"text\"  disabled name=\"pagamento\" value=\"". $dados[$i]["pagamento"] ."\"></td>";
            
            echo "<td class=\"TabelaAdmTd data\">" . $dados[$i]["datahora"] ."</td>";
            


            echo "<td class=\"TabelaAdmTd\"> <select disabled name=\"status\" id=\"classe".$dados[$i]["id"]."\"> 
            
            <option value=\"1\""; if($dados[$i]["status"]==1){
                echo "selected";} echo ">Pagamento</option><br>

            <option value=\"2\""; if($dados[$i]["status"]==2){
                echo "selected";} echo ">Em preparação</option><br>


                <option value=\"3\""; if($dados[$i]["status"]==3){
                    echo "selected";} echo ">Em rota</option><br>
    

                    <option value=\"4\""; if($dados[$i]["status"]==4){
                        echo "selected";} echo ">Devolução</option><br>
        

                        <option value=\"5\""; if($dados[$i]["status"]==5){
                            echo "selected";} echo ">Estornado</option><br>
            

                            <option value=\"6\""; if($dados[$i]["status"]==6){
                                echo "selected";} echo ">Cancelado</option><br>
                

                                <option value=\"7\""; if($dados[$i]["status"]==7){
                                    echo "selected";} echo ">Inativo</option><br>
                    

                                    <option value=\"8\""; if($dados[$i]["status"]==8){
                                        echo "selected";} echo ">Tentativa de entrega</option><br>
                        
                                                                                    
</select></td> <td class=\"TabelaAdmTd\">";
            ?>

<button style="background-color:transparent; display: none; border:none;"  onclick="css(this.value)" id="confirma<?php echo $dados[$i]["id"];?>" type="submit" class="confirm" value= "<?php echo $dados[$i]["id"];?>"><i class="fa-solid fa-circle-check" style="color: #4da037;"></i></button>
</form>


<button style="background-color:transparent; display:block; border:none;"  onclick="css(this.value)" id="edit<?php echo $dados[$i]["id"];?>" type="button" value= "<?php echo $dados[$i]["id"];?>"><i class="fa-solid fa-pen-to-square" style="color: #eeb249;"></i></button>
            <?php

            echo"</td>";


           echo "<td class=\"TabelaAdmTd\">";
            ?>

<button style="background-color:transparent; display:block; border:none;" onclick="confirmDelete(<?=$dados[$i]['id'];?>)" id="ex<?php echo $dados[$i]["id"];?>" ><i class="fa-solid fa-trash-can" style="color: transparent;"></i></i></button>


<button style="background-color:transparent; display:none;  border:none;"  onclick="css2(this.value)" id="cancel<?php echo $dados[$i]["id"];?>" type="button" value= "<?php echo $dados[$i]["id"];?>"><i class="fa-solid fa-circle-xmark" style="color: #b71f1f;"></i></button>

            <?php

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
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
    <title>Pizza Etec</title>
    <script>
        function confirmDelete(id){
            var resp = confirm("Tem certeza que deseja deletar esse registro?");
            if(resp==true){
                    location.href="../controller/controller.php?adm_delete=1&id="+id;
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
    
    input{
        
        display: flex;
        height: max-content;
        text-align: center;   
        font-family: 'Glacial Indifderence';
        background-color: transparent;
        color: black;
        border: none;
        width: 3cm;
        background-color: #dbdbdb;
    width: 110%;
    max-width: 3.6cm;
    }
    
    
    input:focus{
        border: 1px gray dotted;
    }
    
    input:disabled{
        
        
        text-decoration: none;
        display: flex;
        height: max-content;
        text-align: center;   
        font-family: 'Glacial Indifderence';
        background-color: transparent;
        color: var(--green);
        border: none;
    width: 110%;
    min-width: 3.6cm;
    }
    .poder{
        width: 2em;
        margin-left: -2em;
    }
    .data{
        font-size: 0.7em;
    }
   .email{
    width:20%
   }
    #yellow{
        color: var(--white);
      text-transform: uppercase;
        background-color: var(--yellow);
    }

.confirm{
    display:none;
}
</style>
<body>
    <div id="admTabela">
<?php
require_once "../model/manager.php";
$dados = listaAdm();
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
            <th class="TabelaAdmTh">Nome</th>
            <th class="TabelaAdmTh">Email</th>            
            <th class="TabelaAdmTh">Telefone</th>
            <th class="TabelaAdmTh">Data</th>
            <th class="TabelaAdmTh poder">Poder</th>
            <th class="TabelaAdmTh">Status</th>
            <th class="TabelaAdmTh">&nbsp;</th>
            <th class="TabelaAdmTh">&nbsp;</th>
        </tr>
        <?php
        for($i=1;$i<=$dados["num"];$i++){
            echo"<tr><form action name=\"formEdit\" action=\"../controller/controller.php\" method=\"POST\">";

            echo "<input type=\"hidden\" id=\"idget".$dados[$i]["id"]."\"name=\"id\" value=\"".$dados[$i]["id"]."\">";

            echo "<td class=\"TabelaAdmTd\">". $dados[$i]["id"]."</td>";
            
            echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" id=\"classe".$dados[$i]["id"]."\" disabled name=\"nome\" value=\"". $dados[$i]["nome"] ."\"></td>";
            
            echo "<td class=\"TabelaAdmTd email\"> <input type=\"text\"  id=\"classe".$dados[$i]["id"]."\" disabled name=\"nome\" value=\"". $dados[$i]["email"] ."\"></td>";

            echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" maxwidth=\"11\" id=\"classe".$dados[$i]["id"]."\" disabled name=\"nome\" value=\"". $dados[$i]["telefone"] ."\"></td>";
            
            echo "<td class=\"TabelaAdmTd data\"> <input disabled value=\"". $dados[$i]["datahora"] ."\"></td>";
            
            echo "<td class=\"TabelaAdmTd poder\"> <input type=\"text\"  id=\"classe".$dados[$i]["id"]."\" disabled name=\"nome\" value=\"". $dados[$i]["poder"] ."\"></td>";
            
            echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" id=\"classe".$dados[$i]["id"]."\" disabled name=\"nome\" value=\""; if($dados[$i]["status"]==1){
                echo "Ativo";
            }else{
                echo "Inativo";
            };
             echo "\"></td>";
            
           


            echo "<td class=\"TabelaAdmTd\">";
            ?>

<button style="background-color:transparent; display:block; border:none;"  onclick="css(this.value)" id="edit<?php echo $dados[$i]["id"];?>" type="button" value= "<?php echo $dados[$i]["id"];?>"><i class="fa-solid fa-pen-to-square" style="color: #eeb249;"></i></button>

<button style="background-color:transparent; display: none; border:none;"  onclick="css(this.value)" id="confirma<?php echo $dados[$i]["id"];?>" type="submit" class="confirm" value= "<?php echo $dados[$i]["id"];?>"><i class="fa-solid fa-circle-check" style="color: #4da037;"></i></button>
</form>
            <?php

            echo"</td>";


           echo "<td class=\"TabelaAdmTd\">";
            ?>

<button style="background-color:transparent; display:block; border:none;" onclick="confirmDelete(<?=$dados[$i]['id'];?>)" id="ex<?php echo $dados[$i]["id"];?>" ><i class="fa-solid fa-trash-can" style="color: #5b5757;"></i></i></button>


<button style="background-color:transparent; display:none;  border:none;"  onclick="css(this.value)" id="cancel<?php echo $dados[$i]["id"];?>" type="button" value= "<?php echo $dados[$i]["id"];?>"><i class="fa-solid fa-circle-xmark" style="color: #b71f1f;"></i></button>

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
 require_once "msg.php";
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
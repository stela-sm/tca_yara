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
                    location.href="../controller/controller_adm.php?produto_delete=1&id="+id;
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
      width: 100%;
      border-collapse: collapse;
      table-layout: auto;
      border-radius: 20px;
      overflow: hidden;
      border-radius: 10px;
      font-family: 'Glacial Indifference';
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    th, td, tr {
        
        font-size: 0.9em;
      border-bottom: 1px solid #ddd;
      padding: 10px;
      padding-left: 0px;
      padding-right: 0px;
      text-align: center;
      align-items: center;
     
      width: fit-content;
    }
    
    input, select{
       
        font-size: 1.1em;
        opacity: 1;
        text-decoration: none;
        display: flex;
        height: max-content;
        text-align: center;   
        font-family: 'Glacial Indifference';
        background-color: #dbdbdb;
        color: var(--green);
        border: none;

    width: 100%;
    min-width: 3cm;
   }
    
    
    input:focus{
        border: 1px gray dotted;
    }
    
   
    input:disabled, select:disabled, option{
        
        font-size: 1.1em;
        opacity: 1;
        text-decoration: none;
        display: flex;
        height: max-content;
        text-align: center;   
        font-family: 'Glacial Indifference';
        background-color: transparent;
        color: var(--green);
        border: none;

    width: 100%;
    min-width: 3cm;
    }
   
    .data{
        font-size: 0.9em;
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
i{
    cursor:pointer;
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
    height: 4cm;
    max-width: 3cm;
    padding: 5px 10px 5px 10px;
    border-radius: 10px; 
    font-family: 'Glacial Indifference';
    background-color: transparent;
    color: black;
    border: 1px #DADADA solid;  
      
   
}

label{
    text-align: center;
    align-items: center;
    justify-content: center;
}
textarea{
    resize: none;
    height: 4cm;
    max-width: 3cm;
    padding: 5px 10px 5px 10px;
    border-radius: 10px; 
    font-family: 'Glacial Indifference';
    background-color: #dbdbdb;
    color: black;
    border: 1px #DADADA solid;  
}
</style>
<body>
    <div id="admTabela">
<?php
require_once "../model/manager.php";
$dados = listaProdutos();
?>

<script>
     
    
    function css(valor){
    const toggleButton = document.getElementById('edit');
    const inputId = document.getElementById('idget'+valor).value;
    var classe = '.classe' + valor
    const inputsToToggle = document.querySelectorAll(classe);

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
    var classe = '.classe' + valor
    const inputsToToggle = document.querySelectorAll(classe);

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
            <th class="TabelaAdmTh poder">Descrição</th>            
            <th class="TabelaAdmTh poder">Ingredientes</th>
            <th class="TabelaAdmTh">Imagem</th>
            <th class="TabelaAdmTh">Imagem hover</th>
            <th class="TabelaAdmTh">Datahora</th>
            <th class="TabelaAdmTh">Status</th>
            <th class="TabelaAdmTh"><a href="produto_new.php"><i class="fa-solid fa-user-plus" style=" color:  #4da037;"></i></a></th>
            <th class="TabelaAdmTh">&nbsp;</th>
        </tr>
        <?php
        for($i=1;$i<=$dados["num"];$i++){
            echo"<tr><form  name=\"formEdit\" action=\"../controller/controller_adm.php\" method=\"post\" enctype=\"multipart/form-data\">";

            echo "<input type=\"hidden\" name=\"vitrine_edit\" value=\"".$dados[$i]["id"]."\">";
            
            echo "<input type=\"hidden\" id=\"idget".$dados[$i]["id"]."\"name=\"id\" value=\"".$dados[$i]["id"]."\">";



            echo "<td class=\"TabelaAdmTd\">". $dados[$i]["id"]."</td>";
            
            echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" class=\"classe".$dados[$i]["id"]."\"  disabled name=\"nome\" value=\"". $dados[$i]["nome"] ."\"></td>";
            
          
            echo "<td class=\"TabelaAdmTd\"> <textarea  class=\"classe".$dados[$i]["id"]."\" disabled name=\"descricao\">". $dados[$i]["descricao"] ."</textarea></td>";


            echo "<td class=\"TabelaAdmTd\"> <textarea  class=\"classe".$dados[$i]["id"]."\" disabled name=\"ingredientes\">". $dados[$i]["ingredientes"] ."</textarea></td>";

            echo "<td class=\"TabelaAdmTd\"> <label for=\"muda\">
            <img style=\"width:3cm;\"src=\"media/".$dados[$i]["img"] ."\" alt=\"\"></label><input type=\"file\" style=\"display:none;\" id=\"muda\"class=\"classe".$dados[$i]["id"]."\" name=\"img\"></td>";

            echo "<td class=\"TabelaAdmTd\"> <label for=\"muda2\">
            <img style=\"width:3cm;\"src=\"media/".$dados[$i]["img_hover"] ."\" alt=\"\"></label><input type=\"file\" style=\"display:none;\" id=\"muda2\"class=\"classe".$dados[$i]["id"]."\" name=\"img_hover\"></td>";

           
           
            echo "<td class=\"TabelaAdmTd data\"> <input disabled value=\"". $dados[$i]["datahora"] ."\"></td>";
            

            echo "<td class=\"TabelaAdmTd\"> <select disabled name=\"status\" class=\"classe".$dados[$i]["id"]."\"> 
            
            <option value=\"1\""; if($dados[$i]["status"]==1){
                echo "selected";} echo ">Ativo</option><br>

            <option value=\"0\""; if($dados[$i]["status"]==0){
                echo "selected";} echo ">Inativo</option><br>


</select></td> <td class=\"TabelaAdmTd\">";
            ?>
<button style="background-color:transparent; display: none; border:none;"  onclick="css(this.value)" id="confirma<?php echo $dados[$i]["id"];?>" type="submit" class="confirm" value= "<?php echo $dados[$i]["id"];?>"><i class="fa-solid fa-circle-check" style="color: #4da037;"></i></button>
</form>


<button style="background-color:transparent; display:block; border:none;"  onclick="css(this.value)" id="edit<?php echo $dados[$i]["id"];?>" type="button" value= "<?php echo $dados[$i]["id"];?>"><i class="fa-solid fa-pen-to-square" style="color: #eeb249;"></i></button>
            <?php

            echo"</td>";


           echo "<td class=\"TabelaAdmTd\">";
            ?>

<button style="background-color:transparent; display:block; border:none;" onclick="confirmDelete(<?=$dados[$i]['id'];?>)" id="ex<?php echo $dados[$i]["id"];?>" ><i class="fa-solid fa-trash-can" style="color: #5b5757;"></i></i></button>


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
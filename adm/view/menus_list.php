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
       
        function confirmDeletemenu(id){
            var resp = confirm("Tem certeza que deseja deletar esse registro?");
            if(resp==true){
                    location.href="../controller/controller_adm.php?menu_delete=1&id="+id;
            }else{
                return null;
            }
        }

        function confirmDeleteSubmenu(id){
            var resp = confirm("Tem certeza que deseja deletar esse registro?");
            if(resp==true){
                    location.href="../controller/controller_adm.php?submenu_delete=1&id="+id;
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
        margin-left: 10%;
        font-size: 0.9em;
        display: flex;
        height: max-content;
        text-align: center;   
        font-family: 'Glacial Indifference';
        background-color: transparent;
        color: black;
        border: none;
        width: 3cm;
        background-color: #dbdbdb;
    width: 110%;
    max-width: 3.4cm;
    }
    
    
    input:focus{
        border: none;
    }
    
   
    input:disabled, select:disabled, option{
        margin-left: 10%;
        opacity: 1;
        text-decoration: none;
        display: flex;
        height: max-content;
        text-align: center;   
        font-family: 'Glacial Indifference';
        background-color: transparent;
        color: var(--green);
        border: none;
    width: 110%;
    min-width: 3.4cm;
    }
 
    .data{
        font-size: 0.9em;
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
</style>
<body>
    <div id="admTabela">
<?php
require "../model/manager.php";
$dados = listaMenu();
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
<table class="tabelaAdm">
        <tr id="yellow">
        <th class="TabelaAdmTh">ID_MENU</th>
            <th class="TabelaAdmTh">Folder</th>
            <th class="TabelaAdmTh">Nome</th>
            <th class="TabelaAdmTh">Url</th>
            <th class="TabelaAdmTh">Data</th>
            <th class="TabelaAdmTh">Status</th>
            <th class="TabelaAdmTh"><a href="menu_new.php?menu_new=1"><i class="fa-solid fa-user-plus" style=" color:  #4da037;"></i></a></th>
            <th class="TabelaAdmTh">&nbsp;</th>
        </tr>
        <?php for ($i = 1;$i <= $dados["num"];$i++)
{

    echo "<tr><form  name=\"formEdit\" action=\"../controller/controller_adm.php\" method=\"post\">";

    echo "<input type=\"hidden\" name=\"menu_edit\" value=\"" . $dados[$i]["id"] . "\">";

    echo "<input type=\"hidden\" id=\"idget" . $dados[$i]["id"] . "\"name=\"id\" value=\"" . $dados[$i]["id"] . "\">";

    echo "<td class=\"TabelaAdmTd\">" . $dados[$i]["id"] . "</td>";

    echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" id=\"classe" . $dados[$i]["id"] . "\"  disabled name=\"folder\" value=\"" . $dados[$i]["folder"] . "\"></td>";

    echo "<td class=\"TabelaAdmTd email\"> <input type=\"text\"   id=\"classe" . $dados[$i]["id"] . "\" disabled name=\"nome\" value=\"" . $dados[$i]["nome"] . "\"></td>";

    echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" id=\"classe" . $dados[$i]["id"] . "\" disabled name=\"url\" value=\"" . $dados[$i]["url"] . "\"></td>";

    echo "<td class=\"TabelaAdmTd data\"> <input disabled value=\"" . $dados[$i]["datahora"] . "\"></td>";

    echo "<td class=\"TabelaAdmTd\"> <select disabled name=\"status\" id=\"classe" . $dados[$i]["id"] . "\"> 
            
            <option value=\"1\"";
    if ($dados[$i]["status"] == 1)
    {
        echo "selected";
    }
    echo ">Ativo</option><br>

            <option value=\"0\"";
    if ($dados[$i]["status"] == 0)
    {
        echo "selected";
    }
    echo ">Inativo</option><br>


</select></td> <td class=\"TabelaAdmTd\">";
?>


<button style="background-color:transparent; display: none; border:none;"  onclick="css(this.value)" id="confirma<?php echo $dados[$i]["id"]; ?>" type="submit" class="confirm" value= "<?php echo $dados[$i]["id"]; ?>"><i class="fa-solid fa-circle-check" style="color: #4da037;"></i></button>
</form>


<button style="background-color:transparent; display:block; border:none;"  onclick="css(this.value)" id="edit<?php echo $dados[$i]["id"]; ?>" type="button" value= "<?php echo $dados[$i]["id"]; ?>"><i class="fa-solid fa-pen-to-square" style="color: #eeb249;"></i></button>
            <?php
    echo "</td>";

    echo "<td class=\"TabelaAdmTd\">";
?>

<button style="background-color:transparent; display:block; border:none;" onclick="confirmDeletemenu(<?php echo $dados[$i]['id']; ?>)" id="ex<?php echo $dados[$i]["id"]; ?>" ><i class="fa-solid fa-trash-can" style="color: #5b5757;"></i></i></button>


<button style="background-color:transparent; display:none;  border:none;"  onclick="css2(this.value)" id="cancel<?php echo $dados[$i]["id"]; ?>" type="button" value= "<?php echo $dados[$i]["id"]; ?>"><i class="fa-solid fa-circle-xmark" style="color: #b71f1f;"></i></button>

            <?php
    echo "</td>";

    echo "</tr>";

} ?>
      

</table>
















<br>
<br>


<?php
$dados2=  submenuList();

if (isset($dados2['num']) && $dados2['num']!='0'){?>







<table class="tabelaAdm">
        <tr id="yellow">
        <th class="TabelaAdmTh">ID_SUBMENU</th>
            <th class="TabelaAdmTh">Folder</th>
            <th class="TabelaAdmTh">ID_MENU_FK</th>
            <th class="TabelaAdmTh">Nome Sub</th>
            <th class="TabelaAdmTh">Url</th>
            <th class="TabelaAdmTh">Data</th>
            <th class="TabelaAdmTh">Status</th>
            <th class="TabelaAdmTh"><a href="menu_new.php?submenu_new=1"><i class="fa-solid fa-user-plus" style=" color:  #4da037;"></i></a></th>
            <th class="TabelaAdmTh">&nbsp;</th>
        </tr>
        <?php for ($i = 1;$i <= $dados2["num"];$i++)
{

    echo "<tr><form  name=\"formEdit\" action=\"../controller/controller_adm.php\" method=\"post\">";

    echo "<input type=\"hidden\" name=\"submenu_edit\" value=\"" . $dados2[$i]["id"] . "\">";

    echo "<input type=\"hidden\" id=\"idget" . $dados2[$i]["id"] . "\"name=\"id\" value=\"" . $dados2[$i]["id"] . "\">";

    echo "<td class=\"TabelaAdmTd\">" . $dados2[$i]["id"] . "</td>";

    echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" id=\"classe" . $dados2[$i]["id"] . "\"  disabled name=\"folder\" value=\"" . $dados2[$i]["folder"] . "\"></td>";

    echo "<td class=\"TabelaAdmTd\">  <select disabled id=\"classe" . $dados2[$i]["id"] . "\" name=\"idmenu\" > ";
    $nome="";
    for($ii=1;$ii<count($dados)-1;$ii++){
        if($dados[$ii]['id']==$dados2[$i]['id_menu_fk']){$word = 'selected';}else{$word='';}
            echo "<option ".$word." name=\"idmenu\" value='{$dados[$ii]['id']}'>{$dados[$ii]['id']} - {$dados[$ii]['nome']}</option>";}
    
       
    

echo"  </select></td>";

    echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" id=\"classe" . $dados2[$i]["id"] . "\" disabled name=\"nome\" value=\"" . $dados2[$i]["nomesub"] . "\"></td>";

    echo "<td class=\"TabelaAdmTd\"> <input type=\"text\" id=\"classe" . $dados2[$i]["id"] . "\" disabled name=\"url\" value=\"" . $dados2[$i]["url"] . "\"></td>";


    echo "<td class=\"TabelaAdmTd data\"> <input disabled value=\"" . $dados2[$i]["datahora"] . "\"></td>";

    echo "<td class=\"TabelaAdmTd\"> <select disabled name=\"status\" id=\"classe" . $dados2[$i]["id"] . "\"> 
            
            <option value=\"1\"";
    if ($dados2[$i]["status"] == 1)
    {
        echo "selected";
    }
    echo ">Ativo</option><br>

            <option value=\"0\"";
    if ($dados2[$i]["status"] == 0)
    {
        echo "selected";
    }
    echo ">Inativo</option><br>


</select></td> <td class=\"TabelaAdmTd\">";
?>

<button style="background-color:transparent; display: none; border:none;"  onclick="css(this.value)" id="confirma<?php echo $dados2[$i]["id"]; ?>" type="submit" class="confirm" value= "<?php echo $dados2[$i]["id"]; ?>"><i class="fa-solid fa-circle-check" style="color: #4da037;"></i></button>
</form>


<button style="background-color:transparent; display:block; border:none;"  onclick="css(this.value)" id="edit<?php echo $dados2[$i]["id"]; ?>" type="button" value= "<?php echo $dados2[$i]["id"]; ?>"><i class="fa-solid fa-pen-to-square" style="color: #eeb249;"></i></button>
            <?php
    echo "</td>";

    echo "<td class=\"TabelaAdmTd\">";
?>

<button style="background-color:transparent; display:block; border:none;" onclick="confirmDeleteSubmenu(<?php echo $dados2[$i]['id'];?>)" id="ex<?php echo $dados2[$i]["id"]; ?>" ><i class="fa-solid fa-trash-can" style="color: #5b5757;"></i></i></button>


<button style="background-color:transparent; display:none;  border:none;"  onclick="css2(this.value)" id="cancel<?php echo $dados2[$i]["id"]; ?>" type="button" value= "<?php echo $dados2[$i]["id"]; ?>"><i class="fa-solid fa-circle-xmark" style="color: #b71f1f;"></i></button>

            <?php
    echo "</td>";

    echo "</tr>";

} ?>
      

</table>

    </div>
    <?php

if(isset($_REQUEST["msg"])){

 $cod = $_REQUEST["msg"];
 require_once "../model/msg.php";
echo "<script>alert('" . $MSG[$cod] . "');</script>";

}
     
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
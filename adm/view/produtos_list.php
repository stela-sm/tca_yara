<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../favicon/yara.ico" type="image/x-icon"><link rel="shortcut icon" href="../favicon/yara.ico" type="image/x-icon">

    <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/produtos_list_style.css">
    <title>Yara</title>
    <script>
        function confirmDelete(id){
            var resp = confirm("Produtos não podem ser deletados, deseja transformá-lo em inativo?");
            if(resp==true){
                    location.href="../controller/controller_adm.php?produto_delete=1&id="+id;
            }else{
                return null;
            }
        }
        </script>
</head>
<body class="fade-in">
    <style>
        table{
          width: 100vw;
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


         .fade-in-title {
    opacity: 0;
    animation: fadeIn 0.6s ease-in forwards;
    animation-delay: 0.3s; 
  }
  
  .fade-in {
    opacity: 0;
    animation: fadeIn 0.5s ease-in-out forwards;
  }
  
  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }}     
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
         .submit-button:hover>i, .icon:hover>i{
          color: #B9C394 !important;
          transition: 0.1s;
         }
         i{
          transition: 0.2s;
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
 .nomecampo{
  min-width: 6cm !important;
 }
    </style>
    
<form action="produtos_list.php" onsubmit="preventSubmit(event)" method="get" name="search_form">
    <div class="container">
        <div class="icon"> <?php if(($_GET["campo"]=="")){echo "<i class=\"fa-solid fa-magnifying-glass\"></i>";}else{echo "<button class=\"x_button\"name=\"campo\" value=\"\"><i class=\"fa-solid fa-x\"></i></button>";} ?></div>
        <input type="hidden" name="tabela" value="adm">
        <input type="text" name="search" <?php if(isset($_GET["campo"])&&$_GET["campo"]!=""){echo "value=\"".$_GET["search"]."\"";} else{echo"";}?>class="search-input" placeholder="Pesquisar...">
        <button name="campo" value="ID_PRODUTO"class="submit-button"><i class="fa-solid fa-fingerprint" data-toggle="tooltip" data-placement="right" title="ID" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="nome" class="submit-button"><i class="fa-solid fa-n" data-toggle="tooltip" data-placement="right" title="Nome" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="instrucao" class="submit-button"><i class="fa-solid fa-thumbtack" data-toggle="tooltip" data-placement="right" title="instrucao" style="color: #1A3D1F;"></i></button>
       
        <button name="campo" value="estoque" class="submit-button"><i class="fa-solid fa-truck-ramp-box" data-toggle="tooltip" data-placement="right" title="estoque" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="valor_uni" class="submit-button"><i class="fa-solid  fa-brazilian-real-sign" data-toggle="tooltip" data-placement="right" title="preço" style="color: #1A3D1F;"></i></button>
       
        <button name="campo" value="datahora" class="submit-button"><i class="fa-solid fa-calendar" data-toggle="tooltip" data-placement="right" title="data" style="color: #1A3D1F;"></i></button>
        <button name="campo" value="status" class="submit-button"><i class="fa-solid fa-signal" data-toggle="tooltip" data-placement="right" title="Status" style="color: #1A3D1F;"></i></button>
      
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
$dados = listaProdutos($pesquisa);

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
            <th class="TabelaAdmTh">Nome</th>     
            <th class="TabelaAdmTh">Estoque</th>
            <th class="TabelaAdmTh">Preço</th>
            <th class="TabelaAdmTh">Datahora</th>
            <th class="TabelaAdmTh">Status </th>
            <th class="TabelaAdmTh"><a href="produto_new.php"><i class="fa-solid fa-circle-plus" style=" color:  #4da037;"></i></a></th>
            <th class="TabelaAdmTh">&nbsp;</th>
        </tr>
        <?php
        for($i=1;$i<=$dados["num"];$i++){
         
            echo"<tr><form  name=\"formEdit\" action=\"../controller/controller_adm.php\" method=\"post\">";

            echo "<input type=\"hidden\" name=\"produto_edit\" value=\"".$dados[$i]["id"] ."\">";
            
            echo "<input type=\"hidden\" id=\"idget".$dados[$i]["id"]."\"name=\"id\" value=\"".$dados[$i]["id"]."\">";



            echo "<td class=\"TabelaAdmTd\">". $dados[$i]["id"]."</td>";
            
            echo "<td class=\"TabelaAdmTd \"> <input type=\"text\"  class=\"nomecampo\" id=\"classe".$dados[$i]["id"]."\"  disabled name=\"nome\" value=\"". $dados[$i]["nome"] ."\"></td>";
            
          
            

           


            echo "<td class=\"TabelaAdmTd\"> <input type=\"text\"  id=\"classe".$dados[$i]["id"]."\" disabled name=\"estoque\" value=\"". $dados[$i]["estoque"] ."\"></td>";

            echo "<td class=\"TabelaAdmTd\"> <input type=\"text\"  id=\"classe".$dados[$i]["id"]."\" disabled name=\"valor\" value=\"". $dados[$i]["valor"] ."\"></td>";

        
           




            echo "<td class=\"TabelaAdmTd data\"> <input disabled value=\"". $dados[$i]["datahora"] ."\"></td>";
            




            echo "<td class=\"TabelaAdmTd\"> <select disabled name=\"status\" id=\"classe".$dados[$i]["id"]."\"> 
            
            <option value=\"1\""; if($dados[$i]["status"]==1){
                echo "selected";} echo ">Ativo</option><br>

            <option value=\"0\""; if($dados[$i]["status"]==0){
                echo "selected";} echo ">Inativo</option><br>


</select></td> <td class=\"TabelaAdmTd\">";
            ?>

<button style="background-color:transparent; display: none; border:none;"  onclick="css(this.value)" id="confirma<?php echo $dados[$i]["id"];?>" type="submit" class="confirm" value= "<?php echo $dados[$i]["id"];?>"><i class="fa-solid fa-circle-check" style="color: #4da037;"></i></button>
</form>


<button style="background-color:transparent; display:block; border:none;"  onclick="css(this.value)" id="edit<?php echo $dados[$i]["id"];?>" type="button" value= "<?php echo $dados[$i]["id"];?>"><i class="fa-solid fa-pen-to-square" style="color: #B9C394;"></i></button>
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
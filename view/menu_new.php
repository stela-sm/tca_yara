<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yara | Adminstração</title>
</head>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
    @import url('https://fonts.cdnfonts.com/css/glacial-indifference-2');
    :root{
        --white: #f9f9f9;
        --green: #1A3D1F;
        --yellow:  #eeb249;
    --lgreen: #B9C394;
    }
    body {
      margin: 0;
      padding: 0;
      width: 100vw;
     background-color: transparent;
     align-items: center;
     justify-content: center;
     display: flex;
     font-family: 'Glacial Indifference';
   overflow-x: hidden;
    }
        
        .yellow{
        height: 2.5em;
        text-align: center;
        font-weight: 800;
        width: 100%;
        background-color: var(--yellow);
        color: var(--white);
        border-radius: 10px;
        border: none;
      text-transform: uppercase;
     
    }
    th, td {
    
    padding: 8px;
  }

  .double-input-cell {
    vertical-align: top;
  }

  label{
    padding-top: 2em;
    margin-right: 63%;
  }
  table, tbody{
   
    border-radius: 20px;
    border-collapse: collapse;
    width: 100vw;
    font-size: 1em;
  }
  input[type=text],input[type=number], select, option{
        border-radius: 5px;
        width: 70%;
        background-color: #DDDDDD;
        border: none;
        padding: 5px 10px 5px 10px ;
    }
  table, tbody, th, tr, td{
    border: none;
  } 
  th,tr,td{
    width: 50%;
  }
  tr{
    padding-top: 50px;
  }
  .a{
    padding: 0px;
text-align: right;
width: 92%;
position: absolute;
  }
  .right{
    text-align: right;
  }
  .replicalabel{
    padding-top: 4em;
    width: 100%;
  }
  .replicalabel2{
    padding-top: -5em;
    width: 100%;
  }
  .cancelar{
        text-decoration: underline;
        color: #1A3D1F;
        font-size: 1em;
        transition: 0.2s;
        padding-left: 2em;        
      padding-top: 3em;
      background-color: transparent;
        margin: 0;
        border: none;
    }
    .adicionar{
      padding-top: 3em;
        text-decoration: underline;
        color: var(--yellow);        
        font-size: 1.1em;
        transition: 0.2s;
        padding-right: 3em;
        background-color: transparent;
        margin: 0;
        border: none;
    }
    .adicionar:hover, .cancelar:hover{
        
        cursor: pointer;
        transform: scale(1.1);
        transition: 0.2s;
    }
    .cancelar:hover{
        color: #1A3D1F;
    }

    </style>
</head>
<body>
<form action="../controller/controller_adm.php" method="post" class="form ">
   

<?php
if(isset($_GET["menu_new"])){ ?>
 <input type="hidden" name="menu_new" value="1">
     <table>
        <thead>
            <tr>
                <th colspan="2" class="yellow" align="center">Novo Menu</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="right">
    <label for="nome" class="label">Nome</label><br>
    <input type="text" name="nome" id="" placeholder="Nome do submenu..." required class="input"></td>

                <td><label for="status" class="label">Status</label>
<br>  <select id="status" class="input" name="status">
    <option value="1">Ativo</option>
    <option value="0">Inativo</option>
  </select>
         </td>
            </tr>
            <tr>
                <td class="right"> <label for="nome" class="label">URL</label><br>
        <input type="text" name="url" id="" placeholder="pagina.php" required class="input"></td>
                <td><label for="replica" class="replicalabel"><input type="checkbox" name="replica" value="1" id="replica" checked>Replicar ajustando para todos os folders</label></td>
            </tr>
            <tr>
                <td align="left"><button class="cancelar"><a href="menus_list.php" class="cancelar">Cancelar</a></button></td>
                <td align="right"><button type="submit" class="adicionar">Adicionar</button></td>
            </tr>
        </tbody>
    </table>    
  
  
  <?php }else if(isset($_GET["submenu_new"])){
    
    require_once "../model/manager.php";
$dados=  listaMenu();
    ?>
    
 <input type="hidden" name="submenu_new" value="1">
       <table>
        <thead>
            <tr>
                <th colspan="2" class="yellow" align="center">Novo Submenu</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="right">
    <label for="nome" class="label">Nome</label><br>
    <input type="text" name="nomesub" id="" placeholder="Nome do menu..." required class="input"></td>

                <td><label for="status" class="label">Status</label>
<br>  <select id="status" class="input" name="status">
    <option value="1">Ativo</option>
    <option value="0">Inativo</option>
  </select>
         </td>
            </tr>
            <tr>
                <td class="right"> <label for="nome" class="label">URL</label><br>
        <input type="text" name="url" id="" placeholder="pagina.php" required class="input"></td>

                <td>
                  <label for="idmenu" class="label">Menu</label><br>
                  <select name="idmenu" id=""> <?php
$nome="";
if (isset($dados['num']) && $dados['num']!='0'){
for($i=1;$i<$dados['num'];$i++){
    if($nome != $dados[$i]["nome"]){
        echo "<option value='{$dados[$i]['id']}'>{$dados[$i]['id']} - {$dados[$i]['nome']}</option>";}

        $nome = $dados[$i]["nome"];
        
}
}
?>
</select></td>
            </tr>
            <tr class="a"><td class="a"><small><label for="replica" class="replicalabel2"><input type="checkbox" name="replica" value="1" id="replica" checked>Replicar ajustando para todos os folders</label></small></td></tr>
            <tr>
                <td align="left"><button class="cancelar"><a href="menus_list.php" class="cancelar">Cancelar</a></button></td>
                <td align="right"><button type="submit" class="adicionar">Adicionar</button></td>
            </tr>
        </tbody>
    </table>    
  
    <?php } ?>
</form>
</body>
</html>

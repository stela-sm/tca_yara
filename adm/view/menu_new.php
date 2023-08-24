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
   <link rel="stylesheet" href="css/menu_new_style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yara | Adminstração</title>

    
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


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
   
      <script src="js/adm_js.js"></script>
      <title>Yara | Painel</title>
   </head>
    <script>
        
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})
        </script>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap");
@import url("https://fonts.cdnfonts.com/css/glacial-indifference-2");
:root {
    --white: #f9f9f9;
    --green: #1a3d1f;
    --yellow: #B9C394;
} 
body {
  width: 99vw;
    margin: 0;
    padding: 0;
    display: block;    
    font-family: 'Glacial Indifference';
  }
  
  table {
    width: 70vw;
    border-collapse: collapse;
    table-layout: auto;
    border-radius: 20px;
    overflow: hidden;
    border-radius: 10px;
    font-family: 'Glacial Indifference';
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border: none;
    height: 100vh;
  }
  th, td, tr {
      
      font-size: 1em;
    padding: 10px;
    text-align: center;
    align-items: center;
   
    width: fit-content;
  }
  
  #yellow{
    height: 2em;
    text-align: center;
    font-weight: 800;
    min-width: 99.9vw;
    background-color: var(--yellow);
    color: var(--white);
    border-radius: 10px;
  text-transform: uppercase;
  }
  .label{
    text-align: left ;
    width: 70%;
}
  td.common-header {
    text-align: center;
    
  }
  td.first-column {
    text-align: right;
    
  }
  
  td.thirs-column {
    text-align: center;
    
  }
  td.second-column {
    text-align: left;
  }
  td.text{

    text-align: left;
  }
  #firstline{
    padding: 30px;
  }
  

.input, select, option{
    border-radius: 5px;
    width: 70%;
    background-color: #DDDDDD;
    border: none;
    padding: 5px 10px 5px 10px ;
}

.cancelar{
    text-decoration: underline;
    color: #1A3D1F;
    font-size: 1.1em;
    transition: 0.2s;
    padding-left: 3em;
}
.adicionar{
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

.padding{
  padding-top: 2em;
  padding-bottom: 2em;
}
</style>
</head>
<body>
<form action="../controller/controller_senha.php" method="post" class="form ">

<table>
  <tr>
  <td class="common-header" id="yellow" colspan="3">Alteração de senhas</td>
  </tr>
  <?php if(!isset($_REQUEST["fase"])){ ?>
    <input type="hidden" name="verif_tel" id="verif_tel" value="1">
  <tr>
  <td class="text" id="firstline" colspan="3">Bem vindo à área de alteração de senhas! Por favor, informe qual o tipo do usuário que deseja alterar a senha, seu CPF e seu número de telefone. </td>
  </tr>
  <tr>
  <td class="padding first-column"> 
        <label for="nome" class="label">Tipo de usuário</label>
                  <br>
                  <select id="tabela" class="input" name="tabela">
                    <option value="adm">Administrador</option>
                    <option value="cliente">Cliente</option>
                  </select>
                
    <td class="padding third-column">
    <label for="nome" class="label">CPF do usuário</label>
                  <br>
                  <input type="text" name="cpf" id="" placeholder="Ex. 12345678910" required class="input">
    </td>
    <td class="padding second-column">
    <label for="nome" class="label">Telefone celular </label>
                  <br>
                  <input type="text" name="celular" id="" placeholder="Ex. 12345678910" required class="input">
   
    </td>
  </tr>
  <tr>
    <td colspan="2"></td>
    <td class="first-column"> <button type="submit" class="adicionar">Solicitar alteração</button></td>
  </tr>

  </form>


  <?php } else if (isset($_REQUEST["fase"]) && ($_REQUEST["fase"]==1)){ ?>
  
    <input type="hidden" name="verif_cod" id="verif_cod" value="1">
    <tr>
  <td class="text" id="firstline" colspan="1">Agora, confirme o código enviado para o número {$numero}.</td>
  </tr>
  <tr class="third-column">
  
                
    <td class="padding third-column">
    <label for="nome" class="label">Código de verificação</label>
                  <br>
                  <input type="text" name="nome" id="" placeholder="Ex. 12345678910" required class="input">
    </td>
   
  </tr>
  <tr>
    <td class="second-column" colspan="2"><a class="cancelar">Reenviar</a></td>
    <td class="first-column"> <button type="submit" class="adicionar">Confirmar</button></td>
  </tr>
  
  </form>

  <?php  } if (isset($_REQUEST["fase"]) && ($_REQUEST["fase"]==2)){ ?>
  
    <input type="hidden" name="senha_edit" id="senha_edit" value="1">
    <tr>
  <td class="text" id="firstline" colspan="2">Insira a nova senha, e pronto!</td>
  </tr>
  <tr class="third-column">
  
                
  <td class="padding third-column">
    <label for="nome" class="label">Nova senha</label>
                  <br>
                  <input type="text" name="nome" id="" placeholder="Ex. 12345678910" required class="input">
    </td>
    <td class="padding second-column">
    <label for="nome" class="label">Confirme a nova senha</label>
                  <br>
                  <input type="text" name="nome" id="" placeholder="Ex. 12345678910" required class="input">
   
    </td>
   
  </tr>
  <tr>
    <td class="second-column" colspan="2"></td>
    <td class="first-column"> <button type="submit" class="adicionar">Confirmar</button></td>
  </tr>
  
  </form>

  <?php } ?>
</table>
<?php

if(isset($_REQUEST["msg"])){

 $cod = $_REQUEST["msg"];
 require_once "../model/msg.php";
echo "<script>alert('" . $MSG[$cod] . "');</script>";

}

?>
</body>
</html>

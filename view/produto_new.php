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
   text-align: center;
    }
    .table-container {
        
      width: 100vw;
      width: 100%;
      display: table;
      border-collapse: collapse;
    }

    .table-row {
      display: table-row;
    }

    .table-cell {
      display: table-cell;
      padding: 10px;
    }

    .align-left {
      text-align: left;
    }

    .align-right {
      text-align: right;
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
    .container, .form{
        max-width: none;
        width: 100vw;
        align-items: center;
        justify-content: center;

    }
    .p, .table-container{
        margin-top: 0.5em;
    }
    .label{
        text-align: left;
        width: 70%;
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

  </style>    


<!DOCTYPE html>
<html>
<head>
<style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
  }

  .double-input-cell {
    vertical-align: top;
  }

  input {
    width: 45%; /* Defina a largura dos campos */
    box-sizing: border-box;
  }
</style>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<style>
  table {
    border-collapse: collapse;
    width: 100%;
    font-size: 0.8em;
  }

  table, th, td, .double-input {
    text-align: center;
    align-self: center;
    align-items: center;
    justify-content: center;
    border: none;
  }

  th, td, .double-input{
    padding: 10px;
    text-align: center;
    width: 5cm;
  }


  .common-header {
    height: 2.5em;
        text-align: center;
        font-weight: 800;
        width: 100%;
        background-color: var(--yellow);
        color: var(--white);
        border-radius: 10px;
        border:none;
      text-transform: uppercase;
  }
textarea{
  resize: none;
}
input[type="file"] {
    display: none;
}
.double-input {
    display: flex;
    justify-content: space-between;
    text-align:center; 
  }

  .double-input input {
    width: 48%; /* Distribui o espaço igualmente para os dois campos */
  }
  .size{
    max-width: 30%;
    margin-top: 10%;
    cursor: pointer;
    transition: 0.2s;
  }
  .size:hover{
    background-color: var(--lgreen);
    transition: 0.2s;
  }
  </style>
</head>
<body>
<form action="../controller/controller_adm.php" method="post" class="form" enctype="multipart/form-data">
    <input type="hidden" name="produto_new" value="1">
<table>
<thead>
    <tr>
      <th class="common-header" colspan="3">Novo Produto</th>
    </tr>
  </thead>
  <tr>
    <td>
    <label for="nome" class="label">Nome</label><br>
        <input type="text" name="nome" id="" placeholder="Nome do produto..." required class="input">
    </td>
    <td>
      <label for="categoria" class="label">Categoria</label><br>
    <select  required class="label"><br>
        <option  name="categoria" value="1" class="input">Sérum</option></textarea>
</select>
    </td>
    <td>
      <p><label class="input size" style="
    margin-right: 10%;" for="img">Imagem</label><label class="input size" for="img_hover">Hover</label></p>
      <input type="file" name="img" required id="img">
      <input type="file" name="img_hover" required id="img_hover">
    </td>
  </tr>
  <tr>
    <td> <label for="nome" class="label">Descrição</label><br>
        <textarea  name="descricao" id="" placeholder="Descrição do produto..." required class="input"></textarea>
    </td>
    <td> <label for="categoria" class="label">Finalidade</label><br>
    <select  required class="label"><br>
        <option  name="categoria" value="1" class="input">Pele Acneica</option></textarea>
</select>
    </td>
    <td> <label for="nome" class="label">Preço</label><br>
        <input type="text" name="preco" id="" placeholder="99,99..." required class="input"></td>
  </tr>
  <tr>
    <td>  <label for="nome" class="label">Ingredientes</label><br>
        <textarea  name="ingredientes" id="" placeholder="Ingredientes do produto..." required class="input"></textarea>
    </td>
    <td> <label for="nome" class="label">Estoque</label><br>
        <input type="text" name="estoque" id="" placeholder="Ex.: 387..." required class="input"></td>
   
    <td> <label for="status" class="label">Status</label>
  <select id="status" class="input" name="status">
    <option value="1">Ativo</option>
    <option value="0">Inativo</option>
  </select></td>
  </tr>
  </tr>
  <tr>
    <td class="two-columns align-left" colspan="2"><a href="produtos_list.php" class="cancelar">Cancelar</a></td>
    <td class="two-columns align-right" colspan="2"><button type="submit" class="adicionar">Adicionar</button></td>
  </tr>
</table>
</form>
</body>
</html>

</html>

</html>
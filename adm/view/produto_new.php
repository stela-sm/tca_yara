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
   <link rel="stylesheet" href="css/produto_new_style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yara | Adminstração</title>
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
    <td> <label for="nome" class="label">Instruções</label><br>
        <textarea  name="instrucao" id="" placeholder="Instruções de uso..." required class="input"></textarea>
    </td>
    <td>
      <label class="input size" style="min-width: 70%;" for="img">Imagem</label>
      <input type="file" name="img" required id="img">
    </td>
  </tr>
  <tr>
    <td> <label for="nome" class="label">Descrição</label><br>
        <textarea  name="descricao" id="" placeholder="Descrição do produto..." required class="input"></textarea>
    </td>
    <td> <label for="nome" class="label">Preço</label><br>
        <input type="text" name="preco" id="" placeholder="99,99..." required class="input"></td>
  <td>
  <label  style="min-width: 70%" class="input size" for="img_sec">Secundária</label>
  <input type="file" name="img_sec" required id="img_sec">
  </td>
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!DOCTYPE html>
    <html lang="en">
      <head>
      <link rel="shortcut icon" href="../../favicon/yara.ico" type="image/x-icon"><link rel="shortcut icon" href="../favicon/yara.ico" type="image/x-icon">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/adm_new_style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Yara | Adminstração</title>
      </head>
      <style>
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
      </style>
      
      <body class="fade-in">
        
      <form action="../controller/controller_adm.php" method="post" class="form ">
        <input type="hidden" name="adm_new" value="1">
        <div class="container">
          <div class="row ">
            <div class="yellow ">
              <p class="p ">Novo Administrador</p>
            </div>
          </div>
          <div class="row">
            <div class="table-container">
              <div class="table-row">
                <div class="table-cell align-right">
                  <label for="nome" class="label">Nome</label>
                  <br>
                  <input type="text" name="nome" id="" placeholder="Seu nome..." required class="input">
                  <br>
                  <br>
                  <label for="cpf" class="label">CPF</label>
                  <br>
                  <input type="text" name="cpf" id="" placeholder="Ex. 12345678910..." required class="input">
                </div>
                <div class="table-cell align-left">
                  <label for="nome" class="label">Senha</label>
                  <br>
                  <input type="password" name="senha" id="" required minlength="6" placeholder="Min. 6 caracteres" class="input">
                  <br><br>
                  <label for="poder" class="label">Poder</label>
                  <select id="poder" class="input" name="poder">
                    <option value="1">1 - Operador</option>
                    <option value="2">2 - Setorizado</option>
                    <option value="3">3 - Subgerente</option>
                    <option value="4">4 - Gerente</option>
                    <option value="5">5 - Sysop</option>
                  </select>
                </div>
              </div>
              <div class="table-row">
                <div class="table-cell align-right">
                  <label for="nome" class="label">Email</label>
                  <br>
                  <input type="email" name="email" placeholder="Seu email..." required id="" class="input">
                </div>
                <div class="table-cell align-left">
                <label for="status" class="label">Status</label>
                  <select id="status" class="input" name="status">
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                  </select>
                </div>
              </div>
              <div class="table-row">
                <div class="table-cell align-right">
                  <label for="nome" class="label">Telefone (celular)</label>
                  <br>
                  <input type="text" name="telefone" id="" placeholder="(DDD)9xxxxxxxx" required class="input">
                </div>
                <div class="table-cell align-left">
               
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="table-container">
              <div class="table-row">
                <div class="table-cell align-left ">
                  <a href="adm_list.php" class="cancelar">Cancelar</a>
                </div>
                <div class="table-cell align-right ">
                  <button type="submit" class="adicionar">Adicionar</button>
                </div>
              </div>
            </div>
          </div>
      </form>
      </body>
    </html>
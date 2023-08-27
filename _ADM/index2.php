<!DOCTYPE html>
<html lang="pt-br">
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yara | Home</title>
</head>
<body>
    <style>
        a{
            text-decoration: none;
        }
        li, ul{
            list-style: none;
        }
        </style>
  <nav class="navbar navbar-expand-lg  ">
    <div class="container">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
       
      <?php
                            require_once "model/manager.php";
                            $dados= pegaMenusSubmenus("r"); //chama função dos menus com a folder "r"
                            $dadosSUB = pegasubmenu("r"); //chama função dos submenus com a folder "r"
                           
                           if(isset($dados["result"]) && $dados["result"] != 0){  // se vier resultado da função dos menus

                            $ii=0; //variavel ii (contagem de submenus) = 0 
                            //enquando i for menor que a quantidade de menus...
                            for($i = 0;$i<$dados["num"];$i++){
                              echo "<div class=\"nav-item\">
                              <div class=\"dropdown\">
                              <li class=\"nav-item\">
                              <button class=\"nav-link active-link\"><span
                                      class=\"nav-link greenwhite\"><a style='color:black; text-decoration:none;' href=''".$dados[$i]["URL_MENU"]."'>".$dados[$i]["NOME_MENU"]."</a></span></button>
                          </li>
                          <div class=\"dropdown-content\">";

                              for($count = 0; $count < $dadosSUB["num"] ; $count++){
                                if($dados[$i]["ID_MENU"] == $dadosSUB[$count]["ID_MENU_FK"] && $count<$dados["num"] ){
                                  echo"
                                  
                                  <a style='color:black; text-decoration:none;' href='".$dadosSUB[$count]["URL_SUBMENU"]."'>".$dadosSUB[$count]["NOME_SUBMENU"]."</a> </br>
    
                             
                                          
                                  "; // echo do dropdown
                                
                                
                                } //fecha if
                              }echo"</div></div></div>";
                            }
                            }
                    
                          
                           ?>
         
        </div>
    </div>
  </nav>
  <style>.scroll-content/* Estilos para o dropdown */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Estilo para o ícone */
.dropdown-icon {
    cursor: pointer;
}
</style>
  <!-- Adicione os links para os arquivos JavaScript do Bootstrap e jQuery -->
  <script src="caminho-para-o-jquery.min.js"></script>
  <script src="caminho-para-o-bootstrap.min.js"></script>
</body>
</html>

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
                            for($i = 0;$i<$dados["num"];$i++){ //enquando i for menor que a quantidade de menus...
                            
                              
                              if($dados[$i]["ID_MENU"] == $dadosSUB[$ii]["ID_MENU_FK"] && $ii<$dados["num"] ){ //...verifique SE os IDs batem e se ii permanece menor que a quantidade de submenus 

                                echo "<li class='nav-item dropdown'> 
                                  <a class='nav-link dropdown-toggle' href=''".$dados[$i]["URL_MENU"]."' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                  ".$dados[$i]["NOME_MENU"]."
                                  </a>
                                  <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                                  <a class='dropdown-item' href='".$dadosSUB[$ii]["URL_SUBMENU"]."'>".$dadosSUB[$ii]["NOME_SUBMENU"]."</a>                      
                                  "; // echo do dropdown
                                  
                                  $ii=$ii+1; //soma 1 à variavel de contagem de submenu
                                 
                                } //fecha if
                              

                              else{ //mas se os IDs não batem, ou todos os submenus já foram impressos, então...
                            
                              echo "<li class='nav-item active'>
                            <a class='nav-link' href='".$dados[$i]["URL_MENU"]."'>".$dados[$i]["NOME_MENU"]."</a>
                          </li> ";  //imprime link sem dropdown

                              }//fecha else
                        }//fecha for
                           
                      }//fecha if
                           
                          
                           ?>
         
        </div>
    </div>
  </nav>

  <!-- Adicione os links para os arquivos JavaScript do Bootstrap e jQuery -->
  <script src="caminho-para-o-jquery.min.js"></script>
  <script src="caminho-para-o-bootstrap.min.js"></script>
</body>
</html>

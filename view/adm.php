<?php
session_start();
?>
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
   
    <title>Yara | Painel</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
    @import url('https://fonts.cdnfonts.com/css/glacial-indifference-2');
    :root{
        --white: #f9f9f9;
        --green: #1A3D1F;
        --yellow:  #eeb249;
    }
    body{
      background-color: #f9f9f9;
        height: 100%;
        margin: 0;
        background-image: url(media/yara_bg.png);
        background-repeat: no-repeat;
        background-size: contain;
        background-attachment: fixed;
        
    }
    .painel, .menu{
       
        padding-left: 5%;
        padding-right: 5%;
        padding-top: 2%;
        
    }
    header{
      
      padding-left: 3%;
        padding-right: 3%;
        padding-top: 2%;
    }
    .menu, .painel{
font-family: 'Glacial Indifference', sans-serif;
color: var(--green);

    }
    .painel{
        padding: 20px;
        background-color: var(--white);
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    width: 90%;
    border-radius: 20px;
        height: 50vh ;
        margin-top:-2em;}
        
    .menubar{
        background-color: var(--white);
        padding-top:20px;
        padding-bottom:20px;
        border-radius: 20px;
        height: 50vh ;
        margin-top:-2em;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    }
   .nav> .nav-link{
        color: var(--green);
    }
    .navbar-brand, .nav-link{
        color:var(--white);
        font-family: 'Berkshire Swash', cursive;
    }
    .navbar-brand{
        font-size: 3.5em;
    }
    .nav-link{
        font-size: 1.3em;
        font-family: 'Glacial Indifference', sans-serif;;
    }
    .titulo{
        color: var(--white);
        height: 30vh;
        vertical-align: middle; display: table-cell;
        position: relative;
    }
    .title{
        font-family: 'Berkshire Swash', cursive;
        font-size: 3.3em;
        padding-top: 1.5em;
    
    }
    .subtitle{
        font-size: 1.8em;
        margin-top: -1em;
        font-family: 'Glacial Indifference', sans-serif;
    }
    #voltar{
        background-color: var(--white);
        font-family: 'Glacial Indifference', sans-serif;
        padding: 15px 20px 15px 20px;
        font-size: 1.3em;        
        width: 100%;
        border: none;
        border-radius: 30px;
        margin-top: -1.7em;
        margin-right: 1.2em;

    }
    i{
        margin-right: 0.5em;
    }
    .active{
color: #eeb249;
    }

    iframe{
      width: 100%;
      height: 100%;
    }
    .link2{
      display:none;
    }

    @media screen and (max-width: 1739px) {
      #voltar{
        background-color: var(--white);
        font-family: 'Glacial Indifference', sans-serif;
        padding: 15px 20px 15px 20px;
        font-size: 1em;
        border: none;
        width: 100%;
        border-radius: 30px;
        margin-top: -1.7em;
        margin-right: 1.2em;

    }   .nav-link{
        font-size: 1.1em;
        font-family: 'Glacial Indifference', sans-serif;;
    }
   
    }

    @media screen and (max-width: 1520px) {
       .nav-link{
        font-size: 1.6em;
        font-family: 'Glacial Indifference', sans-serif;
        padding-left: 1em;
    }
    .link1{
      display:none;
    }
    .link2{
      display: block;

      margin-bottom: 5%;
      
    }
    
      
    .menubar{
        background-color: var(--white);
        padding-top:20px;
        padding-bottom:20px;
        height: fit-content;
        border-radius: 20px;
        justify-content: center;
        align-items: center;
        display: flex;
        margin-top:-2em;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    }
  .flex-column{
    display: flex;
  }
    
  .icon{
    margin-right: -1cm;
    font-size: 0.6em;
  }
  }
  @media screen and (max-width: 1300px) {
  body{
        height: 100%;
        margin: 0;
        background-image: url(media/yara_bg.png);
        background-repeat: no-repeat;
        background-size: auto;
        background-attachment: initial;
        
        
    }
  
  .icon{
    margin-right: -1cm;
    font-size: 0.6em;
  }
.menubar, .painel{
  margin-top: -3em;
}
.subtitle{
        font-size: 1.4em;
        margin-top: -1em;
        font-family: 'Glacial Indifference', sans-serif;
    }
}

  @media screen and (max-width: 671px) {
    .link2{
        font-size: 1.5em;
        font-family: 'Glacial Indifference', sans-serif;
        padding-left: 1em;
        margin-bottom: 10%;
    }
    #voltar{
       display: none;

    }
    .title{
        font-family: 'Berkshire Swash', cursive;
        font-size: 3.1em;
        padding-top: 1.5em;
    
    }
    .subtitle{
        font-size: 1.3em;
        margin-top: -1em;
        font-family: 'Glacial Indifference', sans-serif;
    }

  }

  @media screen and (max-width: 360px) {
    .col-1{
      display: none;
   
    }
  }
  .col-10{
    margin-left: 0.5cm;
    }
  .col-2{
    margin-left: -0.5cm;
  }
    </style>
<body>
    <header>
      <nav class="navbar">
        
        <a class="navbar-brand" href="#">Y.</a>

        <ul class="nav justify-content-end">
           
            <li class="nav-item icon">
              <a class="nav-link" href="#"><i class="fa-solid fa-circle-user fa-2xl" style="color: #f9f9f9;"></i></a>
            </li>
          
          </ul>
        </ul>
      </nav>
      <div class="container-flex">
        <div class="row d-flex  ">
        <div class="col-10  titulo">
        <p class="title d-flex ">
           <span class="ola"> Olá, Stela! </span><br>
            <p class="subtitle"> Este é o seu painel administrativo</p>
        </p>
    </div>
    <div class="col-2 d-flex justify-content-end align-items-center">
        <button id="voltar">Voltar </button>
    </div>
      </div>
    </div>
    </header>

    <div class="container-flex menu">
        <div class="row">
            <div class="col-2 menubar ">
                <ul class="nav flex-column " >
                    <li class="nav-item">
                      
                      <a target='iframe' style="color: var(--green);" class="link1 nav-link active" href="painel.php"><i class="fa-solid fa-house" style="color: #eeb249;"></i> Painel</a>
                      
                      
                      
                      <a  target='iframe' style="color: var(--green);" class="link2 nav-link active" href="painel.php"><i class="fa-solid fa-house" style="color: #eeb249;"></i></a>
                    </li>




<?php
if($_SESSION["ADM-PODER"]>=4){?>

                    <li class="nav-item">
                      <a target='iframe' style="color: var(--green);"  class="link1 nav-link menulink" href="adm_list.php"><i class="fa-solid fa-users fa-sm" style="color: #1A3D1F;"></i> Administradores</a>
                      
                      
                      <a target='iframe' style="color: var(--green);"  class="link2 nav-link menulink" href="adm_list.php"><i class="fa-solid fa-users fa-sm" style="color: #1A3D1F;"></i> </a>
                    </li>



                    <li class="nav-item">
                      <a target='iframe' style="color: var(--green);"  class="link1 nav-link menulink" href="senhas.php"><i class="fa-solid fa-key" style="color: #1A3D1F;"></i></i>Trocar senhas</a>
<?php 
}?>                      
                      
                      <a target='iframe' style="color: var(--green);"  class="link2 nav-link menulink" href="senhas.php"><i class="fa-solid fa-key" style="color: #1A3D1F;"></i></i></a>
                    </li>

                    <?php
if($_SESSION["ADM-PODER"]>=3){?>

                    <li class="nav-item">
                      <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink" href="menus_list.php"><i class="fa-solid fa-arrow-up-right-from-square" style="color: #1A3D1F;"></i>Menus e Submenus</a>

                      <a target='iframe'style="color: var(--green);" class="link2 nav-link menulink" href="menus_list.php"><i class="fa-solid fa-arrow-up-right-from-square" style="color: #1A3D1F;"></i></a>
                    </li>
                      <?php 
}?>                      
     



                    <li class="nav-item">
                        <a target='iframe' style="color: var(--green);"  class="link1 nav-link menulink" href="produtos_list.php"><i class="fa-solid fa-bag-shopping" style="color: #1A3D1F;"></i>Produtos</a>


                        <a target='iframe' style="color: var(--green);"  class="link2 nav-link menulink" href="produtos_list.php"><i class="fa-solid fa-bag-shopping" style="color: #1A3D1F;"></i></a>
                      </li>

                      <li class="nav-item">
                        <a target='iframe' style="color: var(--green);"  class="link1 nav-link menulink" href="vitrine_list.php"><i class="fa-solid fa-store" style="color: #1A3D1F;"></i>Vitrine</a>


                        <a target='iframe' style="color: var(--green);"  class="link2 nav-link menulink" href="vitrine_list.php"><i class="fa-solid fa-store" style="font-size: 0.8em;  color: #1A3D1F;"></i></a>
                      </li>


                      <?php
if($_SESSION["ADM-PODER"]>=2){?>

                      <li class="nav-item menulink">

                        <a target='iframe' style="color: var(--green);"  class="link1 nav-link menulink" href="pedidos_list.php"><i class="fa-solid fa-box" style="color: #1A3D1F;"></i>Pedidos</a>


                        <a target='iframe' style="color: var(--green);"  class="link2 nav-link menulink" href="pedidos_list.php"><i class="fa-solid fa-box" style="color: #1A3D1F;"></i></a>
                      </li>

                      <?php 
}?>          
                  </ul>
            </div>
            <div class="col-10 painel">
              <iframe src="iframe.html" name="iframe" scrolling="auto" id="iframe"frameborder="0">

              </iframe>
           
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
     body{
        margin: 0;
        background-image: url(view/media/yara_bg.png);
        background-repeat: no-repeat;
        background-size: contain;
        background-attachment: fixed;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;

    }
    .row{
        align-items: center;
        align-self: center;
        justify-content: center;
        display: flex;

    }
    .col-5{
        background-color: #f9f9f9;
        border-radius: 20px;
        border:none;
        
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        height: 80vh;
    }
    .adm, .row{
        font-family: 'Glacial Indifference';
        
    }
        .adm{
            font-size: 1.5em;
            margin-top: 10%;
           
        }
    .row{
        height: 26%;
    }
    .input{
        background-color: var(--lgreen);
        padding: 20px 25px 10px 25px;
        border: none;
        width: 60%;
        border-radius: 10px;

    }
    .title{
        font-family: 'Berkshire Swash';
        font-size: 2em;
        margin-right: 3%;
    }
    .cont{
        margin-top: 10%;
    }
    .es{
        margin-top: 15%;
      
    }
    .esqueci{
        text-decoration: underline;
        color: gray;
        text-transform: none;
    }
    .submit{
        color: var(--green);
        font-size: 1.3em;
        background-color: transparent;
        border: none;
        text-decoration: underline;
        
        transition: 0.2s;
    }
    .submit:hover{
        transform: scale(1.1);
        transition: 0.2s;
        cursor: pointer;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="row adm">
                   <span class="title"> Y.  </span>   Administração
                </div>
                
                <form action="controller/controller_adm.php">
                <div class="row">
                    <input type="text" name="email" class="input" placeholder="Seu email..">
                </div>
                <br>
                <div class="row">
                    <input type="password" name="senha" class="input" placeholder="Sua senha..">
                </div>
                <div class="row cont">
                    <button class="submit" type="submit">Continuar</button>
                </div>
                <div class="row es">
                    <a href="" class="esqueci">Esqueci a senha</a>
                </div>
                </form>
            </div>
        </div>
        </div>
</body>
</html>

    
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arapey:ital@0;1&family=Berkshire+Swash&family=Questrial&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Questrial&display=swap">
    <link href="../assets/style/meuperfil.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yara | Meu Perfil</title>
</head>
<body>
    <style>
        :root{
    --white: #f9f9f9;
    --green: #1A3D1F;
    --yellow:  #B9C394;
--lgreen: #B9C394;
}
    </style>
   
   <p id="title">Meu perfil</p>
   
    <style>
        body{
            padding-top: 1.5em;
            font-family: 'Questrial';
            max-width: 100%;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: none;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        #last{
            text-align: left;
        }
        .input_perfil{
            background-color: #dddddd;
            border: none;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
            padding: 10px;
            width: 50%;
            margin-right: 3em;
            border-radius: 5px;
        }
        .label{
            color:var(--green);
            padding-left: -1cm;
            width: 20%;
        }
        #title{
            font-weight: 700;
            text-transform: uppercase;
        }
        .submit{
            background-color: transparent;
    border-radius: 25px;
    border: 1px solid #1a3d1ffb;
    color: #1A3D1F;
    margin-top: 10px;
    box-shadow: none !important;
    outline: none !important;
    cursor: pointer;
    font-weight: bold;
    width: 60%;
padding: 10px;        
opacity: 0.7;
}
    </style>

    <?php
session_start();
    
    $_SESSION['nome'] = "Laura Barbara Cruz";
    $_SESSION['telefone'] = "11963220905";
    $_SESSION['cpf'] = "40527647810";
    $_SESSION['email'] = "laura@gmail.com";?>
    <form action="../controller/controller_client.php" name="update" method="post">
        <input type="hidden" name="update_dados" value="1">
<table>
    <tr>
        <td class="label">Nome Completo</td>
        <td><input type="text" name="nome" id="ipt1" class="input_perfil" disabled ondblclick="active(1)"  value="<?php echo $_SESSION['nome'] ?>"></td>
    </tr>
    <tr>
        <td class="label">CPF</td>
        <td><input type="text" name="nome" id="ipt2" class="input_perfil" disabled ondblclick="active(2)"  value="<?php echo $_SESSION['cpf']?>"></td>
    </tr>
    <tr>
        <td class="label"> Email</td>
        <td><input type="text" name="nome" id="ipt3" class="input_perfil" disabled ondblclick="active(3)"  value="<?php echo $_SESSION['email']?>"></td>
    </tr>
    <tr>
        <td class="label">Número de telefone</td>
        <td><input type="text" name="nome" id="ipt4" class="input_perfil" disabled ondblclick="active(4)" value="<?php echo $_SESSION['telefone']?>"></td>
    </tr>
    <tr>
        <td id="last"colspan="2"><button type="submit" class="submit">Salvar</button></td>
    </tr>
</table>
</form>
<script>
    function active(num){
        var ipt = document.getElementById("ipt"+num)
        ipt.disabled = false;

    }
</script>
</body>
</html>
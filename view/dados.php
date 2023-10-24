
    
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
            width: 80%;
            margin-right: 3em;
            border-radius: 5px;
            transition: 0.2s;
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
    width: 85%;
padding: 10px;        
opacity: 0.7;
}
    </style>

    <?php
session_start();
    
$_SESSION['id'] = "1";
    $_SESSION['nome'] = "Laura Barbara Cruz";
    $_SESSION['telefone'] = "11963220905";
    $_SESSION['cpf'] = "40527647810";
    $_SESSION['email'] = "laura@gmail.com";?>
    <form action="../controller/controller_client.php" name="update"id="meuForm" method="post">
        <input type="hidden" name="update_dados" value="<?php echo $_SESSION['id'] ?>">
<table>
    <tr>
        <td class="label">Nome Completo</td>
        <td><input type="text" name="nome" id="ipt1" class="input_perfil"  ondblclick="active(1)"  value="<?php echo $_SESSION['nome'] ?>"></td>
    </tr>
    <tr>
        <td class="label">CPF</td>
        <td><input type="text" name="cpf" id="ipt2" class="input_perfil"  ondblclick="active(2)"  value="<?php echo $_SESSION['cpf']?>"></td>
    </tr>
    <tr>
        <td class="label"> Email</td>
        <td><input type="text" name="email" id="ipt3" class="input_perfil" ondblclick="active(3)"  value="<?php echo $_SESSION['email']?>"></td>
    </tr>
    <tr>
        <td class="label">Número de telefone</td>
        <td><input type="text" name="telefone" id="ipt4" class="input_perfil"  ondblclick="active(4)" value="<?php echo $_SESSION['telefone']?>"></td>
    </tr>
    <tr>
        <td id="last"colspan="2"><button type="submit" onclick="verificarAlteracoes(event)"class="submit">Salvar</button></td>
    </tr>
</table>
</form>
<script>
    function active(num){
        var ipt = document.getElementById("ipt"+num)
        ipt.readOnly = false;
        ipt.style.backgroundColor = "#eee";
        ipt.style.opacity="1.0";
    }
   


    const campo1 = document.getElementById("ipt1");
      const campo2 = document.getElementById("ipt2");
      const campo3 = document.getElementById("ipt3");
      const campo4 = document.getElementById("ipt4");

      campo1.readOnly = true; // Define o campo como somente leitura
      campo2.readOnly = true;
      campo3.readOnly = true;
      campo4.readOnly = true;

      campo1.style.opacity="0.6";
      campo2.style.opacity="0.6";
      campo3.style.opacity="0.6";
      campo4.style.opacity="0.6";
    
      // Armazene os valores iniciais dos campos
      const valorInicialCampo1 = campo1.value;
      const valorInicialCampo2 = campo2.value;
      const valorInicialCampo3 = campo3.value;
      const valorInicialCampo4 = campo4.value;

    function verificarAlteracoes(event) {
      // Verifique se os valores foram alterados
      if (campo1.value === valorInicialCampo1 && campo2.value === valorInicialCampo2 && campo3.value === valorInicialCampo3 && campo4.value === valorInicialCampo4) {
        alert("Nenhum campo foi alterado.");
        event.preventDefault(); // Impede o envio do formulário
      }
    }
</script>
<?php
if(isset($_REQUEST["msg"])){
	$cod = $_REQUEST["msg"];
	require_once "../model/msg.php";
	echo "<script>alert('" . $MSG[$cod] . "');</script>";
    unset($cod);
}
?>
</body>
</html>
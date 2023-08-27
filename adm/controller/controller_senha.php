<?php




if(isset($_REQUEST["verif_tel"])){ //se vier do admNew (criar adm)
    $dados["tabela"] = $_REQUEST["tabela"];
    $dados["celular"] = $_REQUEST["celular"];
    $dados["cpf"] = $_REQUEST["cpf"];
    require_once "../model/manager.php";
    $resp=verificarDados($dados);
    if($resp["result"]==1){ //tudo certo
      

        require '../../PHPMailer-master/PHPMailer-master/src/Exception.php';
        require '../..//PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
        require '../../PHPMailer-master/PHPmailer-master/src/SMTP.php';
       

$para = "stelamontenegro@gmail.com";
$assunto = "Teste php";

// Corpo do e-mail usando HTML
$corpo = "<p> Olá Stela,</br>Seu código de verificação é: 124525</br>Use este código para concluir o processo de verificação.Ele é válido por 5 minutos.<br>Obrigado,<br>Equipe de Suporte Yara</p>";

// Crie uma instância do PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();;

try {
    // Configurações do servidor SMTP do Gmail
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'stelamontenegro3@gmail.com';
    $mail->Password   = '#stela0312';
    $mail->SMTPSecure = 'tls'; // Use 'ssl' se preferir
    $mail->Port       = 587;   // Use 465 se estiver usando SSL

    // Destinatário e remetente
    $mail->setFrom('stelamontenegro3@gmail.com', 'Seu Nome');
    $mail->addAddress('stelasmontenegro@gmail.com');

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = "Teste php";
    $mail->Body    = "<p> Olá Stela,</br>Seu código de verificação é: 124525</br>Use este código para concluir o processo de verificação.Ele é válido por 5 minutos.<br>Obrigado,<br>Equipe de Suporte Yara</p>";

    // Envie o e-mail
    $mail->send();
    echo "E-mail enviado com sucesso";
} catch (Exception $e) {
    echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
}

        ?>
        
    
        <?php  
    }else{//erro
        ?>
        <form action="../view/senhas.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="FR08">  <!--""BD02" => "Erro ao criar registro.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
        
    }
}

if(isset($_REQUEST["verif_cod"])){ //se vier do admNew (criar adm)
    $dados["tabela"] = $_REQUEST["tabela"];
    $dados["celular"] = $_REQUEST["celular"];
    $dados["cpf"] = $_REQUEST["cpf"];
    require_once "../model/manager.php";
    $resp=verificarDados($dados);
    if($resp==1){ //tudo certo
        ?>
        <form action="../view/senhas.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="fase" value="1">
        <input type="hidden" name="tabela" value="<?php echo $dados["tabela"] ?>">
        <input type="hidden" name="cpf" value="<?php echo $dados["cpf"] ?>">   <!--"BD50" => "Operação realizada com sucesso.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
    }else{//erro
        ?>
        <form action="../view/senhas.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="FR08">  <!--""BD02" => "Erro ao criar registro.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
        
    }
}


if(isset($_REQUEST["senha_edit"])){ //se vier do admNew (criar adm)
    $dados["tabela"] = $_REQUEST["tabela"];
    $dados["cpf"] = $_REQUEST["cpf"];
    require_once "../model/manager.php";
    require_once"../model/ferramentas.php";
    $senhaHASH = hash256($_REQUEST['senha']);
    $dados["senha"] = $senhaHASH;
    $resp= alteraSenha($dados);
    if($resp==1){ //tudo certo
        ?>
        <form action="../view/senhas.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="fase" value="1">  <!--"BD50" => "Operação realizada com sucesso.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
    }else{//erro
        ?>
        <form action="../view/senhas.php" name="form" id="myForm" method="POST">
        <input type="hidden" name="msg" value="FR08">  <!--""BD02" => "Erro ao criar registro.",-->
        </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
        <script>
        document.getElementById('myForm').submit();//envio automático submit()
        </script>
        <?php  
        
    }
}

     
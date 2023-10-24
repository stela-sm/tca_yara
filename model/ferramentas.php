<?php

function validaEmail($email){
	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return 1; // e-mail válido
	}else {
		return 0; // e-mail inválido
	}
}

function hash256($string){
	$res = hash('sha256', $string); // devolve 64 caracteres
	return $res;
}

function antiInjection($param){ 
	// verifica se informações de formulário possui injection
	$strParam = strlen($param);
    $palavras = array("from","select","insert","delete","where","drop","table","show","update","declare","exec","set","alter","cst","union","column","*","%","\"","'","\\","--");
    $palavras2 = array("FROM","SELECT","INSERT","DELETE","WHERE","DROP","TABLE","SHOW","UPDATE","DECLARE","EXEC","SET","ALTER","CST","UNION","COLUMN","*","%","\"","'","\\","--");
    $paramL = strtolower($param);
    $paramU = strtoupper($param);
    $str = str_replace($palavras,"",$paramL);
    $strParams = strlen($str);
    if($strParam != $strParams){
		return 0;
	}else{
		$str = str_replace($palavras2,"",$paramU);
		$strParams = strlen($str);
		if($strParam != $strParams){
		return 0; // dados inválidos (tentativa de injection)
	}else{
		return 1; // dados válidos
	}
	}
}



function geradorStringRandom($length){
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $var_size = strlen($chars);
    $random_str = "";
    for( $x = 0; $x < $length; $x++ ) {  
        $random_str .= $chars[ rand( 0, $var_size - 1 ) ];  
    }
    return $random_str;
}


function validaCPF($cpf) {
  
 
    // Elimina possível máscara
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    // Verifica se nenhuma das sequências inválidas abaixo
    // foi digitada. Caso afirmativo, retorna falso
    if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return 0;
     // Calcula os dígitos verificadores para verificar se o
     // CPF é válido
     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return 0;
            }
        }
 
        return 1;
    }
}



?>


?>
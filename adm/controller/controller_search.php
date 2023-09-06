

<?php
if(isset($_REQUEST["search"]) && ($_REQUEST["search"] !="")){ //deleçao
    $dados["campo"] = $_REQUEST["campo"];
    $dados["tabela"] = $_REQUEST["tabela"];
    $dados["pesquisa"] = $_REQUEST["search"];
    require_once "../model//manager.php";
    
    $sql = "SELECT * FROM {$dados["tabela"]} WHERE  {$dados["campo"]} =  {$dados["pesquisa"]}";
echo $sql;
    
    }

?>
<?php
// Verifique se a variável foi recebida na requisição GET
if (isset($_GET['minhaVariavel'])) {
    // Obtenha o valor da variável
    $minhaVariavel = $_GET['minhaVariavel'];

    // Faça as operações desejadas com a variável (por exemplo, altere seu valor)
    $novaVariavel = $minhaVariavel . "_modificada";

    // Você pode fazer mais lógica aqui, se necessário

    // Envie uma resposta de volta para a requisição AJAX
    echo "Variável modificada com sucesso: " . $novaVariavel;
} else {
    // Se a variável não foi recebida, envie uma mensagem de erro
    echo "Erro: Variável não recebida na requisição.";
}
?>

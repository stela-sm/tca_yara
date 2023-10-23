<?php
require '../model/conexao.php';

$query = "SELECT * FROM endereco WHERE id_cliente = 1";
$result = $conn->query($query);

if ($result) {
    // Inicialize um array para armazenar os resultados
    $registros = array();

    // Percorra os resultados e adicione cada registro ao array
    while ($row = $result->fetch_assoc()) {
        $registros[] = $row;
    }

    // Feche o resultado da consulta
    $result->close();

    // Agora, $registros contém todos os registros com id_cliente igual a 1
    // Você pode usá-lo da maneira que desejar

    // Exiba os registros
    foreach ($registros as $registro) {
        echo "ID: " . $registro['ID_ENDERECO'] . "<br>";
        echo "Nome: " . $registro['nome'] . "<br>";
        // Adicione aqui os outros campos que você deseja exibir
        echo "<br>";
    }
} else {
    echo "Erro na consulta: " . $mysqli->error;
}

// Feche a conexão com o banco de dados
$mysqli->close();
?>

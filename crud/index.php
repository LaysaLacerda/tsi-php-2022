<?php

require_once '../bancoDeDados/conecta.php';

$stmt = $bd->query('SELECT id, nome, turno, inicio From aluno');

//echo '<pre>';

echo '<table border="2">
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Turno</td>
        <td>Início</td>
    </tr>';
while( $saida = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>
            <td>{$saida['id']}</td>
            <td>{$saida['nome']}</td>
            <td>{$saida['turno']}</td>
            <td>{$saida['inicio']}</td>
    </tr>";
    //var_dump($saida);
};

echo '</table>';


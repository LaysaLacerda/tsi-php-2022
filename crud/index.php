<?php

require_once '../bancoDeDados/conecta.php';
$stmt = $bd->query('SELECT id, nome, turno, inicio FROM aluno');  
$alunos = [];
while( $registro = $stmt->fetch(PDO::FETCH_ASSOC) ){
    $alunos[] = $registro;
}
include 'view/listar.php';
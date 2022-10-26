<?php

require_once '../bancoDeDados/conecta.php';

$id = $_GET['id'];

$id = preg_replace('/\D/','',$id);


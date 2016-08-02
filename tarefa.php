<?php

include "banco.php";
include "ajudantes.php";

$tem_erros = false;
$erros_validacao = array();

if(tem_post()){
	// upload dos anexos
}

$tarefa = buscar_tarefa($conexao, $_GET['id']);

include "template_tarefa.php";
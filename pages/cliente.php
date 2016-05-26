<?php

require_once ('inc/clientes.php');
// pega a key da URI
$key = isset(getPath()[2]) ? getPath()[2] : null;
// verifica se a key passada existe no array clientes
if(!array_key_exists($key,$clientes)) {
    header('location: /');
}
?>
<ul>
    <li>Nome: <?=$clientes[$key]->nome?></li>
    <li>CPF : <?=$clientes[$key]->cpf?></li>
    <li>End.: <?=$clientes[$key]->endereco?></li>
    <li>Tel.: <?=$clientes[$key]->telefone?></li>
</ul>
<button class="btn btn-default" onclick="history.back()">Voltar</button>

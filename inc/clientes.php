<?php

require_once ('class/Cliente.php');

for($i=0;$i<10;$i++) {
    $clientes[] = new Cliente("Cliente $i","123456789$i","Rua Brasil, 10$i","5555-555$i");
}
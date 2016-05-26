<p>
    <form action="/" method="post">
    <button class="glyphicon glyphicon-triangle-bottom" name="desc"></button>
    <button class="glyphicon glyphicon-triangle-top" name="asc"></button>
    </form>
</p>
<?php

require_once ('inc/clientes.php');
if(isset($_POST['desc'])) {
    krsort($clientes);
}
if(isset($_POST['asc'])) {
    ksort($clientes);
}
foreach($clientes as $key => $cliente) {
    echo "<p>{$key} <a href='cliente/{$key}'>" . $cliente->nome . "</a></p>";
}
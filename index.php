<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP OO</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
<?php

require_once ('pages/menu.php');
require_once ('inc/rotas.php');
require_once ('inc/funcoes.php');
$path = !empty(getPath()[1]) ? getPath()[1] : "home";
validaRota($path, $rotas);
require_once ('pages/footer.php');

?>
</div>

<!-- JavaScript -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
<?php
require_once "../models/Arrecadacao.php";

$bd = new Banco();
$pagamento = new Pagamento($bd->conectar());
$arrecadacao = new Arrecadacao ($bd->conectar(),$pagamento);

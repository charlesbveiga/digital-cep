<?php

require_once "vendor/autoload.php";

use Wead\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('94100280');

print_r($resultado);
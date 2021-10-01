<?php

require __DIR__ . '/vendor/autoload.php';

use App\Characters;

$result = new Characters();
echo $result->revertCharacters('Привет! Давно не виделись.');

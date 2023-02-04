<?php

// Se true carrega os arquivos de produção 
$prod = false;

/*
    prod.php  => produção
    local.php => QA | localhost
*/

// if (preg_match('/.*(localhost|qa).*/', $_SERVER['REQUEST_URI'])) {
//     # code...
// }

$file = $prod ? 'prod.php' : 'local.php';

require_once('env/' . $file);
<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 0);
ini_set('error_log', 'var/log/minha-aplicacao');

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    switch ($errno) {
        case E_WARNING:
            echo "Aviso: Isso é perigoso" . PHP_EOL;
            break;
        case E_NOTICE:
            echo "Melhor não fazer isso" . PHP_EOL;
            break;
    }
});

echo $variavel;
echo $array[12];

echo CONSTANTE;
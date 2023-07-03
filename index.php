<?php

$graus = [0.18, 5.3, 6.8];
$chave = true;
if ($chave) {
    foreach ($graus as $key) {
        if ($key != 5.3) {
            echo ' Acho a temperatura ';
            continue;
        } else {
            echo ' Não achei a temperatura';
            echo ' subindo pro github';
        }
    }
}


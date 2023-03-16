<?php


function royhatdaBormi($matn,  $royhat) {
    foreach ($royhat as $value) {
        if ($value === $matn) {
            return true;
        }
    }
    return false;
}

$mevalar = royhatdaBormi('olma', ['nok', 'anor', 'banan']);
var_dump($mevalar);

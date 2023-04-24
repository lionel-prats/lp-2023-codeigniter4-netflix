<?php 

function dd($var = 'nothing to debug') {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    exit;
}
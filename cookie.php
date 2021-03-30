<?php

function secToDays($sec)
{
    return ($sec / 60 / 60 / 24);
}

if (isset($_COOKIE['myuser'])) {
    list($value, $expiry) = explode("|", $_COOKIE["myuser"]);
    $e = secToDays((intval($expiry) - time()));
    if (round($e, 1) < 1) {
        echo "Cookie will expire today";
    } else {
        echo "Cookie will expire in " . round($e, 1) . " day(s)";
    }
} else {
    echo "Cookie not set...";
}

<?php

function __($str, $lang = null) {

    if ($lang == null) {
        $lang = $GLOBALS['lang'];
    }

    if (file_exists('language/' . $lang . '.php')) {

        include('language/' . $lang . '.php');
        if (isset($texts[$str])) {
            $str = $texts[$str];
        }
    }

    return $str;
}

if (isset($_COOKIE['ShopLanguage'])) {
    $lang = $_COOKIE['ShopLanguage'];
} else {
    $lang = "en";
}

if (isset($_GET['lang'])) {
    setcookie('ShopLanguage', $_GET['lang'], time() + 3660 * 24 * 30 * 12);
    $lang = $_GET['lang'];
}
?>
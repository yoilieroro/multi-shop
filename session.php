<?php
ini_set('session.cookie_lifetime', 0);
ini_set('session.use_only_cookies', 'Off');
ini_set('session.use_cookies', 'Off');
ini_set('session.use_trans_sid', 'Off');
ini_set('session.cookie_httponly', 'On');

session_start();
//session_module_name('memcache');


if (isset($_GET['view']) && $_GET['view'] == "logout") {
    $_SESSION = array();

    session_destroy();

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>


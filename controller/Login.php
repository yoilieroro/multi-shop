<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author ORO
 */
class Login {

    public function __construct() {
        
    }

    public static function login() {
        $con = Database::getCon();

        if (!isset($_POST['password']))
            return false;

        $sql = "SELECT password FROM users"
                . " WHERE email = '{$_POST['email']}'";

        $login = $con->query($sql);
        $login = $login->fetch_assoc();
        
        //echo password_hash("123", PASSWORD_DEFAULT);

        if (password_verify($_POST['password'], $login['password'])) {
            $_SESSION['user'] = $_POST['email'];
            $_SESSION['passwd'] = $_POST['password'];

            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        } else {
            return "ERROR";
        }
    }

    public static function getLogin() {
        
    }

}

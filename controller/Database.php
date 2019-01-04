<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author ORO
 */
class Database {

    public static $db;
    public static $con;

    function __construct() {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "root";
        $this->ddbb = "shop";

        //return $this->connect();
    }

    function connect() {
        $con = @ new mysqli($this->host, $this->user, $this->pass, $this->ddbb);

        if ($con->connect_errno) {
            printf("Error de conexión: %s\n", $con->connect_error);
            exit();
        }

        return $con;
    }

    public static function getCon() {
        if (self::$con == null && self::$db == null) {
            self::$db = new Database();
            self::$con = self::$db->connect();
        }
        return self::$con;
    }

}

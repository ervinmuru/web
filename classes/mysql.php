<?php

/**
 * Created by PhpStorm.
 * User: darthuser
 * Date: 4/5/17
 * Time: 10:29 AM
 */
class mysql
{
    //klassi omadused
    var $conn = false;
    var $host = false;
    var $user = false;
    var $pass = false;
    var $dbname = false;

    //klassi tegevused
    function __construct($h, $u, $p, $dn) {
        $this->host = $h;
        $this->user = $u;
        $this->pass = $p;
        $this->dbname = $dn;

        $this->connect();
    }

    //klassi tegevused
    function connect() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        if (mysqli_connect_error()) {
            echo 'Viga andmebaasiserveriga ühendamisel<br />';
            exit;
        }
    }
}
?>
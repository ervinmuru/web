<?php
/**
 * Created by PhpStorm.
 * User: darthuser
 * Date: 4/5/17
 * Time: 8:36 AM
 */

class http
{// klassi algus
    // klassi muutujad
    var $vars = array(); // http päringute andmed
    var $server = array(); // serveri (masina) andmed
    // klassi meetodid
    // klassi konstruktor
    function __construct(){
        $this->init();
        $this->initCont();
    }
    // paneme algandmed paika - initsialiseerime neid
    function init(){
        $this->vars = array_merge($_GET, $_POST, $_FILES);
        $this->server = $_SERVER;
    }// init
    //defineerime vajalikud konstandid
    function initCont(){
        $consts = array('REMOTE_ADDR', 'HTTP_HOST', 'PHP_SELF', 'SCRIPT_NAME');
        foreach ($consts as $const){
            if(!defined($const) and isset($this->server[$const])){
                define($const, $this->server[$const]);
            }
        }
    }// initConst

    //saame kätte veebis olevad andmed - nagu $_POST või $_GET - emulatsioon
    function get($name) {
        //kui vastava nimega element eksisteerib
        if ($this -> vars[$name]) {
            return $this -> vars[$name];
        }
        //muidu tagastab tyhja v22rtuse
        return false;
    }
    //lisame vajalikud v22rtused veebi kujul nimi=v22rtus
    function set($name, $val) {
        $this->vars[$name] = $val;
    }
}// klassi lõpp
?>
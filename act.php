<?php
/**
 * Created by PhpStorm.
 * User: darthuser
 * Date: 4/5/17
 * Time: 9:04 AM
 */
$act = $http->get('act');//kysime hetkel valitud tegevus
$fn = ACTS_DIR.str_replace('.','/',$act).'.php';//koostame otsitava faili nimi

if (file_exists($fn) and is_file($fn) and is_readable($fn)) {
    require_once $fn;
}
else {
    echo 'Fail on puudu';
}
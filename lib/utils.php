<?php
/**
 * Created by PhpStorm.
 * User: darthuser
 * Date: 4/5/17
 * Time: 8:36 AM
 */

function fixUrl($val){
    return urlencode($val);
}

function fixDb ($val) {
    return '"'.addslashes($val).'"';
}
?>
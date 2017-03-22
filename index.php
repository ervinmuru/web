<?php
/**
 * Created by PhpStorm.
 * User: darthuser
 * Date: 3/15/17
 * Time: 1:08 PM
 */

//taking configuration from conf.php
require_once 'conf.php';

// main page content
echo '<h1>Veebiprogrammeerimine</h1>';

//creating main template object
$main_tmpl = new template(TMPL_DIR.'main.html');
//controlling object contents
echo '<pre>';
print_r($main_tmpl);
echo '<pre>';
?>
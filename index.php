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
$main_tmpl = new template('main');
//creating pairs template_element -> key_value
$main_tmpl->set('user','Username');
$main_tmpl->set('title','Main page');
$main_tmpl->set('lang_bar','Language selection');
$main_tmpl->set('menu','Page menu');
$main_tmpl->set('content','Page content');
//controlling object contents
echo $main_tmpl->parse();
?>
<?php
/**
 * Created by PhpStorm.
 * User: darthuser
 * Date: 3/22/17
 * Time: 3:27 PM
 */
// loome menüü mallide objektid
$menu = new template('menu.menu');
$item = new template('menu.item');
// lisame sisu
//menuu sql lause
$sql = 'select content_id, title, from content where'.
    'parent_id='

// nimetame menüüs väljastav element
$item->set('name', 'esimene');
// loome antud menüü elemendile lingi
$link = $http->getLink(array('act'=>'first'));
// lisame antud link menüüsse
$item->set('link', $link);
// lisame valmis link menüü objekti sisse
$menu->set('items', $item->parse());
//
$item->set('name', 'teine');
$link = $http->getLink(array('act'=>'second'));
$item->set('link', $link);
$menu->add('items', $item->parse());
// kontrollime objekti olemasolu ja sisu
// kui soovime pidevat asendamist, siis set funktsioon add asemel
$main_tmpl->add('menu', $menu->parse());
?>
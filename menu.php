<?php
/**
 * Created by PhpStorm.
 * User: darthuser
 * Date: 3/22/17
 * Time: 3:27 PM
 */
//creating menu template objects
$menu = new template('menu.menu');
$item = new template('menu.item');
//adding content
$item->set('name', 'first');
$menu->set('items', $item->parse());
$item->set('name', 'second');
$menu->set('items', $item->parse());
echo '<pre>';
print_r($menu);
print_r($item);
echo '<pre>';

?>
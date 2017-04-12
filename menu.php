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
$sql = 'SELECT content_id, title FROM content WHERE'.
    ' parent_id='.fixDb(0).' AND show_in_menu='.fixDb(1);
//saame paringu tulemus
$res = $db->getArray($sql);
//kontrollime tulemuse sisu
if ($res != false) {
    foreach ($res as $page) {
        $item->set('name',$page['title']);
        $link= $http->getLink(array('page_id'=>$page['content_id']));
        $item->set('link', $link);
        $menu->add('items', $item->parse());
    }
}

$main_tmpl->add('menu', $menu->parse());
?>
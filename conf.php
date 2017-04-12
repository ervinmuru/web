<?php
/**
 * Created by PhpStorm.
 * User: darthuser
 * Date: 3/15/17
 * Time: 3:25 PM
 */

// defineerime vajalikud konstandid
define('CLASSES_DIR', 'classes/'); // classes kataloogi nime konstant
define('TMPL_DIR', 'tmpl/'); // tmpl kataloogi nime konstant
define('LIB_DIR', 'lib/'); // lib kataloogi nime konstant
define('ACTS_DIR', 'acts/'); // acts kataloogi nime konstant


define('DEFAULT_ACT', 'default'); // vaikimisi tegevuse faili nime konstant
define('DEFAULT_LANG', 'et'); // vaikimisi keele määramine
define('LANG_DIR', 'lang/'); // lang kataloogi nime konstant


// võtame kasutusele vajalikud abifailid
require_once LIB_DIR.'utils.php';
require_once 'db_conf.php';





// võtame kasutusele vajalikud failid
require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';
require_once CLASSES_DIR.'mysql.php';


    );
// loome vajalikud objektid projekti tööks
$http = new linkobject();
$db = new mysql(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//testime andmebaasi objekti

// lisame keele tugi
// lehe keelevahetuseka määratud keeled
$siteLangs = array(
    'et' => 'estonian',
    'en' => 'english',
    'ru' => 'russian'
);
//kontrollime, milline keel on hetkel aktiivne
$lang_id = $http->get('lang_id');
// kontrollime, kas selline keel keelemassiivis olemas
if(!isset($siteLangs[$lang_id])){
    // kui pole - määrame vaikimisi keel
    $lang_id = DEFAULT_LANG;
    $http->set('lang_id', $lang_id);
}
// määrame mugavuseks aktiivse keele konstandi
define('LANG_ID', $lang_id);
?>

?>
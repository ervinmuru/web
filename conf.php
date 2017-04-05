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
define('ACTS_DIR', 'acts/'); //acts kataloogi nime konstant
// võtame kasutusele vajalikud abifailid
require_once LIB_DIR.'utils.php';
// võtame kasutusele vajalikud failid
require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';
require_once CLASSES_DIR.'linkobject.php';
// loome vajalikud objektid projekti tööks
$http = new linkobject();

?>
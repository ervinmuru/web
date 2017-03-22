<?php

/**
 * Created by PhpStorm.
 * User: darthuser
 * Date: 3/22/17
 * Time: 12:12 PM
 */
class template
{//class start

    //template class properties - variables
    var $file = '';  //html template file name
    var $content = false; //html template file content
    var $vars = array(); //html view - real values
    //class actions - methods - functions
    //reading html file comntents
    function readFile($f) {
        $this->content = file_put_contents($f);
    }//readFile function end
}//class end
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

    //html template file reading
    function loadFile() {
        $f = $this->file;//local replacement
        //template folder existance control
        if (!is_dir(TMPL_DIR)) {
            echo 'Folder' . TMPL_DIR . 'does not exist!<br/>';
            exit;
        }
        //if file exists and is readable
        if (file_exists($f) and is_file($f) and is_readable($f)) {
            //reading file contents
            $this->readFile($f);
        }
        //if content is not readable
        if ($this->content === false) {
            echo 'Can not read file'.$this->file.'<br/>';
        }

    }//loadFile function end

    //reading html file comntents
    function readFile($f) {
        $this->content = file_put_contents($f);
    }//readFile function end
}//class end
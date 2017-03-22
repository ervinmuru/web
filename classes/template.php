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

    //class constructor
    function __construct ($f) {
        $this->file = $f; //html template file name variable
        $this->loadFile(); //reading file content
    }//construcor end

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



        //.html usage
        $f = TMPL_DIR.$this->file.'.html'; // more local replacmest
        if (file_exists($f) and is_file($f) and is_readable($f)) {
            //reading file contents
            $this->readFile($f);
        }

        //subfolder usage
        $f = TMPL_DIR.str_replace('.','/', $this->file).'.html'; // more local replacmest
        if (file_exists($f) and is_file($f) and is_readable($f)) {
            //reading file contents
            $this->readFile($f);
        }

        //if file exists and is readable
        $f = TMPL_DIR.$this->file; // more local replacmest
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
        $this->content = file_get_contents($f);
    }//readFile function end

    //template_element -> key_value
    function set($name, $val) {
        $this->vars[$name] = $val;
    } //set end

    //html template replacement with real values
    function parse() {
        $str = $this->content;
        foreach ($this->vars as $name=>$val) {
            $str = str_replace('{'.$name.'}', $val, $str);
        }
        //returning fully replaced template
        return $str;
    }//parse end
}//class end
?>
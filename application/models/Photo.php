<?php

/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 29/06/2017
 * Time: 19:35
 */
class Photo extends CI_Model
{
    var $id;
    var $path;
    var $type;

    public function __construct()
    {
        $this->set_id(1);
        $this->set_path('testcase');
        $this->set_type('keuken');
    }

    public function set_id($newId) {
        $this->id = $newId;
    }

    public function set_path($newPath) {
        $this->path = $newPath;
    }

    public function set_type($newType) {
        $this->type = $newType;
    }

    public function get_id() {
        return $this->id;
    }

    public function get_path() {
        return $this->path;
    }

    public  function get_type() {
        return $this->type;
    }

}
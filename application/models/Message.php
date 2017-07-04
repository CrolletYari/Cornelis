<?php

class Message extends CI_Model {
    
    var $id;
    var $title;
    var $message;
    var $date;
    
    function __construct() {
        $this->set_id(0);
        $this->set_title("");
        $this->set_message("");
        $this->set_date();
    }
    
    
    function set_id($new_id) {
        $this->id = $new_id;
    }
    
    function get_id() {
        return $this->id;
    }

    public function set_title($new_title) {
        $this->title = $new_title;

    }

    public function get_title() {
        return $this->title;
    }
    
    function set_message($new_message) {
        $this->message = $new_message;
    }
    
    function get_message() {
        return $this->message;
    }

    public function set_date() {
        $this->date = date("Y-m-d H:i:s");
    }

    public function get_date() {
        return $this->date;
    }

    
}
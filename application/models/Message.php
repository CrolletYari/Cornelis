<?php

class Message extends CI_Model {
    
    var $id = 0;
    var $message = "";
    
    function __construct() {
        $this->set_id(1);
        $this->set_message("test");
    }
    
    
    function set_id($new_id) {
        $this->id = $new_id;
    }
    
    function get_id() {
        return $this->id;
    }
    
    function set_message($new_message) {
        $this->message = $new_message;
    }
    
    function get_message() {
        return $this->message;
    }
    
    
    
    
    
}
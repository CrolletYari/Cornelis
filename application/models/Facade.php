<?php

/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 25/06/2017
 * Time: 14:50
 */
class Facade extends CI_Model
{
    var $messages;

    function __construct()
    {
        $this->load->model('MessagesInDB');
        $this->messages = new MessagesInDB();
    }

    public function getMessages() {
        return $this->messages->getMessages();
    }

    public function addMessage($message) {
            $this->messages->addMessage($message);
    }

}
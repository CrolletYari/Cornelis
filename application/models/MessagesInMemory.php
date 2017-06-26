<?php

/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 25/06/2017
 * Time: 14:28
 */
class MessagesInMemory extends CI_Model
{
    var $messages = array();

    public function __construct()
    {
        $this->load->model('message');
        $this->add();
    }

    public function add() {
        $message = new Message();
        $this->addMessage($message);
        $this->addMessage($message);
    }

    public function addMessage($message) {
        if ($message instanceof Message && !is_null($message)) {
            //is gelijkt aan array_push($this->messages, $message)
            $this->messages[] = $message;
        } else {
            die("Fout bij MessagesInmemory-addMessage: " + $message);
        }

    }

    public function  getMessages() {
        return $this->messages;
    }

}
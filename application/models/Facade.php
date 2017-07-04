<?php

/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 25/06/2017
 * Time: 14:50
 */
class Facade extends CI_Model
{
    private $messages;
    private $photos;

    function __construct()
    {
        $this->load->database();
        $this->load->model('PhotosInDB');
        $this->load->model('MessagesInDB');

        $this->messages = new MessagesInDB();
        $this->photos = new PhotosInDB();
    }

    public function getMessages() {
        return $this->messages->getMessages();
    }

    public function addMessage($message) {
            $this->messages->addMessage($message);
    }

    public function getPhotos() {
        return $this->photos->getPhotos();
    }

    public  function addPhoto($photo) {
        $this->photos->addPhoto($photo);
    }

}
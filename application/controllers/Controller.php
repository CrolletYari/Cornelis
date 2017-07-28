<?php

/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 25/06/2017
 * Time: 14:28
 */
class Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('facade');
        $this->load->model('message');
        $this->load->model('photo');

        $this->load->helper((array('form', 'url','url_helper')));

        $this->load->library('session');
    }

    public function index() {
        $data['title'] = 'messages archive';
        $data['messages'] = $this->facade->getMessages();
        $data['photos'] = $this->facade->getPhotos();

        $this->load->view('welcome_message', $data);
    }


    public function messages() {

        $data['title'] = 'messages archive';
        $data['messages'] = $this->facade->getMessages();
        $data['photos'] = $this->facade->getPhotos();

        $this->load->view('messages', $data);
    }

    //chekcen of het een string is && security?
    public function postmessage($action='message') {
        $title = $this->input->post('title');
        $textMessage = $this->input->post('message');


        $message = new Message();
        $message->set_message($textMessage);
        $message->set_title($title);

        $this->addMessage($message);
        redirect('/controller', 'refresh');
    }

    public function postphoto($action='photo') {
        $photo = new Photo();
        $this->addPhoto($photo);

        redirect('/controller', 'refresh');
    }

    public function uploadphoto() {
        $photo = new Photo();

        $config['encrypt_name'] = true;
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';


        $this->load->library('upload', $config);

        $this->upload->do_upload('userfile');

        $name = $this->upload->data('file_name');
        $photo->set_path($name);

        $this->addphoto($photo);

        redirect('/controller', 'refresh');
    }
    //TODO
    private function checklogin() {
        return $_SESSION['USER'] != null;
    }

    private function addphoto($photo) {


        $this->facade->addPhoto($photo);

    }

    private function addMessage($message) {
            $this->facade->addMessage($message);
    }

}
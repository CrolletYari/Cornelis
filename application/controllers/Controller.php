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
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['title'] = 'messages archive';
        $data['messages'] = $this->facade->getMessages();

        $this->load->view('messages', $data);
    }

    public function post($action='message') {
        //$message = $this->input->post('');
        $message = new Message();
        $this->addMessage($message);
        redirect('/controller', 'refresh');
    }

    private function addMessage($message) {
            $this->facade->addMessage($message);
    }

}
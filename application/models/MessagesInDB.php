<?php
require_once 'MessagesInterface.php';
/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 26/06/2017
 * Time: 17:18
 */
class MessagesInDB extends CI_Model implements MessagesInterface
{

    public function __construct()
    {
        $this->load->database();
        $this->load->model('message');
    }

    public function getMessages() {
        $query = $this->db->get('messages');
        return $this->returnMessageArray($query);
    }

    public function addMessage($message)
    {
        $data = array(
            'message' => 'test'
        );
        $this->db->insert('messages', $data);
    }

    private function returnMessageArray($queryResult) {
        $messages = array();

        foreach ($queryResult->result() as $result) {
            $messages[] = $result;
        }
        return $messages;
    }
}
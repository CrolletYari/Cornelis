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

        $this->load->model('message');
    }

    public function getMessages() {
        $query = $this->db->get('messages');
        return $this->returnMessageArray($query);
    }

    public function addMessage($message)
    {
        $title = $message->get_title();
        $text = $message->get_message();
        $date = $message->get_date();

        $data = array(
            'title' => $title,
            'message' => $text,
            'date' => $date
        );
        $this->db->insert('messages', $data);
    }
    //TODO hier nog result in een message classe stoppen?
    private function returnMessageArray($queryResult) {
        $messages = array();

        foreach ($queryResult->result() as $result) {
            $messages[] = $result;
        }
        return $messages;
    }
}
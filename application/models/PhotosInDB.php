<?php
require_once 'PhotoInterface.php';
/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 29/06/2017
 * Time: 19:42
 */
class PhotosInDB extends CI_Model implements PhotoInterface
{
    public function __construct()
    {
        $this->load->model('Photo');
    }

    public function getPhotos()
    {
        $query = $this->db->get('photos');
        return $this->returnPhotosArray($query);
    }

    public function getPhoto($photoId)
    {
        // TODO: Implement getPhoto() method.
    }

    public function addPhoto($photo)
    {

        $data = array(
            'path' => $photo->get_path(),
            'type' => $photo->get_type()
        );
        $this->db->insert('photos', $data);
    }

    //TODO hier nog result in een message classe stoppen?
    private function returnPhotosArray($queryResult) {
        $photos = array();

        foreach ($queryResult->result() as $result) {
            $photos[] = $result;
        }
        return $photos;
    }

}
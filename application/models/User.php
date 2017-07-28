<?php

/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 28/07/2017
 * Time: 16:52
 */
class User extends CI_Model
{
    var $username;
    var $password;
    var $salt;
    var $role;

    public function __construct()
    {
        $this->load->model('Roles');

        $this->setUsername('');
        $this->setPassword('');
        $this->setSalt('');
        $this->setRole(Roles::USER);
    }

    public function setUsername($newUsername) {
        $this->username = $newUsername;
    }

    public function setPassword($newPassword) {
        $this->password = $newPassword;
    }

    public function setSalt($newSalt) {
        $this->salt = $newSalt;
    }

    public function setRole($newRole) {
        $this->role = $newRole;
    }
    //TODO
    public function encrypt() {

    }
    //TODO
    public function makeSalt(){

    }


}
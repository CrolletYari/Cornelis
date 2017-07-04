<?php

/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 29/06/2017
 * Time: 19:41
 */
interface PhotoInterface
{
    public function getPhotos();
    public function getPhoto($photoId);
    public function addPhoto($photo);
}
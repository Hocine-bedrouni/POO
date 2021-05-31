<?php


class Aritists extends AbstractController
{

    public function __construct()
    {
    }


    public function index()
    {
        $artist = $this->loadModel('Artist');
        $artistList = $artist->getAll();
        $this->render('index', [
            'artists' => $artistList
        ]);
    }
}
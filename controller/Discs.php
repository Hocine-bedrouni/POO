<?php


class Discs extends AbstractController
{

    public function __construct()
    {
    }


    public function index()
    {
        $disc = $this->loadModel('Disc');
        $discList = $disc->getAll();
        $this->render('index', [
            'discs' => $discList
        ]);
    }
}
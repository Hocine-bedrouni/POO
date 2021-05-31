<?php


class Disc extends DiscsEntity
{
    public function __construct()
    {
        $this->table = 'disc';
        $this->getConnection();
    }
}
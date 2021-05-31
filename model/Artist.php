<?php


class Artist extends ArtistsEntity
{
    public function __construct()
    {
        $this->table = 'artist';
        $this->getConnection();
    }
}
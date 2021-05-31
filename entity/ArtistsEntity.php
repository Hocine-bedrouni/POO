<?php
require "../app/Model.php";

class ArtistsEntity extends Model
{
    public string $artist_id;

    public string $artist_name;


    public function getArtistId(): string
    {
        return $this->artist_id;
    }

    public function getArtistName(): string
    {
        return $this->artist_name;
    }

    public function setArtistName(string $artist_name): ArtistsEntity
    {
        $this->artist_name = $artist_name;
        return $this;
    }


}

var_dump($_SERVER);
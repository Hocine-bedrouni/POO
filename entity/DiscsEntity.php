<?php
require "../app/Model.php";

class DiscsEntity extends Model
{
    public string $id;

    public string $disc_title;

    public string $disc_year;

    public string $disc_picture;

    public string $disc_label;

    public string $disc_genre;

    public string $disc_price;

    public string $artist_id;


    public function getId(): string
    {
        return $this->id;
    }

    public function getDiscTitle(): string
    {
        return $this->disc_title;
    }

    public function setDiscTitle(string $disc_title): DiscsEntity
    {
        $this->disc_title = $disc_title;
        return $this;
    }

    public function getDiscYear(): string
    {
        return $this->disc_year;
    }
    public function setDiscYear(string $disc_year): DiscsEntity
    {
        $this->disc_year = $disc_year;
        return $this;
    }

    public function getDiscPicture(): string
    {
        return $this->disc_picture;
    }
    public function setDiscPicture(string $disc_picture): DiscsEntity
    {
        $this->disc_picture = $disc_picture;
        return $this;
    }

    public function getDiscLabel(): string
    {
        return $this->disc_label;
    }
    public function setDiscLabel(string $disc_label): DiscsEntity
    {
        $this->disc_label = $disc_label;
        return $this;
    }

    public function getDiscGenre(): string
    {
        return $this->disc_genre;
    }
    public function setDiscGenre(string $disc_genre): DiscsEntity
    {
        $this->disc_genre = $disc_genre;
        return $this;
    }

    public function getDiscPrice(): string
    {
        return $this->disc_price;
    }
    public function setDiscPrice(string $disc_price): DiscsEntity
    {
        $this->disc_price = $disc_price;
        return $this;
    }

    public function getArtistId(): string
    {
        return $this->artist_id;
    }

}
var_dump($_SERVER);

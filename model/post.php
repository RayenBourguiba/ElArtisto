<?php

class Posts{
    private int $id;
    private string $title;
    private string $text;
    private string $img;
    private int $points;
    private int $nb_comments;
    private string $date;

    public function __construct($title,$text,$img){
        $this->title=$title;
        $this->text=$text;
        $this->img=$img;
        $this->points=0;
        $this->nb_comments=0;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getText(){
        return $this->text;
    }
    public function getImg(){
        return $this->img;
    }

    public function getNbComments(){
        return $this->nb_comments;
    }
    public function getPoints(){
        return $this->points;
    }
    public function getDate(){
        return $this->date;
    }

    public function setNbComments(){
        return $this->nb_comments;
    }

    public function setTitle($title){
        return $this->title=$title;
    }

    public function setText($text){
        return $this->text=$text;
    }
    public function setImg($img){
        return $this->img=$img;
    }
}
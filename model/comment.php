<?php

class Comments{
    private int $id;
    private string $text;
    private string $date;
    private int $post_id;
    private int $user_id;
    private string $points;

    public function __construct($text,$post_id){
        $this->text=$text;
        $this->post_id=$post_id;
        $this->points=0;
    }

    public function getId(){
        return $this->id;
    }

    public function getText(){
        return $this->text;
    }

    public function getPostId(){
        return $this->post_id;
    }
    public function getDate(){
        return $this->date;
    }

    public function setText($text){
        return $this->text=$text;
    }
    public function setPostId(){
        return $this->post_id;
    }
}
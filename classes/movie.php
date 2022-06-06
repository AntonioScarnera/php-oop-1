<?php 

class Movie{
    public $title;
    public $description;
    public $genre;
    
    
    function __construct($_title, $_description, $_genre){
        $this->title = $_title;
        $this->description = $_description;
        $this->genre = $_genre;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getGenres(){
        return $this->genre;
    }

}



?>
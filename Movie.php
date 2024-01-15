<?php
    class Movie {
        public string $title;
        public $year;
        public $director;
        public $genre;
        public $duration;
        public $rating;
        public $synopsis;
        
        public function __construct(string $title, $year, $director, $genre, $duration, $rating, $synopsis) {
            $this->title = $title;
            $this->year = $year;
            $this->director = $director;
            $this->genre = $genre;
            $this->duration = $duration;
            $this->rating = $rating;
            $this->synopsis = $synopsis;
        }
        
        public function __toString() {
            return $this->title;
        }
    }
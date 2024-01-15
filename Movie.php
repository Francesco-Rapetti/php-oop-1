<?php
    class Movie {
        public string $title;
        public $year;
        public $director;
        public array $genre;
        public $duration;
        public $rating;
        public $synopsis;
        
        public function __construct(string $title, $year, $director, array $genre, $duration, $rating, $synopsis) {
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

        public function getGenre() {
            $output = '';
            for ($i=0; $i < count($this->genre); $i++) { 
                $i == count($this->genre) - 1 ? $output .= $this->genre[$i] : $output .= $this->genre[$i] . ', ';
            }
            return $output;
        }
    }
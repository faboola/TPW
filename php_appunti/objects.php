<?php 

//creo la classe

class Movie
{

    //proprietà
    public $title;
    public $year;
    public $genre;

    //metodi
    public function printMovie() {
        // echo $this->title;
        // echo $this->year;
        // echo $this->genre;

        echo "<div>{$this->title}</div>";
        echo "<div>{$this->year}</div>";
        echo "<div>{$this->genre}</div>";
    }

    public function setMovie($title,$year,$genre) {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }
}

$movie = new Movie; //oggetto MOVIE di tipo movies


//assegno le proprietà
$movie->title = 'Arancia Meccanica';
$movie->year=1972;
$movie->genre='Drammatico';

$movie->printMovie();

$movie->setMovie('Star Wars',1978,'Sci-fi');

$movie->printMovie();




?>



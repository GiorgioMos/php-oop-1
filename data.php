<?php
$film1 = new Movie("Il padrino", "Francis Ford Coppola", "1972");
$film2 = new Movie("Forrest Gump", "Steven Spielberg", "1981");
$film3 = new Movie("Pulp Fiction", "Quentin Tarantino", "1994");
$film4 = new Movie("Blade Runner", "Ridley Scott", "1982");

class Movie
{
    public $name;
    public $director;
    public $year;

    public function __construct($name, $director, $year)
    {
        $this->name = $name;
        $this->director = $director;
        $this->year = $year;
    }

    public function getInfo()

    {
        return $result = $this->name . ", " . $this->director . ", " . $this->year;
    }
}

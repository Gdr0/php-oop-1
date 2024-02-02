<?php



class Movie {
    public $name;
    public $director;
    public $genres;
    public static $language = "English";

    public function __construct($name,$director,$genres,$year){
        $this-> name = $name;
        $this-> director = $director;
        $this-> genres = $genres;
        $this -> year = $year;
    }
    public function addGenre($newGenre){
        $this->genres[] = $newGenre;
    }
 

  public function addYear($year){
    $this -> year = $year;
    
  }



    public static function getLanguage(){
        return self :: $language;
    }



}
$Movie1 = new Movie ("Seven", "David Fincher", ["thriller"], null) ;
$Movie2 = new Movie ("Raging Bull","Martin Scorsese", ["biopic","drama"] , null);



$Movie1->addGenre("drama");
$Movie1->addGenre("noir");
$Movie1-> addYear("1995");
var_dump($Movie1);
echo "<br>";
var_dump($Movie1 -> name);
echo "<br>";
var_dump($Movie1 -> director);
echo "<br>";
var_dump($Movie1 -> genres);
echo "<br>-------------------<br>";
$Movie2-> addYear("1980");
var_dump($Movie2);
echo "<br>";
var_dump($Movie2-> name);
echo "<br>";
var_dump($Movie2 -> director);
echo "<br>";
var_dump($Movie2 -> genres);
echo "<br>";

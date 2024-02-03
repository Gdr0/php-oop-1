<?php



class Movie {
    public $name;
    public $director;
    public $genres;
    public $year;
    public $lead;
    public static $language = "English";

    public function __construct($name,$director,$genres,$year,$lead){
        $this-> name = $name;
        $this-> director = $director;
        $this-> genres = $genres;
        $this -> year = $year;
        $this -> lead = $lead;
        $this -> language = self::$language;
    }
    public function addGenre($newGenre){
        $this->genres[] = $newGenre;
    }
 public function addLead($lead){
   $this -> lead = $lead;
 }

  public function addYear($year){
    $this -> year = $year;
    
  }



}
$Movie1 = new Movie ("Seven", "David Fincher", ["thriller"], null, null);
$Movie2 = new Movie ("Raging Bull","Martin Scorsese", ["biopic","drama"] , null, null,);



$Movie1->addGenre("drama");
$Movie1->addGenre("noir");
$Movie1-> addYear("1995");
$Movie1-> addLead('Brad Pitt');
var_dump($Movie1);
echo "<br>";
var_dump($Movie1 -> name);
echo "<br>";
var_dump($Movie1 -> director);
echo "<br>";
var_dump($Movie1 -> genres);
echo "<br>";
var_dump($Movie1-> year);
echo "<br>";
var_dump($Movie1-> lead);
echo "<br>";
echo $Movie1->language;
echo "<br>";


echo "<br>-------------------<br>";
$Movie2-> addYear("1980");
$Movie2 -> addLead("Robert De Niro");
"<br>";
var_dump($Movie2);
echo "<br>";
var_dump($Movie2-> name);
echo "<br>";
var_dump($Movie2 -> director);
echo "<br>";
var_dump($Movie2 -> genres);
echo "<br>";
var_dump($Movie2-> year);
echo "<br>";
var_dump($Movie2-> lead);
echo "<br>";
echo $Movie2->language;
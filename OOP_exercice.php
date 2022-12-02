<?php 
 // public $seat_id;
    // public $train_id;
    // public $capacity;
    // public $depart;
    // public $destination;
    // public $distance ;
    // public $

class names{

   
public $fname;
public $lname='khouzima';

public function welcome(){

   return $this->fname."<br>".'says hello';

}

}

$hello = new names();

$hello->fname='zineb';
echo "<br>";
echo $hello->welcome();

// echo  $hello->fname;

// echo $hello->lname;


?>


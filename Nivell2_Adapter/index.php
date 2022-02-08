<?php

class Duck {

    public function quack() {
           echo "Quack \n";
    }

    public function fly() {
           echo "I'm flying \n";
    }
}

class Turkey {

    public function gobble() {
           echo "Gobble gobble \n";
        
    }

    public function fly() {
    echo "I'm flying a short distance \n";
    
    }
}

class TurkeyAdapter extends Duck {

    private $turkey;

    public function __construct (Turkey $turkey) {

        $this->turkey = $turkey;  
        
    } 

    function quack () {
        $this->turkey->gobble();
    }

   function fly () {
    for ( $i=0; $i<5; $i++){
      echo ( $this->turkey->fly());
      echo "<br>";
    }
       
   }

}
    

function duck_interaction($duck) {
    $duck->quack();
    echo "<br>";
    $duck->fly();
    
}



$duck = new Duck;
$turkey = new Turkey;
$turkey_adapter = new TurkeyAdapter($turkey);
echo "The Turkey says...\n";
echo "<br>";
$turkey->gobble();
echo "<br>";
$turkey->fly();
echo "<br>";
echo "The Duck says...\n";
echo "<br>";
duck_interaction($duck);
echo "<br>";
echo "The TurkeyAdapter says...\n";
echo "<br>";
duck_interaction($turkey_adapter);


?>
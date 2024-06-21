<?php 
class Personn{
    public $firstname = "Louis";
    public $lastname = "Nguyen";
    public function __construct($firstname, $lastname, $fullname){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $fullname = $this->firstname . " " . $this->lastname;
       


    }
}

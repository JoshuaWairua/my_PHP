<?php
require_once "Person.php";

    class Student extends Wazae {
        public string $studentId;
        public function __construct($name, $surname, $studentId) {
            $this -> studentId = $studentId;
            parent::__construct($name, $surname);
        }
    }       #using inheritance to make a child class out of the Persona class
?>
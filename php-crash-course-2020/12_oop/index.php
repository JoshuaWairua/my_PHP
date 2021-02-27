<?php

// What is class and instance
    #a class is a blueprint/template. It can also be a data type that can help us create other variables of that data type
    # these created variables out of that class are called instances or objects

// Create Person class in Person.php
    class Person {
        public $name;
        public $surname;
        public $age;
    }

    #creating a class using the constructor function
    class Student {
        public function __construct($name, $surname)
        {
            $this -> name = $name;
            $this -> surname = $surname;
            echo $name .  " " . $surname . '<br>';
        }
    }

// Create instance of Person
    $p1 = new Person();
    $p1 -> name = "Josh";
    $p1 -> surname = "Mwaura";

    echo '<pre>';
        var_dump($p1);
    echo '</pre>';

    echo $p1 -> name . '<br>';

    #creating an object from the constructor function
    $s1 = new Student("Yvonne", "Mwema");
    echo '<pre>';
        var_dump($s1);
    echo '</pre>';

// Using setter and getter
    class Teacher {
        public function __construct($name, $surname) {
            $this -> name = $name;
            $this -> surname = $surname;
            echo $name .  " " . $surname . '<br>';
        }
        public function setAge($age) {
            $this -> age = $age;
        }       #setter
        public function getAge() {
            return $this -> age;
        }       #getter
    }

    $t1 = new Teacher("Jesus", "Christ");
        #$t1 -> age = 30;     setters cannot be directly accessed outside the class
    $t1 -> setAge(30);
    echo '<pre>';
        var_dump($t1);
    echo '</pre>';

    echo $t1 -> getAge();   #using getter



    class Wazae {
        public string $name;
        public string $surname;
        public static int $counter = 0;     #static properties and methods belong to the class and NOT the instance
        public function __construct($name, $surname) {
            $this -> name = $name;
            $this -> surname = $surname;
            self::$counter++;       #accessing the static property via self keyword. Everytime an instance is created the counter increases 
        }

        public static function getCounter() {
            return self::$counter;
        }
    }

    
    $prnt1 = new Wazae("Hudson", "Mwaura");
    $prnt2 = new Wazae("Jane", "Mwaura");

    echo Wazae::$counter;
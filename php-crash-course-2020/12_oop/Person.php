<?php
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
?>
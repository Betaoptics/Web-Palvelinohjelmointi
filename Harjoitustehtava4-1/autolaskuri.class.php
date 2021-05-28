<?php

//autokaskuri.class.php

    class Counter {
        public $name;
        public $count;
         
        public function __construct($name) {
            $this->name = $name;
            $this->count = 0;
        }
         
        public function Name() {
            return $this->name;
        }
         
        public function Count() {
            return $this->count;
        }
         
        public function Add() {
            $this->count++;
        }
         
        public function Empty() {
            $this->count = 0;
        }
    }
?>
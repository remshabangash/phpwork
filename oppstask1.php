<?php

class Student {
    public $name;
    public $age;
    public $course;

    // Show student info
    function showInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Course: " . $this->course . "<br>";
        echo "Status: " . $this->checkAge() . "<br><br>";
    }

    // Adult / Minor check
    function checkAge() {
        if ($this->age >= 18) {
            return "Adult";
        } else {
            return "Minor";
        }
    }
}

// Student 1
$s1 = new Student();
$s1->name = "Ali";
$s1->age = 20;
$s1->course = "English";

// Student 2
$s2 = new Student();
$s2->name = "Hamza";
$s2->age = 16;
$s2->course = "Physics";

// Output
$s1->showInfo();
$s2->showInfo();

?>
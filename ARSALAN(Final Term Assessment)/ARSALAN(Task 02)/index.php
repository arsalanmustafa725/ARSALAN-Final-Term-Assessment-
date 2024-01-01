<?php

class Person {
    public $name;
    public $age;
    public $id;

    public function __construct($ARSALAN, $age, $id) {
        $this->name = $ARSALAN;
        $this->age = $age;
        $this->id = $id;
    }
}

class Student extends Person {
    public $course;

    public function __construct($name, $age, $id, $course) {
        parent::__construct($name, $age, $id);
        $this->course = $course;
    }

    public function displayInfo() {
        echo "Student Name: {$this->name}<br>";
        echo "Age: {$this->age}<br>";
        echo "ID: {$this->id}<br>";
        echo "Course: {$this->course}<br>";
        echo "-------------------------<br>";
    }
}

class Professor extends Person {
    public $course;

    public function __construct($name, $age, $id, $course) {
        parent::__construct($name, $age, $id);
        $this->course = $course;
    }

    public function displayInfo() {
        echo "Teacher Name: {$this->name}<br>";
        echo "Age: {$this->age}<br>";
        echo "ID: {$this->id}<br>";
        echo "Course: {$this->course}<br>";
        echo "-------------------------<br>";
    }
}

// Create an array of students
$Person= [
    new Student("bilal", 21, "S4765", "Advance Web Application Development"),
   
    // Add more students as needed
];

// Create an array of students
$students = [
    new Student("Arsalan", 20, "S98755", "Digtal Markting"),
   
    // Add more students as needed
];

// Create an array of Professor
$Professor = [
    new Professor("Akram", 25, "T67890", "Graphic Design"),
 
    // Add more Professor as needed
];


// Display student information
echo "Student Information:<br>";
foreach ($students as $student) {
    $student->displayInfo();
}

// Display Professor information
echo "Professor Information:<br>";
foreach ($Professor as $Professor) {
    $Professor->displayInfo();
}

?>
<?php

$integer = 567;
$string = "stringi";
$float = 0.000001;
$boolean = true;
$array = [$integer, $string, $float, $boolean];

class Lessons_kz {
    public $name;
    public $height;
    public $gender;
    public $subjects;
    public function __construct ($name, $height, $gender, $subjects) {
        $this->name = $name;
        $this->height = $height;
        $this->gender = $gender;
        $this->subjects = $subjects; 
    }
}


$teacher1 = new Lessons_kz ("insar", 1.8, "male", ["math", "devcamp", "html", "css", "php", "js"]);
$teacher2 = new Lessons_kz ("aigerim", 1.6, "female", ["math", "weblow", "VS code", "devcamp"]);
$teacher3 = new Lessons_kz ("mergul", 1.7, "female", ["math", "physics", "devcamp", "typing"]);
$teacher4 = new Lessons_kz ("ramir", 1.95, "male", ["svift", "ifotmatics", "physics"]);
$teacher5 = new Lessons_kz ("mikhail", 1.85, "male", ["math", "programing", "roboto"]);

$teachers = [$teacher1, $teacher2, $teacher3, $teacher4, $teacher5];

foreach ($teachers as $teacher) {
    if  ($teacher->gender === "male"){
        $teacher->gender = "female";
    }
    else {
        $teacher->gender = "male";
    }
    echo $teacher->name . " - " . $teacher->gender . " ";
}



<?php

// require 'schedule.class.php';

class Day{
    
    public string $order;
    public int $remainingDays = 8;
    public int $studyingHours = 5;
    public int $remainingHours = 5;
    public array $filledDays;
    
    
    // public $totalStudyingHours = ($this->remainingDays) * ($this->studyingHours);

    public array $subjects = [];

    // public function __construct($studyingHours) {
    //     $this->$studyingHours = $studyingHours; 
    // }

    public function getSubjects() {

    }

    // public function save(Day $day) {
    //     array_push($this->days, $day);
    // }


    



}
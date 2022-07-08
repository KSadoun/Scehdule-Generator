<?php

require_once "day.class.php";
require_once "subject.class.php";

class DayController extends Day {

    // public array $subjects; 

    // public function __construct (array $subjects) {
    //     $this->subjects = $subjects;
    // }

    public array $days = [];

    // Fill each day object with subjects required to be done
    public function addSubjectsToDays(&$subjs) {
        
        for ($i = 0; $i < $this->remainingDays; $i++) { 
        
            $day = new Day();
            $day->order = "Day number: ". $i+1;
            
            foreach($subjs as $subject => &$subjectHours){ 
                if($i == 0) echo $subject . ": " . $subjectHours . " hrs<br>"; // Subjects and their number of subjectHours
                if($subjectHours == 0) continue;

                // First ensure that the subject isnt finished yet and we still have time in our day
                if($day->remainingHours !== 0) { 
                    
                    $subjectHoursMinusDayRemainingHours = $subjectHours - $day->remainingHours;
                    
                    if($subjectHoursMinusDayRemainingHours > 0) {
                        $subjectHours -= $day->remainingHours;
                        array_push($day->subjects, [$subject => $day->remainingHours]);
                        $day->remainingHours = 0;
                    }
                    elseif($subjectHoursMinusDayRemainingHours < 0) {
                        $day->remainingHours -= $subjectHours;
                        array_push($day->subjects, [$subject => $subjectHours]);
                        $subjectHours = 0;
                    }
                    else {
                        array_push($day->subjects, [$subject => $subjectHours]);
                        $day->remainingHours = 0;
                        $subjectHours = 0;
                    }
                }
                
            }

            var_dump($day->subjects);
            echo "<br>";
            array_push($this->days, $day);

        }

        echo "<br>";
        var_dump($this->days[0]->subjects);
        echo "<br>";

    }



}
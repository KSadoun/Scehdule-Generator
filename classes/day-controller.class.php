<?php

require_once "day.class.php";
require_once "subject.class.php";

class DayController extends Day {

    // Fill each day object with subjects required to be done
    public function addSubjectsToDays(array $subjects) {

        $days = [];

        // echo (array_values($subjects)[0]);


        // var_dump($subjects);
        for ($i = 0; $i < $this->remainingDays; $i++) { 
            
            $day = new Day();
            $day->order = "Day number: ". $i+1;
            //echo $day->order . "<br>";

            
            foreach($subjects as $subject => $subjectHours){ 
                echo $subject . ": " . $subjectHours . " hrs<br>"; // Subjects and their number of subjectHours
                
                // First ensure that the subject isnt finished yet and we still have time in our day
                if((int)$subjectHours !== 0 && $day->remainingHours !== 0) { 
                    
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

            array_push($days, $day);


        }


        for($i = 0; $i < count($days); $i++){
            var_dump($days[$i]->subjects);
            // foreach($days[$i]->subjects as $subjectName => $subjectHours){
            //     echo "<br>" . $subjectName . ": " . $subjectHours . " hrs"
            // }
        }


    }

}
<?php
require_once "classes/day-controller.class.php";
require_once "classes/schedule.class.php";

$days = new DayController();

$subjects = [
    "arabic" => 2,
    "maths" => 10,
    "science" => 8,
    "english" => 5,
    "social science" => 15,
];

$days->addSubjectsToDays($subjects);
var_dump($subjects);

// $days->getDays();

// $schedule = new Schedule();
// $schedule->getDays();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Generator</title>
</head>
<body>
    



</body>
</html>
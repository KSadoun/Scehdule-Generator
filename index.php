<?php
require_once "classes/day-controller.class.php";

$day = new DayController();

$subjects = [
    "maths" => 10,
    "science" => 8,
    "english" => 5,
    "social science" => 15,
    "arabic" => 2,
];

$day->addSubjectsToDays($subjects);

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
<!DOCTYPE html>
<html>
        <body>
        <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
 require ('exercise_model.php');
        require ('connect.php');
        if(!isset($_GET['id'])){
 $time = "'" . $_POST['time'] . "'";
    $type = "'" . $_POST['type'] . "'";
    $workouts = getWorkoutChoice($time, $type);
    
        foreach($workouts as $workout){
            echo "<p><strong><a href='exercise_choices.php?id=" . $workout['workout_id'] . "'>" .  $workout['workout_name'] . "</a></strong>:" . $workout['workout_type'] . " " . $workout['duration'] ."</p>";
        }
    }

    if(isset($_GET['id'])){

$id =  $_GET['id'];

$routines = getWorkout($id);
echo implode(" ", $routines);
foreach($routines as $routine){
	echo "<p>" .$routine['workout_1'] . "</p>";
}
}
          ?>
        </body>
        </html>
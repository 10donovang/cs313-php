<!DOCTYPE html>
<html>
        <body>
        <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
 require ('exercise_model.php');
        require ('connect.php');
 $time = "'" . $_POST['time'] . "'";
    $type = "'" . $_POST['type'] . "'";
    $workouts = getWorkoutChoice($time, $type);
    
        foreach($workouts as $workout){
            echo "<p><strong><a href='exercise_choices.php?id=" . $workout['workout_id'] . '">' . $workout['workout_name'] . "</a></strong>:" . $workout['workout_type'] . " " . $workout['duration'] .'</p>';
        }

          ?>
        </body>
        </html>
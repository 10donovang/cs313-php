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
            echo "<p><strong>" . $workout['workout_name'] . ":" . $workout['workout_type'] . " " . $workout['duration'] .'</p>';
        }

          ?>
        </body>
        </html>
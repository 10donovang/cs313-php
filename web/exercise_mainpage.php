<!DOCTYPE html>
<html>
        <body>
        <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


		
        require ('exercise_model.php');
        require ('connect.php');
        echo "<h1><strong>Workout Selection</strong></h1>";
        echo'
        <form action="exercise_mainpage.php" method="GET">
    <select name="type">
    <option value="Cross Fit">Cross Fit</option>
    </select>
    <select name="time">
    <option value="Long">Long</option>
    <option value="Med">Medium</option>
    <option value="Short">Short</option>
    </select>
    <br><br>
    <input type="submit">
    </form>';
    $time = "'" . $_GET['time'] . "'";
    $type = "'" . $_GET['type'] . "'";
    $workouts = getWorkoutChoice($time, $type);
    echo implode($workouts);
        foreach($workouts as $workout){
            echo "<p><strong>" . $workout['workout_name'] . ":" . $workout['workout_type'] . " " . $workout['duration'] .'</p>';
        }
        ?>
        </body>
        </html>
         

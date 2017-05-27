<!DOCTYPE html>
<html>
        <body>
        <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function getWorkoutChoice($time, $type){
    global $db;
    $query = 'SELECT * FROM workouts WHERE duration like $time and workout_type like $type';
    $statement = $db->prepare($query);
    $statement->execute();
    $workouts = $statement->fetchAll();
    $statement->closeCursor();
    return $workouts;
}
		
        
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

    $workouts = getWorkoutChoice($_GET['time'], $_GET['type']);
    echo implode($workouts);
        foreach($workouts as $workout){
            echo "<p><strong>" . $workout['workout_name'] . ":" . $workout['workout_type'] . " " . $workout['duration'] .'</p>';
        }
        ?>
        </body>
        </html>
         

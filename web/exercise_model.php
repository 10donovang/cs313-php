<?php
function getWorkoutChoice($time, $type){
    global $db;
    $query = 'SELECT * FROM workouts WHERE workout_type=$type AND duration=$time';
    $statement = $db->prepare($query);
    $statement->execute();
    $workouts = $statement->fetchAll();
    $statement->closeCursor();
    return $workouts;
}
?>
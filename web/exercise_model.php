<?php
function getWorkoutChoice($time, $type){
    global $db;
    $query = "SELECT * FROM workouts WHERE duration like $time and workout_type like $type";
    $statement = $db->prepare($query);
    $statement->execute();
    $workouts = $statement->fetchAll();
    $statement->closeCursor();
    return $workouts;
}

function getWorkout($id){
    global $db;
    $query = "SELECT * FROM workout_routine WHERE workout_id like $id";
    $statement = $db->prepare($query);
    $statement->execute();
    $workouts = $statement->fetchAll();
    $statement->closeCursor();
    return $routine;
}
?>


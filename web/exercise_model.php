<?php
function getWorkoutChoice(){
    global $db;
    $query = 'SELECT * FROM workouts';
    $statement = $db->prepare($query);
    $statement->execute();
    $workouts = $statement->fetchAll();
    $statement->closeCursor();
    return $workouts;
}
?>


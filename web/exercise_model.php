<?php
function getWorkoutChoice($time, $type){
    global $db;
    $query = "SELECT * FROM workouts WHERE duration like 'Long'";
    $statement = $db->prepare($query);
    $statement->execute();
    $workouts = $statement->fetchAll();
    $statement->closeCursor();
    return $workouts;
}
?>


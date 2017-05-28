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
    $query = "SELECT * FROM workout_routine WHERE workout_id = $id";
    $statement = $db->prepare($query);
    $statement->execute();
    $routine = $statement->fetchAll();
    $statement->closeCursor();
    return $routine;
}

function getWorkout($name){
    global $db;
    $query = "SELECT * FROM workout_routine WHERE workout_name = $name";
    $statement = $db->prepare($query);
    $statement->execute();
    $routine = $statement->fetchAll();
    $statement->closeCursor();
    return $routine;
}

function saveUser($first, $middle, $last, $user, $pass){
    global $db;
    $query = "INSERT INTO users VALUES (NEXTVAL('users_s1')
, $first
, $middle
, $last
, current_date
, $user
, $pass
)";
    $statement = $db->prepare($query);
    $statement->execute();
}

function getUser($user, $pass){
    global $db;
    $query = "SELECT * FROM users WHERE user_name = $user AND password = $pass";
    $statement = $db->prepare($query);
    $statement->execute();
    $user = $statement->fetchAll();
    $statement->closeCursor();
    return $user;
}

?>


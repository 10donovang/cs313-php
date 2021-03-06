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

function getWorkoutByName($name){
    global $db;
    $query = "SELECT * FROM workouts WHERE workout_name = $name";
    $statement = $db->prepare($query);
    $statement->execute();
    $routine = $statement->fetchAll();
    $statement->closeCursor();
    return $routine;
}

function getWorkoutById($id){
    global $db;
    $query = "SELECT * FROM workouts WHERE workout_id = $id";
    $statement = $db->prepare($query);
    $statement->execute();
    $routine = $statement->fetchAll();
    $statement->closeCursor();
    return $routine;
}

function saveUser($first, $middle, $last, $user, $pass){
    global $db;
    $query = "INSERT INTO users VALUES (NEXTVAL('users_s1')
, '$first'
, '$middle'
, '$last'
, current_date
, '$user'
, '$pass'
)";
    $statement = $db->prepare($query);
    $statement->execute();
}

function verifyLogin($username){
    global $db;
    $query = "SELECT * FROM users WHERE user_name like $username";
    $statement = $db->prepare($query);
    $statement->execute();
    $user = $statement->fetchAll();
    $statement->closeCursor();
    return $user;
}

function saveUserNotes($id, $wid, $notes){
    global $db;
    $query = "INSERT INTO user_saves VALUES (NEXTVAL('user_saves_s1')
, $id
, current_date
, $wid
, $notes
)";
    $statement = $db->prepare($query);
    $statement->execute();
}

function getInfo($id){
    global $db;
    $query = "SELECT * FROM user_Saves WHERE user_id = $id";
    $statement = $db->prepare($query);
    $statement->execute();
    $routine = $statement->fetchAll();
    $statement->closeCursor();
    return $routine;
}

?>


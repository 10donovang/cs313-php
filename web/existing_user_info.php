<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require ('exercise_model.php');
require ('connect.php');
//Start Session
session_start();

//Set username variable
$username =   filter_input(INPUT_POST,'username');
            $uname = "'" . $username . "'";
            $password = filter_input(INPUT_POST,'password');
            $wname = "'" . filter_input(INPUT_POST,'wname') . "'";
            $notes = "'" . filter_input(INPUT_POST,'notes') . "'";
            
            $workouts = getWorkoutByName($wname);
            
            foreach($workouts as $workout){
            $wid = $workout['workout_id'];}
            
            
            $user = verifyLogin($uname);
            
            foreach($user as $users){
            $id = $users['user_id'];}
            saveUserNotes($id, $wid, $notes);

//Check session info
if(isset($username))
{
    echo "Workout Saved. To see all previous workouts press <a href='existing_user_info.php?id=" . $id . "'>here.</a><br>";
    echo "To go back to workout selection press <a href='exercise_mainpage.php'> here. </a>";
}

else
{
    header("Location:existing_user.php");
    die();
}

if(isset($_GET['id'])){
$id = $_GET['id'];
$data = getInfo($id);
foreach($data as $input){
    $workout = getWorkoutById($input['workout_id']);
    foreach($workout as $name){
echo $input['workout_date'] . ": " . $input['workout_notes'] . "The workout you did today is: " . $name['workout_name'] . "<br><br>";
}}
 }
?>
<!DOCTYPE html>
<html>

    
    
    <body>
    
        
    </body>

</html>
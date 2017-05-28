<!DOCTYPE html>
<html>
        <body>
        <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


		
        require ('exercise_model.php');
        require ('connect.php');
        
$user = "'" . $_POST['uname'] . "'";
$pass = "'" . $_POST['pass'] . "'";
$users = getUser($user, $pass);
foreach($users as $user){
$id = $user['user_id'];}
$wname = "'" . $_POST['wname'] . "'";
$workouts = getWorkoutByName($wname);
foreach($workouts as $workout){
$wid = $workout['workout_id'];}
$notes = "'" . $_POST['notes'] . "'";
saveUserNotes($id, $wid, $notes);




        ?>
        </body>
        </html>
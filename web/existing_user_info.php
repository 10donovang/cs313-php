<!DOCTYPE html>
<html>
        <body>
        <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


		
        require ('exercise_model.php');
        require ('connect.php');
         if(!isset($_GET['id'])){
$user = "'" . $_POST['uname'] . "'";
$pass = "'" . $_POST['pass'] . "'";
$users = getUser($user, $pass);
foreach($users as $user){
    echo $user['user_id']
$id = $user['user_id'];}
$wname = "'" . $_POST['wname'] . "'";
$workouts = getWorkoutByName($wname);
foreach($workouts as $workout){
$wid = $workout['workout_id'];}
$notes = "'" . $_POST['notes'] . "'";
saveUserNotes($id, $wid, $notes);
echo "Workout Saved. To see all previous workouts press <a href='existing_user_info.php?id=" . $id . "'>here.</a><br>";
echo "To go back to workout selection press <a href='exercise_mainpage.php'> here. </a>";

}

 if(isset($_GET['id'])){
$id = $_GET['id'];
$data = getInfo($id);
foreach($data as $input){
echo $input['workout_date'] . ": " . $input['workout_notes'] . "<br><br>";
}
 }




        ?>
        </body>
        </html>

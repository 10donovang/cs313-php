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



echo '<form action="" method="get">
Workout Name: <input type="text" name="wname"><br>
Notes: <textarea name="notes" cols="40" rows = "8"></textarea><br>
<input type="submit">
</form> '

$wname = "'" . $_GET['wname'] . "'";
$workout = getWorkoutByName($wname);
}




        ?>
        </body>
        </html>
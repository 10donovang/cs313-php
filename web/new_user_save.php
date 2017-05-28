<!DOCTYPE html>
<html>
        <body>
        <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


		
        require ('exercise_model.php');
        require ('connect.php');
        
$first = "'" . $_POST['fname'] . "'";
$middle = "'" . $_POST['mname'] . "'";
$last = "'" . $_POST['lname'] . "'";
$user = "'" . $_POST['uname'] . "'";
$pass = "'" . $_POST['pass'] . "'";

$users = saveUser($first, $middle, $last, $user, $pass);

foreach($users as $user){
            echo "<p>" . $user['first_name'] . "'>" .  $user['middle_name'] . " " . $user['last_name'] . " " . $user['user_name'] ."</p>";





        ?>
        </body>
        </html>
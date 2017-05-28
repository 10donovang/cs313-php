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
saveUser($first, $middle, $last, $user, $pass);
$users = getUser($user, $pass);
foreach($users as $user){
            echo  $user['first_name'] . " " . $user['middle_name'] . " " . $user['last_name'] . " Username: " . $user['user_name'] . " Password: " . $user['password'];}

            







        ?>
        </body>
        </html>
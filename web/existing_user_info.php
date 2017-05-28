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
$user = getUser($user, $pass);
echo $user['first_name'];
$id = $user['user_id'];







        ?>
        </body>
        </html>
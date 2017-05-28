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

print_r(array_values($user));







        ?>
        </body>
        </html>
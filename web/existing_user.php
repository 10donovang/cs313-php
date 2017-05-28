<!DOCTYPE html>
<html>
        <body>
        <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


		
        require ('exercise_model.php');
        require ('connect.php');
echo '<form action="existing_user_info.php" method="post">
User Name: <input type="text" name="uname"><br>
Password: <input type="text" name="pass"><br>
Workout Name: <input type="text" name="wname"><br>
Notes: <textarea name="notes" cols="40" rows = "8"></textarea><br>
<input type="submit">
</form> '
        ?>
        </body>
        </html>
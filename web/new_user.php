<!DOCTYPE html>
<html>
        <body>
        <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


		
        require ('exercise_model.php');
        require ('connect.php');
        
        echo '<form action="new_user_save.php" method="post">
First Name: <input type="text" name="fname"><br>
Middle Inital: <input type="text" name="mname"><br>
Last Name: <input type="text" name="lname"><br>
User Name: <input type="text" name="uname"><br>
Password: <input type="text" name="pass"><br>
<input type="submit">
</form> '




        ?>
        </body>
        </html>
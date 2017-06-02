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

            
echo '<br><br><br> Click here to insert your workout information.
            <form action="existing_user.php" method="POST">
    <input type="submit" value="Submit">
    </form>';






        ?>
        </body>
        </html>

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
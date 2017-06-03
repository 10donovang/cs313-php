<?php

//Start session to allow session data to be stored
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

//Dependencies
require ('exercise_model.php');
        require ('connect.php');

$message = '';
//Verify Login
if(isset($_POST['username']) && $_POST['password'])
        {
            $username =   filter_input(INPUT_POST,'username');
            $uname = "'" . $username . "'";
            $password = filter_input(INPUT_POST,'password');
            $wname = "'" . filter_input(INPUT_POST,'wname') . "'";
            $notes = filter_input(INPUT_POST,'notes');
            
            $workouts = getWorkoutByName($wname);
            
			foreach($workouts as $workout){
			$wid = $workout['workout_id'];}
			
			
            $user = verifyLogin($username);
            print_r(array_values($user));
            foreach($user as $users){
			$id = $users['user_id'];}
			saveUserNotes($id, $wid, $notes);
            foreach ($user as $userInfo)
            {
                $db_pass = $userInfo['password'];
                if(password_verify($password,$db_pass))
                {
                    $_SESSION["auth_username"] = $userInfo['username'];
                     $_SESSION["user_id"] = $userInfo['user_id'];
                    header("Location:existing_user_info.php");
                    die();
                }
                else
                {
                    $message = "Login failed. Please try again.";
                    header("Location:existing_user.php");
                    die();
                }
            }
        }
else
{
    ?>

<!DOCTYPE html>
<html>
       <head>
    <title>Login Page</title>
</head>
<body>
    <section>
        <?php echo $message; ?>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <p>Username: <input type="text" name="username"></p>
            <p>Password: <input type="password" name="password"></p>
            <p>Workout Name: <input type="text" name="wname"></p>
			<p>Notes: <textarea name="notes" cols="40" rows = "8"></textarea></p>
            <p><input type="submit" value="Login"></p>
        </form>
        
    </section>
    
</body>

</html>
<?php
}
?>



		
        

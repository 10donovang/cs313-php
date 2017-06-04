<?php

//Start session to allow session data to be stored
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

//Dependencies
require ('exercise_model.php');
        require ('connect.php');
    ?>

<!DOCTYPE html>
<html>
       <head>

<link rel="stylesheet" type="text/css" href="style.css">

    <title>Login Page</title>
</head>
<body>
<div class='center'>
    <section>
        <?php echo $message; ?>
        
        <form method="post" action="existing_user_info.php">
            <p>Username: <input type="text" name="username"></p>
            <p>Password: <input type="password" name="password"></p>
            <p>Workout Name: <input type="text" name="wname"></p>
			<p>Notes: <textarea name="notes" cols="40" rows = "8"></textarea></p>
            <p><input type="submit" value="Login"></p>
        </form>
        
    </section>
    </div>
    
</body>

</html>




		
        

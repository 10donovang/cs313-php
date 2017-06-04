<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//Include some dependencies
require ('exercise_model.php');
        require ('connect.php');

//Some post variables
$fname =  filter_input(INPUT_POST,'fname');
$mname =  filter_input(INPUT_POST,'mname');
$lname = filter_input(INPUT_POST,'lname');
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'pass');
$vpass = filter_input(INPUT_POST,'vpass');

$message = '';
$emphasis = '';

//Password verification
if (isset($password) && isset($vpass) && isset($username))
    {
        if($password == $vpass)
        {

            if(strlen($vpass) < 7)
                {
                    //Notify the user what happened
                    $message = '<span style="color:red;">The password you provided does not meet the requirements. Please try again.</span>';
                    $emphasis = '<span style="color:red;">*</span>';
                }
            else
                {
                    //Hash the password
                    $pass_hashed = password_hash($password,PASSWORD_DEFAULT);
                    
                    //Register the user in the database
                    saveUser($fname, $mname, $lname, $username,$pass_hashed);
                    
                    //Redirect them to signin page
                    header('Location:existing_user.php');
                        die();
                }
        }
        else
        {
            $message = '<span style="color:red;">The passwords do not match. Please try again.</span>';
            
            $emphasis = '<span style="color:red;">*</span>';
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Signup Page</title>
    </head>
<body>
<script src="check.js"></script>
<div class='center'>
<section>
    
    <h1>Please fill in your information below to signup</h1>
    
    <?php echo $message; ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return checkForm(this);">
        
        <p>First Name: <input type="text" name="fname"></p>
        	<?php echo $emphasis; ?>
        	
		<p>Middle Inital: <input type="text" name="mname"></p>
			<?php echo $emphasis; ?>

		<p>Last Name: <input type="text" name="lname"></p>
        	<?php echo $emphasis; ?>

        <p>
        Username: <input type="text" name="username">
        </p>
        
        <p>
        Password: <input type="password" name="pass">
            <?php echo $emphasis; ?>
            
        </p>


        <p>
        Verify Password: <input type="password" name="vpass">
            <?php echo $emphasis; ?>
        </p>
        
        <p>
        <input type="submit" value="Sign up!">
        </p>
    
    </form>
    
    </section>
    </div>
</body>
</html>














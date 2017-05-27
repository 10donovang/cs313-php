<?php
    session_start();
    ?>

<!DOCTYPE html>
<html>
        <body>
        <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


		
        require ('exercise_model.php');
        require ('connect.php');
        echo "<h1><strong>Workout Selection</strong></h1>";
        $SESSION['time'] = $_POST['time'];
        echo'
        <form action="exercise_choices.php" method="POST">
    <select name="type">
    <option value="Cross Fit">Cross Fit</option>
    </select>
    <select name="time">
    <option value="Long">Long</option>
    <option value="Med">Medium</option>
    <option value="Short">Short</option>
    </select>
    <br><br>
    <input type="submit">
    </form>';
   
        ?>
        </body>
        </html>
         

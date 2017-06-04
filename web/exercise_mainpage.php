<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
        <body>
        <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


		
        require ('exercise_model.php');
        require ('connect.php');
        echo "<div class='center'><h1><strong>Workout Selection</strong></h1>";  
        echo'
        <form action="exercise_choices.php" method="POST">
    <select name="type">
    <option value="Cross Fit">Cross Fit</option>
     <option value="Cardio">Cardio</option>
      <option value="Muscle Building">Muscle Building</option>
    </select>
    <select name="time">
    <option value="Long">Long</option>
    <option value="Med">Medium</option>
    <option value="Short">Short</option>
    </select>
    <br><br>
    <input type="submit">
    </form></div>';

   
        ?>
        </body>
        </html>
         

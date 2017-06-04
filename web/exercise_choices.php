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
        if(!isset($_GET['id'])){
 $time = "'" . $_POST['time'] . "'";
    $type = "'" . $_POST['type'] . "'";
    $workouts = getWorkoutChoice($time, $type);
    echo "<div class='center'><h1>This is your optimal workout choices!<h1>";
        foreach($workouts as $workout){
            echo "<p><strong><a href='exercise_choices.php?id=" . $workout['workout_id'] . "'>" .  $workout['workout_name'] . "</a></strong>:" . $workout['workout_type'] . " " . $workout['duration'] ."</p></div>";
        }
    }

    if(isset($_GET['id'])){

$id =  $_GET['id'];

$routines = getWorkout($id);
foreach($routines as $routine){
	echo "<div class='center'><p>";
	if($routine['workout_1'] != null)
		echo $routine['workout_1'] . "<br>";
	if($routine['workout_2'] != null)
		echo $routine['workout_2'] . "<br>";
	if($routine['workout_3'] != null)
		echo $routine['workout_3'] . "<br>";
	if($routine['workout_4'] != null)
		echo $routine['workout_4'] . "<br>";
	if($routine['workout_5'] != null)
		echo $routine['workout_5'] . "<br>";
	if($routine['workout_6'] != null)
		echo $routine['workout_6'] . "<br>";
	if($routine['workout_7'] != null)
		echo $routine['workout_7'] . "<br>";
	if($routine['workout_8'] != null)
		echo $routine['workout_8'] . "<br>";
	if($routine['workout_9'] != null)
		echo $routine['workout_9'] . "<br>";
	if($routine['workout_10'] != null)
		echo $routine['workout_10'] . "<br>";
}
echo "</p>";
echo'
        <form action="new_user.php" method="POST">
    <input type="submit" value="New User">
    </form>';

echo'
    <form action="existing_user.php" method="POST">
    <input type="submit" value="Existing User">
    </form></div>';
}
          ?>
        </body>
        </html>
<?php
session_start();
?>

<!DOCTYPE html>
<html>
 <body>
 <?php
 	echo "Your shopping list includes: <br>";
    echo "The Best Magic Tricks of All Times by Donald McGregor: " . $_SESSIONS["n1"] . "<br>";

	echo "Math Tricks for All Times by Donald McGregor: " . $_SESSIONS["n2"] . "<br>";

	echo "The Deft Book of Magic by Donald McGregor: " . $_SESSIONS["n3"] . "<br>";

	echo "Magic Book of Math Tricks by Donald McGregory: " . $_SESSIONS["n4"];

	echo "<br> Name: " . $_POST["name"] . "<br>";
	echo "E-mail: " . $_POST["email"] . "<br>";
	echo "Phone: " . $_POST["phone"] . "<br>";
	echo "Address: " . $_POST["address"] . " " . $_POST["city"] . ", " . $_POST["state"] . " " . $_POST["zip"];
	?>

<form action="checkout.php" id="form1" method="post" >
      <input type="submit" value="Return"/>
    </form>


</body>
</html>
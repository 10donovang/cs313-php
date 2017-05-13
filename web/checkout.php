<?php
session_start();
?>

<!DOCTYPE html>
<html>
 <body>
         <form action="confirmation.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Phone Number: <input type="text" name="phone"><br>
Street Address: <input type="text" name="address"><br>
City: <input type="text" name="city"><br>
State: <input type="text" name="state"><br>
Zip: <input type="text" name="zip"><br>
<input type="submit">
</form>

<form action="cart.php" id="form1" method="post" >
      <input type="submit" value="Return"/>
    </form>


</body>
</html>
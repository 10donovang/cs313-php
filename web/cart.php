<?php
session_start();
?>

<!DOCTYPE html>
<html>

<body>

<?php

echo "Here is what is currently in your shopping cart.";
echo "<br>";
print_r($_SESSION);
echo $_SESSION["b1"];
echo "<br>";
echo "Anything you would like to add?";
?>
<div>
<select id="book1" name="book1">  Book1                    
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>                    
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
</select>
The Best Magic Tricks of All Times by Donald McGregor </div>
<br>
<div>
<select id="book1" name="book1">  Book1                    
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>                    
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
</select>
Math Tricks for All Times by Donald McGregor </div>
<br>
<div>
<select id="book3" name="book3">                      
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>                    
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
</select>
The Deft Book of Magic by Donald McGregor </div>
<br>
<div>
<select id="book4" name="book4">                      
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>                    
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
</select>
Magic Book of Math Tricks by Donald McGregory </div>
<br>
<br>
<?php
echo "Your final cart and total:";

$nums1 = $_SESSIONS["n1"] + $_POST['book1'];
$nums2 = $_SESSIONS["n2"] + $_POST['book2'];
$nums3 = $_SESSIONS["n3"] + $_POST['book3'];
$nums4 = $_SESSIONS["n4"] + $_POST['book4'];

echo "The Best Magic Tricks of All Times by Donald McGregor: " . $nums1 . <br>;



echo "Math Tricks for All Times by Donald McGregor: " . $nums2 . <br>;

echo "The Deft Book of Magic by Donald McGregor: " . $nums3 . <br>;

echo "Magic Book of Math Tricks by Donald McGregory: " . $nums4 . <br>;

$_SESSIONS["total"] = $_SESSIONS["n1"] * 4.95 + $_SESSIONS["n2"] * 20 + $_SESSIONS["n3"] * 25.95 + $_SESSIONS["n4"] * 15.95;

echo money_format("Total: %i", $_SESSIONS["total"]);
?>

<form action="storepage.html" id="form1" method="post" >
      <input type="submit" value="Return"/>
    </form>

<form action="checkout.php" id="form2" method="post" >
      <input type="submit" value="Checkout"/>
    </form>


</body>
</html>
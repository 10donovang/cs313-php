<?php
session_start();
?>

<!DOCTYPE html>
<html>
        <head>
                <meta charset="UTF-8">
                <title>Magic Tricks Bussiness</title>
                <script type="text/javascript" src="storepage.js"></script>
        </head>
        <body>
                <h1>This is the place to buy all the books of Magic Tricks!</h1>
                <p>We have many options to choose from. Please just enter the information below
                        to place your order NOW!</p>
                        <form action="cart.php" method="post">
        <ul style="list-style-type:none">
                <li><input type="checkbox" name="book1" id="1" value="value1" onclick="total()">
                The Best Magic Tricks of All Times by Donald McGregor......$4.95</li>
                <li><input type="checkbox" name="book2" id="2" value="value2" onclick="total()">
                                Math Tricks for All Times by Donald McGregor....................$20.00</li>
                                <li><input type="checkbox" name="book3" id="3" value="value3" onclick="total()">
                                The Deft Book of Magic by Donald McGregor.......................$25.95</li>
                                <li><input type="checkbox" name="book4" id="4" value="value4" onclick="total()">
                                Magic Book of Math Tricks by Donald McGregory...............$15.95</li>
                        </ul>

                        <p align="center">Total:<input type="textbox" id="total"><?php $_SESSION["total"] = document.getElementById("total").value; ?>
                        <span style="color:red; visibility:hidden" id="eTotal">Invalid Total</span></p>

<?php 

if($_POST['book1'] == 'value1'){
$_SESSION["b1"] = "The Best Magic Tricks of All Times by Donald McGregor"; 
$_SESSION["n1"] = 1; 
echo "hi";
}

if($_POST['book2'] == 'value2'){
$_SESSION["b2"] = "Math Tricks for All Times by Donald McGregor"; $_SESSION["n2"] = 1; 
}

if($_POST['book3'] == 'value3'){
$_SESSION["b3"] = "The Deft Book of Magic by Donald McGregor"; $_SESSION["n3"] = 1; 
}

if($_POST['book4'] == 'value4'){
$_SESSION["b4"] = "Magic Book of Math Tricks by Donald McGregory"; $_SESSION["n4"] = 1; 
}
?>

                        
                        <input type="submit" />
                        </form>
                         <button onclick="reset()">Reset</button>


        </body>
</html>

<!DOCTYPE html>
<html>
        <body>
        <?php

		error_reporting(E_ALL);
		ini_set("display_errors", 1);
        require ('model.php');
        require ('connect.php');
        echo "<h1><strong>Scripture Resources</strong></h1>";
        $scriptures = getScripture();
        foreach($scriptures as $scripture){
        	echo "<p><strong>" . $scripture['book'] . " " . $scripture['chapter'] . ":" . $scripture['verse'] . '</strong> - "' . $scripture['content'] . '"</p>';
        }

        ?>
        </body>
        </html>
         

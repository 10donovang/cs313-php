<!DOCTYPE html>
<html>
        <body>
        <?php
        require ('model.php');
        require ('connect.php');
        echo "<h1><strong>Scripture Resources</strong></h1>";
        $scriptures = getScripturces();
        foreach($scriptures as $scripture){
        	echo "<p><strong>" . $scripture['book'] . " " . $scripture['chapter'] . ":" . $scripture['verse'] . '</strong> - "' . $scripture['content'] . '"</p>';
        }

        ?>
        </body>
        </html>
         

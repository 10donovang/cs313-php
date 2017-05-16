<!DOCTYPE html>
<html>
        <body>
        <?php

		
        require ('model.php');
        require ('connect.php');
        echo "<h1><strong>Scripture Resources</strong></h1>";
        if(!isset($_GET['view'])){
        $scriptures = getScripture();
        foreach($scriptures as $scripture){
        	echo "<p><strong>" . $scripture['book'] . " " . $scripture['chapter'] . ":" . $scripture['verse'] . '</strong> - <a href="scriptures.php?id=' . $scripture['scripture_id'] . '"> View Scripture</a></p>';
        }
    }


        ?>
        </body>
        </html>
         

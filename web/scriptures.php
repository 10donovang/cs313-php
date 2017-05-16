<!DOCTYPE html>
<html>
        <body>
        <?php

		
        require ('model.php');
        require ('connect.php');
        echo "<h1><strong>Scripture Resources</strong></h1>";
        if(!isset($_GET)){
        ?>
        
        <form action="scriptures.php" method="GET">
        <input type="text" name="book">
        <input type="submit" value="Search">
         </form>


        <?php
        if(isset($_GET['book'])){
        $book = filter_input(INPUT_GET, 'book', FILTER_SANITIZE_STRING);
        $books = getBook($book);

        foreach($books as $scripture){
        	echo "<p><strong>" . $scripture['book'] . " " . $scripture['chapter'] . ":" . $scripture['verse'] . '</strong> - <a href="scriptures.php?id=' . $scripture['scripture_id'] . '"> View Scripture</a></p>';
}
}

        $scriptures = getScriptures();
        foreach($scriptures as $scripture){
        	echo "<p><strong>" . $scripture['book'] . " " . $scripture['chapter'] . ":" . $scripture['verse'] . '</strong> - <a href="scriptures.php?id=' . $scripture['scripture_id'] . '"> View Scripture</a></p>';
        }
    }

    if(isset($_GET['id'])){
    	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    	$scriptures = getScripture($id);
        foreach($scriptures as $scripture){
        	echo "<p><strong>" . $scripture['book'] . " " . $scripture['chapter'] . ":" . $scripture['verse'] . '</strong> - "' . $scripture['content'] . '"</p>';
        }
    }


        ?>
        </body>
        </html>
         
